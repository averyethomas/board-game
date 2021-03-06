<?php   include 'page-components/header.php';

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form

            $myusername = mysqli_real_escape_string($con,$_POST['username']);
            $mypassword = mysqli_real_escape_string($con,$_POST['password']);

            $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
            $result = mysqli_query($con, $sql);
            $active_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if($count == 1) {
                $_SESSION['login_user'] = $myusername;
                $msg = "Login Successful.";
                header("location: game-board.php");
            }else {
                $msg = "Login Failed.";
            }
        }
?>

<div class="page login">
    <div class="container">
        <h1>Login</h1>
        <form method="POST">
            <div class="row">
                <input type="text" name="username" placeholder="Username *" required>
            </div>
            <div class="row">
                <input type="password" name="password" placeholder="Password *" required>
            </div>
            <div class="row">
                <button class="cta" name="submit" type="submit">Login</button>
            </div>

            <?php if(isset($msg)){ ?>
                <div class="alert" role="alert">
                    <p><?php echo $msg; ?></p>
                </div>
            <?php } ?>
        </form>
    </div>
</div>

<?php   include 'page-components/footer.php';
?>
