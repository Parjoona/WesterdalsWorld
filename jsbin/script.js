//language=JQuery-CSS
/**
 * Created by Pauma on 2017-03-30.
 */

// Open message window
$(document).ready(function () {
    $('.placeContainer').click(function () {
        document.getElementById("messageWindow").style.right = -305 + 'px';
        document.getElementById("mainWindow").style.right = 305 + 'px';
        document.getElementById("messageWindow").style.opacity = 1;
        document.getElementById("menu").style.right = 305 + 'px';
        $.ajax({
            url: 'conInfo.php',
            type: "POST",
            data: {num: phpvar},
            success: function (data) {
                console.log(data);
            }
        });
    })
    //avslutt tag för ready function
});
/*
 function openMessage(numberlog) {
 document.getElementById("messageWindow").style.right = -305 + 'px';
 document.getElementById("mainWindow").style.right = 305 + 'px';
 document.getElementById("messageWindow").style.opacity = 1;
 document.getElementById("menu").style.right = 305 + 'px';

 jQuery.ajax({
 url: 'conRestu.php',
 type: "POST",
 data: {'data': numberlog},
 success: function (data) {
 console.log(data);
 }
 });
 }
 */
function closeMessage() {
    document.getElementById("messageWindow").style.right = 0;
    document.getElementById("mainWindow").style.right = 0;
    document.getElementById("messageWindow").style.opacity = 0;
    document.getElementById("menu").style.right = 0;
}