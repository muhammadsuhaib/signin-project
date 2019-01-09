<?php
include "header.php";
include "nav.php";
session_start();
if(!isset($_SESSION['user']) && isset($_SESSION['user']) != "myProject-admin" ){
    echo "<script>window.location.href='index.php';</script>";
    exit;
}
?><!--
<h1 style="color:white;">Welcome   <?php /*echo $_SESSION['user']; */?></h1>-->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Dynamic Table</h5>
                <form method="post" action="index.php">
                    <input type="submit" value="Log Out" name="logout">
                </form>
            </header>
            <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
    include 'config.php';
    $sql = "select * from users";
    $result = mysqli_query($con,$sql);
//   / $row = mysqli_fetch($result);
   // print_r($result);

    foreach ($result as $user){ ?>

                            <tr>
                                <td><?= $user["user_id"]; ?></td>
                                <td><?= $user["user_name"]; ?></td>
                                <td><?= $user["email"]; ?></td>
                                <td><?= MD5($user["password"]); ?></td>
                                <td><a href='edit.php?id=<?php echo $user["user_id"]; ?>' >Edit</a></td>
                                <td><a href='edit.php?id=<?php echo $user["user_id"]; ?>' >Delete</a></td>
                            </tr>
    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!-- /.row -->
<!--End Datatables-->


<?php
include "footer.php";
?>
