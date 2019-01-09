<?php include("header.php");
    if(isset($_POST["logout"])){
       session_start();
        session_unset();
        session_destroy();
        echo "logout";
        echo "<script>window.location.href='index.php';</script>";
    }
session_start();
include "config.php";
/*if(isset($_SESSION['user']) && isset($_SESSION['user']) == "myProject-admin" ){
  echo "<script>window.location.href='welcome.php';</script>";
}*/


if(isset($_POST['user_id'])) {
    $userName = trim($_POST["username"]);
    $userID = trim( $_SESSION['UserID']);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $password = MD5($password);
    $sql = "UPDATE users SET user_name='$userName',password='$password',email='$email' WHERE user_id='$userID'";
    $delete =  "DELETE FROM users WHERE user_id=$userID";

    if($con->query($sql)){
        echo 'successfully update user';
    }else{
      echo  mysqli_error($con);
    }

    if($con->query($delete)){
        echo 'successfullyd Delete user';
    }else{
        echo  mysqli_error($con);
    }

}



$uId = null;
$uName = null;
$uEmail = null;
$uPassword = null;
if(isset($_GET['id']))
{
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE user_id='$user_id'";
    $result = mysqli_query($con,$sql);
    foreach ($result as $user){
       $uId = $user['user_id'];
       $uName = $user["user_name"];
       $uEmail = $user["email"];
       $uPassword = $user["password"];
       $_SESSION['UserID'] =$user['user_id'];
    }
    ?>

    <div class="form-signin">
        <div class="text-center">
            <img src="assets/img/logo.png" alt="Metis Logo">
            <?php ?>
        </div>

        <hr>
        <div class="tab-content">

            <div id="signup" class="tab-pane active">
                <form method="post" action="edit.php">
                    <input type="text" value="<?php echo $uName; ?>" name="username" placeholder="username" class="form-control top">
                    <input type="email" value="<?php echo $uEmail; ?>" name="email" placeholder="mail@domain.com" class="form-control middle">
                    <input type="password"  value="<?php echo $uPassword; ?>"  name="password" placeholder="password" class="form-control middle">
                    <input type="hidden"  value="<?php echo $uId; ?>"  name="user_id" placeholder="password" class="form-control middle">
                    <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
                </form>
            </div>

        </div>
        <hr>

    </div>

    <?php
    }
include "footer.php";?>