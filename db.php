<i php
session_start();
Shost = "localhost";
Suser = "root";
$password = "";
$dbname = "login_db" ;

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn-›connect_error) { 
    die(" Conexão falhou: " . $conn-›connect_error);
}
?>