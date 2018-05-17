<?php
	//require_once('../../api/config/mysql.php');
	require_once('config/mysql.php');
	
		$db     = new EissonConnect();
		$dbh     = $db->enchufalo();

 	//$id = $_POST['id'];

 $id=$_POST["id"];
 echo "la alarma que esta siendo activada es: ".$id;

/*function setInterval($f, $milliseconds)
{
    $seconds=(int)$milliseconds/1000;
    while(true)
    {
        $f();
        sleep($seconds);
    }
}
setInterval(function(){*/
    echo "<p>jecutar activacion cada 30 seg!\n</p>";

		$q = 'UPDATE alarmas SET estado= "2" 
				WHERE id=(:id)';

			global $id, $db, $dbh;

			$stmt = $dbh->prepare($q);
			$stmt->bindParam(':id',  $id, PDO::PARAM_STR);


			$stmt->execute();
			$rpta=array('success' => 'correcto');
			
			
			 echo json_encode($rpta);
//}, 1000);


	//var_dump($username);
	
?>