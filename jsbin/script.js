/**
 * Created by Pauma on 2017-03-30.
 */
var messWindow = document.getElementById("messageWindow");
var mainWindow = document.getElementById("mainWindow");
var isOut = false;

function openMessage() {
    messWindow.style.right = -325 + 'px';
    mainWindow.style.right = 325 + 'px';
    messWindow.style.opacity = 1;
    isOut = true;
}

function closeMessage() {
    messWindow.style.right = 0;
    mainWindow.style.right = 0;
    messWindow.style.opacity = 0;
    isOut = false;
}
