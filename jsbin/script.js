/**
 * Created by Pauma on 2017-03-30.
 */
var isOut = false;

function openMessage() {
    document.getElementById("messageWindow").style.right = -310 + 'px';
    document.getElementById("mainWindow").style.right = 310 + 'px';
    document.getElementById("messageWindow").style.opacity = 1;
    document.getElementById("menuSpacer").style.width = 1310 + 'px';
    isOut = true;
}

function closeMessage() {
    document.getElementById("messageWindow").style.right = 0;
    document.getElementById("mainWindow").style.right = 0;
    document.getElementById("messageWindow").style.opacity = 0;
    document.getElementById("menuSpacer").style.width = 1000 + 'px';
    isOut = false;
}
