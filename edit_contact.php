<?php include('core/init.php'); ?>
<?php include('config/config.php')?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("UPDATE `contacts` SET 
			first_name 		= :first_name,
			last_name		 = :last_name,
			email		 	= :email,
			phone		 	= :phone,
			Address 		= :Address,
			Country		 	= :Country,
			WHERE id = :id
			");

//Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':Address', $_POST['Address']);
$db->bind(':Country', $_POST['Country']);

if($db->execute()){
	echo "Contact was updated";
} else {
	echo "Could not update contact";
}
?>
