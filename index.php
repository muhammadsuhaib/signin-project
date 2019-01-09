<?php include("header.php");
    if(isset($_POST["logout"])){
       session_start();
        session_unset();
        session_destroy();
        echo "logout";
        echo "<script>window.location.href='index.php';</script>";
    }
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['user']) == "myProject-admin" ){
  echo "<script>window.location.href='welcome.php';</script>";
}
?>

  <div class="form-signin">
    <div class="text-center">
        <img src="assets/img/logo.png" alt="Metis Logo">
    </div>

    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form method="post" action="index.php">
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                <input type="text" name="username" placeholder="Username" class="form-control top">
                <input type="password" name="password" placeholder="Password" class="form-control bottom">
                <div class="checkbox">
		  <label>
		    <input type="checkbox"> Remember Me
		  </label>
		</div>
                <input name="submitlogin" class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html">
                <p class="text-muted text-center">Enter your valid e-mail</p>
                <input type="email" placeholder="mail@domain.com" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
            </form>
        </div>


        <div id="signup" class="tab-pane">
            <form method="post" action="register.php">
                <input type="text" name="username" placeholder="username" class="form-control top">
                <input type="email" name="email"  placeholder="mail@domain.com" class="form-control middle">
                <input type="password"  name="password"  placeholder="password" class="form-control middle">
                <button class="btn btn-lg btn-success btn-block"  type="submit">Register</button>
            </form>
        </div>

    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
  </div>

<?php
    include "config.php";
    if(isset($_POST['submitlogin'])){
        session_start();
        $userName = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM users WHERE user_name='$userName' AND password='".MD5($pass)."'";
        $result = mysqli_query($con,$sql);

        $row = mysqli_num_rows($result);
                echo $row;
              if($row > 0 ){
                  echo "<h1 style='color:white;'>welecome</h1>";
                $_SESSION['user'] = "myProject-admin";
                  echo "<script>window.location.href='welcome.php';</script>";
        }else{
            echo "<h1 style='color:white;'>Wrong Credentials</h1>";
        }
    }
?>
<?php include "footer.php";?>