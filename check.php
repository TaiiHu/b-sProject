<?php
//error_reporting(0); 
function Check_User_Exist($username)
{
try {
		require("conn.php");
        $pdo=new PDO($dsn,$dbusername,$dbpassword); 
    }
catch (PDOException $e) 
    {
        die ('Error'. $e->getMessage());
    }
    $sql=sprintf("SELECT * FROM users WHERE username=%s",$username);
    foreach(($pdo->query($sql)) as $val)
    {
    	        	var_dump($val);	
    }
}
?>