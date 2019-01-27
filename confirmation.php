<?php
    session_start();
?>

<?php
    if (isset($_SESSION['u_id'])){
        include_once 'includes/dbh.inc.php';
        $sql = "UPDATE users SET beginner_tricker = 'Yes' WHERE user_uid = '".$_SESSION['u_uid']."';";
        $result = mysqli_query($conn, $sql);

        //Update the users program status and redirect to 
        $_SESSION['beg_trick'] = 'Yes';
        $URL="checkout.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        exit();
    }else{
        echo 'You do not have an account';
    }
?>