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

        // Sender POST till messWindow //
        $.ajax({
            url: 'index.php',
            type: "POST",
            dataType: 'json',
            data: myKey,
            success: function (data) {
                console.log(data);
            }
        });
    });

    //onclick closing messWindow
    $('#closeButton').click(function () {
        document.getElementById("messageWindow").style.right = 0;
        document.getElementById("mainWindow").style.right = 0;
        document.getElementById("messageWindow").style.opacity = 0;
        document.getElementById("menu").style.right = 0;
    });

    //menu onclick, add different colors to "menu"
    $('#ulmenu').on('click', 'li', function () {
        $('#ulmenu li').removeClass('active');
        $(this).addClass('active');
    });

});

/*
 $.ajax({
 url: 'conRestu.php',
 type: 'POST',
 data: {'data': numberlog},
 success: function (data) {
 console.log(data);
 }
 });
 */
