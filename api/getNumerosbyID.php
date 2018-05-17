<?php
	//require_once('../../api/config/mysql.php');
	require_once('config/mysql.php');
	
	$db              = new EissonConnect();
		$dbh             = $db->enchufalo();


 	
 	
 
 if(isset($_POST['id'])){
 	$id = $_POST['id'];
 	var_dump($id);
		$q = "SELECT numero
				from usuarios_registrados where id=:id";
			$stmt = $dbh->prepare($q);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 else{

	$q = "SELECT numero
		from usuarios_registrados ";
	$stmt = $dbh->prepare($q);
	
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
	//var_dump($username);
	

echo json_encode($r); 
?>