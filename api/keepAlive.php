<?php
	//require_once('../../api/config/mysql.php');
	require_once('config/mysql.php');
	
		$db     = new EissonConnect();
		$dbh     = $db->enchufalo();

 	
			var_dump($_POST);
foreach ($_POST as $key => $value) {
	$json=(json_decode($key));
}
	$id=$json->id;
	var_dump($id);
		$q = 'UPDATE alarmas SET estado= "2" 
				WHERE id=(:id)';
			
			$stmt = $dbh->prepare($q);
			$stmt->bindParam(':id',  $id, PDO::PARAM_STR);
			$stmt->execute();
			$rpta=array('success' => 'loco');
			// echo json_encode($rpta);
?>