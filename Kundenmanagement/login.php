<!DOCTYPE html>
<html>
	<head>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<meta charset="utf-8">
		<title>Login</title>
		<link href="logins.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


	</head>
	<body>
        <?php
            include 'functions.php';
            $pdo = pdo_connect_mysql();

            if (isset($_POST['user']) && !empty($_POST['user']) && 
                isset($_POST['email']) && !empty($_POST['email']) &&
                isset($_POST['password']) && !empty($_POST['password']) &&
                isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']) 
                && $_POST['password'] == ($_POST['confirmPassword'])) {
                
                $stmt = $pdo->prepare('INSERT INTO user (name, Email, password) VALUES (?, ?, ?)');
                $stmt->execute([$_POST['user'], $_POST['email'], $_POST['password']]);
            }
            

            if (isset($_POST['logUser']) && !empty($_POST['logUser']) && 
                isset($_POST['logPass']) && !empty($_POST['logPass'])){

                    $statement = $pdo->prepare("SELECT * FROM user WHERE name = :name OR Email = :email");
                    $statement->execute(array(':name' => $_POST['logUser'], 
                                              ':email' => $_POST['logUser']));

                    $userData = $statement->fetch();

                        if ($_POST['logPass'] == $userData['password']) {


                        session_start();
                        $_SESSION["currentUser"] = $userData['id'];

                        header('Location: index.php');
                        }
                exit;
            }
        ?>

        <div class="login-reg-panel">
            <div class="login-info-box">
                <h2>Have an account?</h2>
                <input type="button" name="active-log-panel" id="reg-show-btn" value="Login">
            </div>
                                
            <div class="register-info-box">
                <h2>Don't have an account?</h2>
                <input type="button" name="active-log-panel" id="login-show-btn" value="Register">
                
            </div>
                                
            <form class="white-panel" action="" method="post">
                <div class="login-show">
                    <h2>LOGIN</h2>

                    <input name="logUser" type="text" placeholder="Email or Username">

                    <p>
                        <input name="logPass" type="password" id="password" placeholder="Password">
                        <i class="passwordToggle bi bi-eye-slash fa-lg" id="togglePassword1"></i>
                    </p>
                    <input type="submit" value="Login">
                    <a href="">Forgot password?</a>
                </div>
                <div class="register-show">
                    <h2>REGISTER</h2>

                    <input name="user" type="text" placeholder="Username">

                    <input name="email" type="text" placeholder="Email">

                    <p>
                        <input name="password" type="password" id="regpassword" placeholder="Password">
                        <i class="passwordToggle bi bi-eye-slash fa-lg" id="togglePassword2"></i>
                    </p>

                    <p>
                        <input name="confirmPassword" type="password" id="conpassword" placeholder="Confirm Password">
                        <i class="passwordToggle bi bi-eye-slash fa-lg" id="togglePassword3"></i>
                    </p>
                    <input type="submit" value="Register">
                </div>
            </form> 
        </div>

    <script src="login.js"></script>

    <script>
        
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('#login-show-btn').click(function() {

        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
});

$('#reg-show-btn').on('click', function() {

    $('.register-info-box').fadeIn();
    $('.login-info-box').fadeOut();
    
    $('.white-panel').removeClass('right-log');
    
    $('.login-show').addClass('show-log-panel');
    $('.register-show').removeClass('show-log-panel');


        
});
    </script>

    </body>
</html>


