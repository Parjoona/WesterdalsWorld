/**
 * Created by Pauma on 2017-03-30.
 */
var isOut = false;

function openMessage(numberlog) {
    document.getElementById("messageWindow").style.right = -305 + 'px';
    document.getElementById("mainWindow").style.right = 305 + 'px';
    document.getElementById("messageWindow").style.opacity = 1;
    document.getElementById("menu").style.right = 305 + 'px';
    isOut = true;
    alert(numberlog);
}

function closeMessage() {
    document.getElementById("messageWindow").style.right = 0;
    document.getElementById("mainWindow").style.right = 0;
    document.getElementById("messageWindow").style.opacity = 0;
    document.getElementById("menu").style.right = 0;
    isOut = false;
}
