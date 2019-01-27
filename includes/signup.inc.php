<?php
    if(isset($_POST['submit'])){
        include_once 'dbh.inc.php';

        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn, $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        //Error handlers
        //Check for empty fields
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
            header("Location: ../signup.php?signup=empty");
            exit();
        }else{
            //Check if input characters are valid
            if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
                header("Location: ../signup.php?signup=invalid");
                exit();
            }else{
                //Check if email is valid
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: ../signup.php?signup=email");
                    exit();
                }else{
                    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        header("Location: ../signup.php?signup=usertaken");
                        exit();
                    }else{
                        //Hashing the password
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        //Insert the user into the database
                        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                        $result = mysqli_query($conn, $sql);
                        header("Location: ../signup.php?signup=success");
                        exit();
                    }
                }
            }
        }

    }else{
        header("Location: ../sugnup.php");
        exit();
    }
 // INSERT DATA

    // Insert values in database ******************************************
    // $first = mysqli_real_escape_string($conn, $_POST['first']);
    // $last = mysqli_real_escape_string($conn, $_POST['last']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    // $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    // $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    // $result = mysqli_query($conn, $sql);
    // header("Location: ../index.php?signup=success"); //send us to back 
    
    // Prepared statements ******************************************
    // $first = mysqli_real_escape_string($conn, $_POST['first']);
    // $last = mysqli_real_escape_string($conn, $_POST['last']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    // $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    // $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
    // $stmt = mysqli_stmt_init($conn);
    // if (!mysqli_stmt_prepare($stmt, $sql)){
    //     echo "SQL error";
    // }else{
    //     mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
    //     mysqli_stmt_execute($stmt);
    // }
    // header("Location: ../index.php?signup=success"); //send us to back 


 // SELECT DATA

    // Just get values ******************************************
    // $sql = "SELECT * FROM users";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // echo $resultCheck . "<br>";
    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }

    // Prepared statements ******************************************
    // $data = "Admin";
    // //create template
    // $sql = "SELECT * FROM users WHERE user_uid=?;";
    // //create prepared statement
    // $stmt = mysqli_stmt_init($conn);
    // //prepare the prepare statement
    // if (!mysqli_stmt_prepare($stmt, $sql)){
    //     echo "SQL statement failed";
    // }else{
    //     //bind parameters to the placeholder
    //     mysqli_stmt_bind_param($stmt, "s", $data);
    //     //run parameters inside database
    //     mysqli_stmt_execute($stmt);
    //     $result = mysqli_stmt_get_result($stmt);
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }
?>