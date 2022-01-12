<?php include('core/init.php'); ?>
<?php include('libraries/Database.php');?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("INSERT INTO `contacts` (first_name, last_name, email, phone, Country)
								VALUES (:first_name, :last_name, :email, :phone, :Address, :Country)");

//Bind Values
$db->bind('first_name', $_POST['first_name']);
$db->bind('last_name', $_POST['last_name']);
$db->bind('email', $_POST['email']);
$db->bind('phone', $_POST['phone']);
$db->bind('Address', $_POST['Address']);
$db->bind('Country', $_POST['Country']);


if($db->execute()){
	echo "Contact was added";
} else {
	echo "Could not add contact";
}
?>