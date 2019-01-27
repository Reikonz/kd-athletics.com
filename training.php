<?php
    include_once 'header.php';
?>

<div class="training-wrapper">
    <div class="trailer-wrapper">
        Trailer video coming soon...
    </div>
    <div class="tab-wrapper">
        <div class="tab-nav">
            <button class="tab-button" onclick="tab_chooser(event, 'overview')" id="defaultOpen">Overview</button>
            <button class="tab-button" onclick="tab_chooser(event, 'workoutlist')">Workout List</button>
            <button class="tab-button" onclick="tab_chooser(event, 'materials')">Program Materials</button>
        </div>

    <?php
        if (isset($_SESSION['beg_trick']) && $_SESSION['beg_trick'] == 'Yes'){
            echo 
            '
            <div id="overview" class="tab-content">
                <h4>KDA Training Programs</h4>
                <button class="accordion">KDA Beginner Tricking</button>
                <div class="panel">
                    <br><br>
                    <p>
                        The KDA beginner training program will give you the fundamentals to progress in the tricking world. No prior
                        training is necessary to jump in and get started!
                    </p>
                    <br>
                    <p>
                        Trainer: <mark>Kenny Dang</mark>
                    </p>
                    <br><br>
                    <img src="banner.png" alt="training" class="summary-banner">
                    <br>
                </div>
            </div>

            <div id="workoutlist" class="tab-content">
                <h4>KDA Training Programs</h4>

                <button class="accordion">KDA Beginner Tricking</button>
                <div class="panel">
                    <br>
                    <button class="accordion">Warmup/Stretching</button>
                    <div class="panel">
                        <br>
                        <p>
                            Beginning motions to get the blood flowing and improve flexibility
                            <a href="#" id="warmup_stretching" onclick="popup_open(this.id);">
                            <img align="right" src="play_button.png" alt="play button">
                            </a>
                        </p>
                        <br>
                    </div>

                    <button class="accordion">Flip Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Focus on the gymnastics side of tricking through basic body inversions
                            <a href="#" id="flip_day" onclick="popup_open(this.id);">
                            <img align="right" src="play_button.png" alt="play button">
                            </a>
                        </p>
                        
                        <br>
                    </div>

                    <button class="accordion">Kick Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Focus on the martial arts side of tricking through technical striking
                            <a href="#" id="kick_day" onclick="popup_open(this.id);">
                            <img align="right" src="play_button.png" alt="play button">
                            </a>                    
                        </p>
                        <br>
                    </div>

                    <button class="accordion">Combo Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Put it all together with chaining tricks that you have learned or are working towards
                            <a href="#" id="combo_day" onclick="popup_open(this.id);">
                            <img align="right" src="play_button.png" alt="play button">
                            </a>
                        </p>
                        <br>
                    </div>

                    <button class="accordion">Weight Lift Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Target the entire body with strength training to enhance tricking power
                            <a href="#" id="weight_day" onclick="popup_open(this.id);">
                            <img align="right" src="play_button.png" alt="play button">
                            </a>
                        </p>
                        <br>
                    </div>
                    <br>
                </div>
            </div>
            <div id="materials" class="tab-content">
                <h4>KDA Training Programs</h4>

            <button class="accordion">KDA Beginner Tricking</button>
            <div class="panel">
                <br>
                <button class="accordion">Warmup/Stretching</button>
                <div class="panel">
                    <br>
                    <p>
                        Beginning motions to get the blood flowing and improve flexibility
                        <a href="KDA_Beginner_Tricking_Warmup_Stretching.pdf">
                            <img align="right" src="pdf.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Flip Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Focus on the gymnastics side of tricking through basic body inversions
                        <a href="KDA_Beginner_Tricking_FlipDay.pdf">
                            <img align="right" src="pdf.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Kick Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Focus on the martial arts side of tricking through technical striking
                        <a href="KDA_Beginner_Tricking_KickDay.pdf">
                            <img align="right" src="pdf.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Combo Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Put it all together with chaining tricks that you have learned or are working towards
                        <a href="KDA_Beginner_Tricking_ComboDay.pdf">
                            <img align="right" src="pdf.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Weight Lift Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Target the entire body with strength training to enhance tricking power
                        <a href="KDA_Beginner_Tricking_WeightLift.pdf">
                            <img align="right" src="pdf.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>
                <br>
            </div>           
            
            ';
        }else{
            echo 
            '
            <div id="overview" class="tab-content">
                <h4>KDA Training Programs</h4>

                <button class="accordion">KDA Beginner Tricking</button>
                <div class="panel">
                    <br><br>
                    <p>
                        The KDA beginner training program will give you the fundamentals to progress in the tricking world. No prior
                        training is necessary to jump in and get started!
                    </p>
                    <br>
                    <p>
                        Trainer: <mark>Kenny Dang</mark>
                    </p>
                    <br><br>
                    <img src="banner.png" alt="training" class="summary-banner">
                    <br><br>
                    <form action="login.php">
                        <button class="signup-button">Signup Now</button>
                    </form>
                </div>
            </div>

            <div id="workoutlist" class="tab-content">
                <h4>KDA Training Programs</h4>

                <button class="accordion">KDA Beginner Tricking</button>
                <div class="panel">
                    <br>
                    <button class="accordion">Warmup/Stretching</button>
                    <div class="panel">
                        <br>
                        <p>
                            Beginning motions to get the blood flowing and improve flexibility
                            <a href="login.php">
                            <img align="right" src="lock.png" alt="play button">
                            </a>
                        </p>
                        <br>
                    </div>

                    <button class="accordion">Flip Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Focus on the gymnastics side of tricking through basic body inversions
                            <a href="login.php">
                            <img align="right" src="lock.png" alt="play button">
                            </a>
                        </p>
                        
                        <br>
                    </div>

                    <button class="accordion">Kick Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Focus on the martial arts side of tricking through technical striking
                            <a href="login.php">
                            <img align="right" src="lock.png" alt="play button">
                            </a>                    
                        </p>
                        <br>
                    </div>

                    <button class="accordion">Combo Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Put it all together with chaining tricks that you have learned or are working towards
                            <a href="login.php">
                            <img align="right" src="lock.png" alt="play button">
                            </a>
                        </p>
                        <br>
                    </div>

                    <button class="accordion">Weight Lift Day</button>
                    <div class="panel">
                        <br>
                        <p>
                            Target the entire body with strength training to enhance tricking power
                            <a href="login.php">
                            <img align="right" src="lock.png" alt="play button">
                            </a>
                        </p>
                        <br>
                    </div>
                    <br>
                </div>
            </div>
            <div id="materials" class="tab-content">
                <h4>KDA Training Programs</h4>

            <button class="accordion">KDA Beginner Tricking</button>
            <div class="panel">
                <br>
                <button class="accordion">Warmup/Stretching</button>
                <div class="panel">
                    <br>
                    <p>
                        Beginning motions to get the blood flowing and improve flexibility
                        <a href="login.php">
                            <img align="right" src="lock.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Flip Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Focus on the gymnastics side of tricking through basic body inversions
                        <a href="login.php">
                            <img align="right" src="lock.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Kick Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Focus on the martial arts side of tricking through technical striking
                        <a href="login.php">
                            <img align="right" src="lock.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Combo Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Put it all together with chaining tricks that you have learned or are working towards
                        <a href="login.php">
                            <img align="right" src="lock.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>

                <button class="accordion">Weight Lift Day</button>
                <div class="panel">
                    <br>
                    <p>
                        Target the entire body with strength training to enhance tricking power
                        <a href="login.php">
                            <img align="right" src="lock.png" alt="file button">
                        </a>
                    </p>
                    <br>
                </div>
                <br>
            </div>           
            ';
        }
    ?>
        
    </div>

    <!-- Popup box for the video -->
    <div id="popup_box">
        <a class="boxclose" id="boxclose" onclick="popup_close();"></a>
        <video id="popup_video" width="600" controls class="trick-video" autoplay muted loop></video>
        <script src="backend.js"></script>
    </div>

    <!-- Faded background when popup video is up -->
    <div id="fade" onClick="popup_close();"></div>

    <script>
        document.getElementById("defaultOpen").click();

        var acc = document.getElementsByClassName("accordion");
        var i;
        var space = 75;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                space = space + space;
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + space + "px";
                } 
            });
        }
    </script>

</div>

<?php
    include_once 'footer.php';
?>

