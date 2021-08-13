<?php

include 'functions.php';
// Connect to DB
$pdo = pdo_connect_mysql();
// Check if ID exists in URL 
if (!isset($_GET['id'])) {
    exit('No ID specified!');
}
// MySQL query that selects the ticket by the ID column, using the ID GET request variable
$stmt = $pdo->prepare('SELECT * FROM customer WHERE id = ?');
$stmt->execute([$_GET['id']]);
$customer = $stmt->fetch(PDO::FETCH_ASSOC);
// Check if ticket exists
if (!$customer) {
    exit('Invalid Customer ID!');
}
$stmt = $pdo->prepare('SELECT * FROM adress WHERE id = ?');
$stmt->execute([$customer['adress']]);
$adress = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare('DELETE FROM customer WHERE id = ?');
    $stmt->execute([$customer['id']]);
    $stmt = $pdo->prepare('DELETE FROM adress WHERE id = ?');
    $stmt->execute([$customer['adress']]);

    header('Location: index.php');
}

// Update status
if (isset($_GET['status']) && in_array($_GET['status'], array('Active', 'Completed', 'Dissolved'))) {
    $stmt = $pdo->prepare('UPDATE customer SET status = ? WHERE id = ?');
    $stmt->execute([$_GET['status'], $_GET['id']]);
    header('Location: view.php?id=' . $_GET['id']);
    exit;
}
?>

<?= template_header('edit Customer') ?>


<?php
// Check if POST data exists (user submitted the form)
if (isset($_POST['company'], $_POST['person'], $_POST['phone'], $_POST['street'], $_POST['hNr'], $_POST['city'], $_POST['plz'])) {

    if (!empty($_POST['street']) || !empty($_POST['hNr']) || !empty($_POST['city']) || !empty($_POST['plz'])) {

        if ($customer['adress'] == NULL)


            $stmt = $pdo->prepare('UPDATE adress SET street = ?, nr = ?, city = ?, plz = ? WHERE id = ?');
        $stmt->execute([$_POST['street'], $_POST['hNr'], $_POST['city'], $_POST['plz'], $customer['adress']]);
    }

    $stmt = $pdo->prepare('UPDATE customer SET company_name = ? , contact_Person = ?, phone_Number = ? WHERE id = ?');
    $stmt->execute(array($_POST['company'], $_POST['person'], $_POST['phone'], $customer['id']));

    header('Location: index.php');
}

?>

<div class="content create">

    <h2>Edit <?= htmlspecialchars($customer['company_name'], ENT_QUOTES) ?>
        <span class="<?= $customer['status'] ?>">(<?= $customer['status'] ?>)</span>
    </h2>

    <div>
        <p class="created">Created: <?= date('F dS, G:ia', strtotime($customer['created_on'])) ?></p>
        <p class="created">Edited: <?= date('F dS, G:ia', strtotime($customer['edited_on'])) ?></p>
    </div>

    <div class="btns">
        <a href="view.php?id=<?= $_GET['id'] ?>&status=Active" class="btn blue">Activate</a>
        <a href="view.php?id=<?= $_GET['id'] ?>&status=Completed" class="btn">Complete</a>
        <a href="view.php?id=<?= $_GET['id'] ?>&status=Dissolved" class="btn red">Dissolve</a>
    </div>

    <form method="post">

        <label for="company">Company *</label>
        <input type="text" name="company" id="company" required value="<?php echo $customer['company_name']; ?>">

        <label for="person">Contact Person *</label>
        <input type="text" name="person" id="person" required value="<?php echo $customer['contact_Person']; ?>">

        <label for="phone">Phone Number *</label>
        <input type="text" name="phone" id="phone" required value="<?php echo $customer['phone_Number']; ?>">

        <div>
            <label for="street">Street</label>
            <input type="text" name="street" id="street" value="<?php if (!empty($adress['street'])) {
                                                                    echo $adress['street'];
                                                                } ?>">

            <label for="hNr">House Number</label>
            <input type="text" name="hNr" id="hNr" value="<?php if (!empty($adress['nr'])) {
                                                                echo $adress['nr'];
                                                            } ?>">
        </div>

        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="<?php if (!empty($adress['city'])) {
                                                                echo $adress['city'];
                                                            } ?>">

            <label for="plz">plz</label>
            <input type="text" name="plz" id="plz" value="<?php if (!empty($adress['plz'])) {
                                                                echo $adress['plz'];
                                                            } ?>">
        </div>

        <input type="submit" value="Update">
    </form>

    <div class="btns">
        <a href="view.php?id=<?=$_GET['id']?>&delete=true" class="btn red">DELETE</a>
    </div>

</div>

<?= template_footer() ?>