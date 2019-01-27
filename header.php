<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="backend.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <title>kdathletics</title>
</head>
<body>
    <header>
        <nav>
            <div class="login-wrapper">
                <a href="https://www.instagram.com/kdathletics_ig/" target="_blank">
                    <img src="instagram.png" alt="instagram">
                </a>
                <a href="https://www.youtube.com/channel/UC_6_WUk7WVqZAt7thQJl3Ug?view_as=subscriber" target="_blank">
                    <img src="youtube.png" alt="instagram">
                </a>

                <?php
                    if (isset($_SESSION['u_id'])){
                        echo '<form action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                            </form>
                            <p>Welcome '.$_SESSION['u_first'].'!</p>';
                    }else{
                        echo '<form action="login.php" method="POST">
                            <button type="submit" name="submit">Login</button>
                            </form>';
                    }
                ?>
            </div>
            <div class="nav-wrapper">
                <ul>
                    <li><a href="training.php">Training</a></li>
                    <li><a href="progression.php">Progression</a></li>
                    <li><a href="tips.php">Trick-Tips</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>
