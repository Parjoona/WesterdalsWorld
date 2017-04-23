/**
 * Created by Pauma on 2017-03-30.
 */
var isOut = false;

function openMessage() {
    document.getElementById("messageWindow").style.right = -305 + 'px';
    document.getElementById("mainWindow").style.right = 305 + 'px';
    document.getElementById("messageWindow").style.opacity = 1;
    isOut = true;
}

function closeMessage() {
    document.getElementById("messageWindow").style.right = 0;
    document.getElementById("mainWindow").style.right = 0;
    document.getElementById("messageWindow").style.opacity = 0;
    isOut = false;
}
