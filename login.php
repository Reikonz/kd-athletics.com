<?php
    include_once 'header.php';
?>

<div class="signup-wrapper">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username/e-mail">
        <input type="password" name="pwd" placeholder="password">
        <div class="g-recaptcha" data-sitekey="6LcNEo0UAAAAAJg0QWTiJxmhkzZdEXi7oVxtbl0f"></div>
        <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="signup.php">Don't have an account? Sign up here.</a>
</div>

<?php
    include_once 'footer.php';
?>

