// pop video
var popup_video = document.getElementById("popup_video");

window.document.onkeydown = function (e) {
    if (!e) {
        e = event;
    }
    if (e.keyCode == 27) {
        popup_close();
    }
}

function popup_open(button_id) {
    window.scrollTo(0, 0);
    document.getElementById('popup_box').style.display = 'block';
    document.getElementById('fade').style.display = 'block';
    popup_video.src = "";
    switch (button_id) {
        case 'backhandspring':
            popup_video.src = "backhandspring.mp4";
            break;
        case '360hook':
            popup_video.src = "360hook.mp4";
            break;
        case 'tornado':
            popup_video.src = "tornado.mp4";
            break;
        case 'hook':
            popup_video.src = "hook.mp4";
            break;
        case 'roundhouse':
            popup_video.src = "roundhouse.mp4";
            break;
        case 'aerial':
            popup_video.src = "aerial.mp4";
            break;
        case 'cheat720':
            popup_video.src = "C7.mp4";
            break;
        case 'backflip':
            popup_video.src = "backflip.mp4";
            break;
        case 'cheatgainer':
            popup_video.src = "gainer.mp4";
            break;
        case 'gumbi':
            popup_video.src = "gumbi.mp4";
            break;
        case 'raiz':
            popup_video.src = "raiz.mp4";
            break;
        case 'cartwheel':
            popup_video.src = "cartwheel.mp4";
            break;
        case '540kick':
            popup_video.src = "540kick.mp4";
            break;
        case 'warmup_stretching':
            popup_video.src = "540kick.mp4";
            break;
        case 'flip_day':
            popup_video.src = "540kick.mp4";
            break;
        case 'kick_day':
            popup_video.src = "540kick.mp4";
            break;
        case 'combo_day':
            popup_video.src = "540kick.mp4";
            break;
        case 'weight_day':
            popup_video.src = "540kick.mp4";
            break;
    }
    popup_video.load();
    popup_video.play()
}

function popup_close() {
    document.getElementById('popup_box').style.display = 'none';
    document.getElementById('fade').style.display = 'none';
    popup_video.pause();
}


// tab selector
function tab_chooser(event, tab_name) {
    var i, tab_content, tab_button;
    // grab content by id
    tab_content = document.getElementsByClassName("tab-content");
    for (i = 0; i < tab_content.length; i++) {
        tab_content[i].style.display = "none";
    }

    tab_content = document.getElementsByClassName("tree");
    for (i = 0; i < tab_content.length; i++) {
        tab_content[i].style.display = "none";
    }

    // grab content by class
    tab_button = document.getElementsByClassName("tab-button");
    for (i = 0; i < tab_button.length; i++) {
        tab_button[i].className = tab_button[i].className.replace("active", "");
    }
    // set the selected tab display
    document.getElementById(tab_name).style.display = "block";
    event.currentTarget.className += " active";
}



// Accordion

