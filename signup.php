<?php
    include_once 'header.php';
?>

<div class="signup-wrapper">
    <h2>Signup</h2>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firstname">
        <input type="text" name="last" placeholder="Lastname">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <div class="g-recaptcha" data-sitekey="6LcNEo0UAAAAAJg0QWTiJxmhkzZdEXi7oVxtbl0f"></div>
        <button type="submit" name="submit">Sign up</button>
    </form>
</div>

<?php
    include_once 'footer.php';
?>

