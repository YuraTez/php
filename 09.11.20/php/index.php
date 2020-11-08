<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@500&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <!--    <link rel="stylesheet" href="css/mobile.css">-->
</head>
<body>
<header class="header">
    <div class="header-wrapper">
        <h1 class="header-title">Form registration</h1>
        <div class="header-button-block" id="header-button-block">
            <button class="header-button" id="btn-signUp">sign up</button>
            <button class="header-button" id="btn-login">login</button>
        </div>
    </div>
</header>
<section class="registration" id="registration">
    <div class="registration-wrapper" id="registration-wrapper">
        <div class="registration-block" id="registration-block">
            <span class="close">
            </span>
            <form action="index.php" method="post" class="registration-block-form registration-submit">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" id="login" name="login">
                    <div class="error-container">
                        <div class="invalid">
                            is required
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="number-function">Number function please 1-5</label>
                    <input type="text" id="number-function" name="number-function">
                    <div class="error-container">
                        <div class="invalid">
                            is required
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" id="password" name="password" class="pass">
                     <div class="error-container">
                         <div class="invalid">
                             is required
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="confirm-password">Confirm password</label>
                     <input type="password" id="confirm-password" name="confirm-password" class="pass-conf">
                     <div class="error-container">
                         <div class="invalid">
                             is required
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" id="email" name="email">
                     <div class="error-container">
                         <div class="invalid">
                             is required
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" id="name" name="name">
                     <div class="error-container">
                         <div class="invalid">
                             is required
                         </div>
                     </div>
                 </div>-->
                <div class="form-group">
                    <button type="submit" class="btn-registration" id="btn-registration">Submit</button>
                </div>
            </form>
        </div>
        <div class="registration-block" id="registration-block-login">
             <span class="close">
            </span>
            <form action="" method="post" class="registration-block-form">
                <div class="form-group">
                    <label for="login-login">Login</label>
                    <input type="text" id="login-login">
                </div>
                <div class="form-group">
                    <label for="password-login">Password</label>
                    <input type="password" id="password-login">
                </div>
                <div class="form-group">
                    <button class="btn-registration" id="btn-up-login">login</button>
                </div>
            </form>
        </div>
        <div class="overlay" id="overlay"></div>
    </div>
</section>

<script src="../js/main.js"></script>
</body>
</html>



<?php
include 'function.php';


$login = $numberFunction = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST["login"];
    $numberFunction = $_POST["number-function"];
}
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $numberFunction = test_input($_POST["number-function"]);
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
}*/


function processingStr($str, $strFunction){
    if($strFunction === '1'){
     return  strFilter($str);
    } else if($strFunction === '2'){
        return  filterStr($str);
    } else if($strFunction === '3'){
        return  palindrome($str);
    } else if($strFunction === '4'){
        return  longWord($str);
    } else if($strFunction === '5'){
        return  filterStr($str);
    }
}

echo "<h2>Ваш ввод:</h2>";
echo  processingStr($login, $numberFunction);
echo "<br>";
echo  "number function"."-".$numberFunction;
echo  "<section.result-form-submit>
    
</section>";