<?php
//require_once("config/mysql.php");

		require_once('config/mysql.php');
		$db              = new EissonConnect();
		$dbh             = $db->enchufalo();
		$q = 'SELECT * from historico ';
		$stmt = $dbh->prepare($q);
		$stmt->execute();
		$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($r);
?>