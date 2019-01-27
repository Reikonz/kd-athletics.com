<?php
    include_once 'header.php';
?>
    
    <div class="hero-wrapper">
        <div>
            <h1 style="font-size:50px">Start Your Tricking Journey</h1>
            <?php
                if (isset($_SESSION['u_id'])){
                }else{
                    echo 
                    '
                    <form action="signup.php">
                        <button>Sign Up</button>
                    </form>
                    ';
                }
            ?>

        </div>
    </div>

<?php
    include_once 'footer.php';
?>


