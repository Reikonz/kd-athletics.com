<?php
    include_once 'header.php';
?>

<div class="tips-wrapper">
    <h4>Kicks</h4>
    <div>
        <a href="#" id="roundhouse" class="button" onclick="popup_open(this.id);">Roundhouse Kick</a>
        <a href="#" id="hook" class="button" onclick="popup_open(this.id);">Hook Kick</a>
        <a href="#" id="tornado" class="button" onclick="popup_open(this.id);">Tornado Kick</a>
        <a href="#" id="540kick" class="button" onclick="popup_open(this.id);">540 Kick</a>
        <a href="#" id="360hook" class="button" onclick="popup_open(this.id);">360 Hook Kick</a>
        <a href="#" id="" class="button" onclick="popup_open(this.id);">Butterfly Kick</a>
        <a href="#" id="" class="button" onclick="popup_open(this.id);">Butterfly Twist</a>
        <a href="#" id="cheat720" class="button" onclick="popup_open(this.id);">Cheat 720 Kick</a>
    </div>

    <h4>Flips</h4>
    <div>
        <a href="#" id="backhandspring" class="button" onclick="popup_open(this.id);">Backhandspring</a>
        <a href="#" id="backflip" class="button" onclick="popup_open(this.id);">Backflip</a>
        <a href="#" id="cheatgainer" class="button" onclick="popup_open(this.id);">Cheat Gainer</a>
        <a href="#" id="" class="button" onclick="popup_open(this.id);">Frontflip</a>
        <a href="#" id="" class="button" onclick="popup_open(this.id);">Sideflip</a>
        <a href="#" id="cartwheel" class="button" onclick="popup_open(this.id);">Cartwheel</a>
        <a href="#" id="aerial" class="button" onclick="popup_open(this.id);">Aerial</a>
        <a href="#" id="gumbi" class="button" onclick="popup_open(this.id);">Gumbi</a>
        <a href="#" id="raiz" class="button" onclick="popup_open(this.id);">Raiz</a>
    </div>
</div>

<!-- Popup box for the video -->
<div id="popup_box">
    <a class="boxclose" id="boxclose" onclick="popup_close();"></a>
    <video id="popup_video" width="600" controls class="trick-video" autoplay muted loop></video>
    <script src="backend.js"></script>
</div>

<!-- Faded background when popup video is up -->
<div id="fade" onClick="popup_close();"></div>

<?php
    include_once 'footer.php';
?>

