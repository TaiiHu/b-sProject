<?php 
//error_reporting(0); 
require("conn.php");
require("check.php");
if(isset($_GET["username"])&&isset($_GET["password"]))
{
    echo $_GET["username"];
    Check_User_Exist($_GET["username"]);
    sleep(60);
try {
        $pdo=new PDO($dsn,$dbusername,$dbpassword); 
    }
catch (PDOException $e) 
    {
        die ('Error'. $e->getMessage());
    }
    $sql=$pdo->prepare("INSERT INTO users (username,password) VALUES (:username,:password)");
    $sql->execute(array(':username'=>$_GET["username"],':password'=>$_GET["password"]));
    header("Location:index.html");
}
else
{
    echo "Reload";
    die();
    header('Location:index.html');
}
?>