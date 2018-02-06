<?php   include 'header.php';

        if (isset($_POST['username']) && isset($_POST['password'])){

            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "INSERT INTO user (username, firstname, lastname, email, password, game_position) VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '0')";

            $result = mysqli_query($con, $query);

            if($result){
                $msg = "User Created Successfully.";
            }else{
                $msg = "User not created. If you already have an account, please log in. Otherwise, try a different email address or username.";
            }
        }
?>

<div class="page registration">
    <div class="container">
        <h1>Registration</h1>

        <form method="POST">
            <div class="row double">
                <input type="text" name="firstname" placeholder="First Name *" required>
                <input type="text" name="lastname" placeholder="Last Name *" required>
            </div>
            <div class="row">
                <input type="email" name="email" placeholder="Email *" required>
            </div>
            <div class="row double">
                <input type="text" name="username" placeholder="Username *" required>
                <input type="password" name="password" placeholder="Password *" required>
            </div>
            <div class="row">
                <button class="cta" name="submit" type="submit">Register</button>
            </div>

<?php   if(isset($msg)){
?>
            <div class="alert" role="alert">
                <p><?php echo $msg; ?></p>
            </div>
<?php   }
?>r

        </form>
    </div>
</div>

<?php include 'footer.php';?>
