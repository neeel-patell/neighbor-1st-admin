<?php
    session_start();
    if(isset($_SESSION['log_attempt']) && $_SESSION['log_attempt'] >= 3)
        header("location: error.php");
    $msg = "";
    if(isset($_GET['msg']))
        $msg = $_GET['msg'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Neighbor-1st Login</title>
        <?php include 'css_files.php'; ?>
    </head>
    <body lang="en">
        <div class="container-fluid m-0 p-0" style="min-height: 90vh;">
            <div class="row m-0">
                <div class="col-lg-2 m-5"></div>
                <div class="col-lg-6 card rounded shadow p-0 m-5">
                    <div class="container-fluid text-center h3 bg-dark p-4 text-white m-0" style="font-family: Verdana;">Login</div>
                    <div class="text-center m-0" style="font-family: 'Lucida Console', Monaco, monospace;">
                        <?php
                            if($msg == "fail"){ 
                        ?>
                            <div class="alert alert-danger m-0 h6 font-weight-bold">You used wrong credentials for Admin...</div>
                        <?php 
                            }
                        ?>
                    </div>
                    <form action="login.php" method="POST" class="container p-3 card">
                        <div class="container text-monospace p-2 mt-2 mb-2">
                            <label class="font-weight-bold text-danger ">Email:</label>
                            <input type="email" name="username" id="username" class="form-control" placeholder="Enter Email Addess">
                        </div>
                        <div class="container text-monospace p-2 mt-2 mb-2">
                            <label class="font-weight-bold text-danger ">Password:</label>
                            <div class="input-group">
                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password for admin account">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" id="see" type="button"><i class="fas fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-4 mb-3">
                            <button type="submit" class="form-control btn-success">Login <i class="fas fa-key"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 m-5"></div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <script type="text/javascript">
            $('#see').click(function(){
                if($("#pass").attr('type') == "password"){
                    $("#pass").attr('type','text');
                    $("#see").html('<i class="fas fa-eye-slash"></i>');
                }
                else{
                    $("#pass").attr('type','password');
                    $("#see").html('<i class="fas fa-eye"></i>');
                }
            });
        </script>
    </body>
</html>