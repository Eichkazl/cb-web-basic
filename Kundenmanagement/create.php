<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
// Output message variable
$msg = '';
// Check if POST data exists (user submitted the form)
if (isset($_POST['company'], $_POST['person'], $_POST['phone'], 
    $_POST['street'], $_POST['hNr'], $_POST['city'], $_POST['plz'])) {
    // Validation checks... make sure the POST data is not empty
    if (empty($_POST['company']) || empty($_POST['person']) || empty($_POST['phone'])) {
        $msg = 'Please complete the form!';
    } else {

        $adresseId = NULL;

        if (!empty($_POST['street']) || !empty($_POST['hNr']) || !empty($_POST['city']) || !empty($_POST['plz'])) {
            $stmt = $pdo->prepare('INSERT INTO adress (street, nr, city, plz) VALUES (?, ?, ?, ?)');
            $stmt->execute([ $_POST['street'], $_POST['hNr'], $_POST['city'], $_POST['plz'] ]);

            $adresseId = $pdo->lastInsertId();
        }
        session_start();

        $currentUser = $_SESSION["currentUser"];

        $stmt = $pdo->prepare('INSERT INTO customer 
        (company_name, contact_Person, phone_Number, adress, created_by, status) 
        VALUES (?, ?, ?, ?, ?, ?)');

        
        $stmt->execute([ $_POST['company'], $_POST['person'], $_POST['phone'], 
                         $adresseId, $currentUser, 'Active']);
        // header('Location: view.php?id=' . $pdo->lastInsertId());
        header('Location: index.php');
    }
}
?>

<?=template_header('new Customer')?>


<div class="content create">
	<h2>Add a new Customer</h2>
    <form action="create.php" method="post">

        <label for="company">Company *</label>
        <input type="text" name="company" id="company" required>

        <label for="person">Contact Person *</label>
        <input type="text" name="person" id="person" required>

        <label for="phone">Phone Number *</label>
        <input type="text" name="phone" id="phone" required>

        <div>
            <label for="street">Street</label>
            <input type="text" name="street" id="street">

            <label for="hNr">House Number</label>
            <input type="text" name="hNr" id="hNr">
        </div>

        <div>
        <label for="city">City</label>
            <input type="text" name="city" id="city">

            <label for="plz">plz</label>
            <input type="text" name="plz" id="plz">
        </div>

        <input type="submit" value="Create">
    </form>
    
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>