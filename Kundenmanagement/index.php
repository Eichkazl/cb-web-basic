<?php
include 'functions.php';

$pdo = pdo_connect_mysql();

session_start();
$currentUser = $_SESSION["currentUser"];

$stmt = $pdo->prepare('SELECT * FROM customer WHERE created_by = ? ORDER BY edited_on DESC');
$stmt->execute([$currentUser]);
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Customers')?>

<div class="content home">

	<h2>Your Customers:</h2>

	<div class="customers-list">
		<?php foreach ($customers as $customer): ?>
		<a href="view.php?id=<?=$customer['id']?>" class="customer">
			
			<span class="con_main">
				<span class="con">
				<?php if ($customer['status'] == 'Active'): ?>
				    <i class="far fa-clock fa-2x"></i>
				<?php elseif ($customer['status'] == 'Completed'): ?>
				    <i class="fas fa-check fa-2x"></i>
				<?php elseif ($customer['status'] == 'Dissolved'): ?>
				    <i class="fas fa-times fa-2x"></i>
				<?php endif; ?>
				</span>
				<span class="con">
				<span class="name"><?=htmlspecialchars($customer['company_name'], ENT_QUOTES)?></span>
				<span class="contact"><?=htmlspecialchars($customer['contact_Person'], ENT_QUOTES)?>: <?=htmlspecialchars($customer['phone_Number'], ENT_QUOTES)?></span>
				</span>
			</span>
			<span class="con">

				<?php

					if ($customer['adress'] != Null) {

						$stmt = $pdo->prepare('SELECT * FROM adress WHERE id = ?');
						$stmt->execute([$customer['adress']]);
						$adress = $stmt->fetch();

						AddressEcho($adress['street'], $adress['nr']);
						AddressEcho($adress['city'], $adress['plz']);
					}
					
				?>

				</span>
			<span class="con">
				<span class="created"><?=date('F dS, G:ia', strtotime($customer['created_on']))?></span>
				<span class="created"><?=date('F dS, G:ia', strtotime($customer['edited_on']))?></span>
			</span>

		</a>
		<?php endforeach; ?>
	</div>

	
	<div class="btns">
		<a href="create.php" class="btn">New Customer</a>
	</div>

</div>

<?=template_footer()?>