<?php
    include_once 'header.php';
?>

<div class="confirmation-wrapper">
    
    <?php
        if (isset($_SESSION['u_id'])){
            include_once 'includes/dbh.inc.php';
            $sql = "UPDATE users SET beginner_tricker = 'Yes' WHERE user_uid = '".$_SESSION['u_uid']."';";
            $result = mysqli_query($conn, $sql);
        }else{
            echo 'You do not have an account';
        }
    ?>

    <div>
        <br><br><br><br><br><br><br><br><br><br>
        <h3>Your order has been successfully completed!</h3>
        <br><br>
        <p>Click here to start training</p>
        <br><br>
        <form action="training.php">
                    <button class="signup-button">Start</button>
        </form>
    </div>
</div>

<?php
    include_once 'footer.php';
?>
