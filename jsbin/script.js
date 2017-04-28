//language=JQuery-CSS
/**
 * Created by Pauma on 2017-03-30.
 */

// Open message window
$(document).ready(function () {
    //onclick funktion som hämtar data-id från .placeContainer
    $('.placeContainer').click(function () {
        var myKey = $(this).attr('data-id');
        console.log(myKey);
        document.getElementById("messageWindow").style.right = -305 + 'px';
        document.getElementById("mainWindow").style.right = 305 + 'px';
        document.getElementById("messageWindow").style.opacity = 1;
        document.getElementById("menu").style.right = 305 + 'px';
        //avslutt tag för ready function

        $.ajax({
            url: 'index.php',
            type: "POST",
            dataType: 'json',
            data: myKey,
            success: function (data) {
                console.log(data);
            }
        });
    })
});
/*
 function openMessage(numberlog) {
 document.getElementById("messageWindow").style.right = -305 + 'px';
 document.getElementById("mainWindow").style.right = 305 + 'px';
 document.getElementById("messageWindow").style.opacity = 1;
 document.getElementById("menu").style.right = 305 + 'px';

 $.ajax({
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