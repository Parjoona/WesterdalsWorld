//language=JQuery-CSS
/**
 * Created by Pauma on 2017-03-30.
 */
// Aktiverar jQuery
$(document).ready(function () {
        //onclick funktion som hämtar data-id från .placeContainer
        $('.placeCon').click(function () {
            var myKey = $(this).attr('data-id');
            $('#infoWindow').removeClass('infoOutAnim');
            $('#infoWindow').addClass('infoInAnim');
            //Hämtar data från placeInfo.php
            $.ajax({
                type: 'GET',
                url: 'underpages/placeInfo.php',
                data: {data: myKey},
                success: function (data) {
                    $("#infoContent").html(data);
                }
            });
        });
    //Var tvungen att lägga som duplikat för att få det att fungera som vilja.
    $('.eventCon').click(function () {
        var myKey = $(this).attr('data-id');
        $('#infoWindow').removeClass('infoOutAnim');
        $('#infoWindow').addClass('infoInAnim');
        //Hämtar data från placeInfo.php
        $.ajax({
            type: 'GET',
            url: 'underpages/eventInfo.php',
            data: {data: myKey},
            success: function (data) {
                $("#infoContent").html(data);
            }
        });
    });

    //onclick closing messWindow
    $('#closeButton').click(function () {
        $('#infoWindow').removeClass('infoInAnim');
        $('#infoWindow').addClass('infoOutAnim');
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

// $('#infoWindow').css({'right': -305, 'opacity': 1});
// $('#mainContent, #menu').css({'right': 305});
