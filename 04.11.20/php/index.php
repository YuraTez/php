<?php
include 'function.php';


$login = $password = $confirmPassword = $email = $name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = test_input($_POST["password"]);
    $confirmPassword = test_input($_POST["confirm-password"]);
    $email = test_input($_POST["email"]);
    $name = test_input($_POST["name"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo "<h2>Ваш ввод:</h2>";
echo  strValid($login);
echo "<br>";
echo strValid($password);
echo "<br>";
echo strValid($confirmPassword);
echo "<br>";
echo $email;
echo "<br>";
echo $name;