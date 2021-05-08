<?php include ("connect.php");
$email = $_POST["email"];
$pass = $_POST["pass"];
$message = "";

if (isset($email) && isset($pass)){
    if($email != "" && $pass != ""){
        $getuser = $db->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $usr = mysqli_fetch_array($getuser);
        if($usr["email"] == $email && $usr["pass"] == $pass){
            $_SESSION['id'] = $usr["id"];
            $_SESSION['username'] = $usr["nickname"];
            $_SESSION['role'] = $usr["role"];
            
        }
        else{
            $message =  "Не верные данные";
        }
        
        }
    
    else{
        $message = "вы не заполнили полчя ";
    }
}
?>






<div class="footer section">
    <div class="container">
        <h1 class="title text-center" id="contact">Войти/регистрация</h1>
        <div class="space"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="footer-content">
                    <p class="large">Повседневная практика показывает, что новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений. </p>
                    <ul class="list-icons">
                        <li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
                        <li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
                        <li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
                        <li><i class="fa fa-envelope-o pr-10"></i> your@email.com</li>
                    </ul>
                    <ul class="social-links">
                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                        <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                        <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                        <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer-content">

<?php 

    if (!empty($_SESSION['username']))
    {
        echo "Приветики " . $_SESSION["username"] . " <br> <a href='block/exit.php'>out</a>";
    }
    else
    {
print <<<HERE

<form role="form" id="footer-form" method = "POST">
<div class="form-group has-feedback">
    <label class="sr-only" for="email2">Введите Ваш email</label>
    <input type="email" class="form-control" id="email" placeholder="Введите Ваш email" name="email" required>
    <i class="fa fa-envelope form-control-feedback"></i>
</div>
<div class="form-group has-feedback">
    <label class="sr-only" for="email2">Введите Ваш пароль</label>
    <input type="password" class="form-control" id="pass" placeholder="Введите Ваш Пароль" name="pass" required>
    <i class="fa fa-envelope form-control-feedback"></i>
</div>													
<input type="submit" value="Войти" class="btn btn-default">	
<p>Еще нет аккаунта? <a href="index.php#contact">Регистрация</a></p>
</form>

HERE;
    }

if ($message != "")
{
    echo $message;
}


?>





                </div>
            </div>
        </div>
    </div>
</div>