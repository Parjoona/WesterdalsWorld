//language=JQuery-CSS
/**
 * Created by Pauma on 2017-03-30.
 */

// Aktiverar jQuery
$(document).ready(function () {

    //onclick funktion som hämtar data-id från .placeContainer
    $('.placeContainer').click(function () {
        var myKey = $(this).attr('data-id');
        $('#infoWindow').css({'right': -305, 'opacity': 1});
        $('#mainContent, #menu').css({'right': 305});
        //Hämtar data från info.php
        $.ajax({
            type: 'GET',
            url: 'underpages/info.php',
            data: {data: myKey},
            success: function (data) {
                $("#infoContent").html(data);
            }
        });
    });

    //onclick closing messWindow
    $('#closeButton').click(function () {
        $('#infoWindow').css({'right': 0, 'opacity': 0});
        $('#mainContent, #menu').css({'right': 0});
    });
    //Tar bort splashscreen vid första besök.
    $('#welcomeScreen').click(function () {
        $(this).remove();
    });

    //Byter färg på meny.
    $('#ulmenu').on('click', 'li', function () {
        $('#ulmenu li').removeClass('active');
        $(this).addClass('active');
    });

});
