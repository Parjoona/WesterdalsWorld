/**
 * Created by Pauma on 2017-03-30.
 */
function openMessage() {
    document.getElementById("messageWindow").style.right = -325 + 'px';
    document.getElementById("mainWindow").style.right = 325 + 'px';
    document.getElementById("messageWindow").style.opacity = 1;
}

function closeMessage() {
    document.getElementById("messageWindow").style.right = 0;
    document.getElementById("mainWindow").style.right = 0;
    document.getElementById("messageWindow").style.opacity = 0;
}
/*
 // Parametrar för element movement
 var msgWin = document.getElementById("messageWindow");
 var mainWin = document.getElementById("mainWindow");
 var msgPos = 700;
 var mainPos = 0;
 var id = setInterval(frame, 5);
 var times = true;

 function frame() {
 if (msgPos == 1025) {
 clearInterval(id);
 } else {
 msgPos++;
 mainPos++;
 msgWin.style.left = msgPos + 'px';
 mainWin.style.right = mainPos + 'px';
 }
 }
 }

 */

