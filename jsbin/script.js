//language=JQuery-CSS
/**
 * Created by Pauma on 2017-03-30.
 */
// Aktiverar jQuery
$(document).ready(function () {
    //onclick funktion som hämtar data-id från .placeContainer
    $('.placeCon').click(function () {
        var myKey = $(this).attr('data-id');
        $('#info-win').removeClass('infoOutAnim');
        $('#info-win').addClass('infoInAnim');
        //Hämtar data från place-info.php
        $.ajax({
            type: 'GET',
            url: 'underpages/place-info.php',
            data: {data: myKey},
            success: function (data) {
                $("#info-content").html(data);
            }
        });
    });
    //Var tvungen att lägga som duplikat för att få det att fungera som vilja.
    $('.eventCon').click(function () {
        var myKey = $(this).attr('data-id');
        $('#info-win').removeClass('infoOutAnim');
        $('#info-win').addClass('infoInAnim');
        //Hämtar data från place-info.php
        $.ajax({
            type: 'GET',
            url: 'underpages/event-info.php',
            data: {data: myKey},
            success: function (data) {
                $("#info-content").html(data);
            }
        });
    });


    $('.delete-comment-btn').click(function () {
        var myKey = $(this).attr('data-id');
        deletecomment(myKey);
    });

    function deletecomment(myKey) {
        var accbox = "<div class='acc-box'> Vill du ta bort denna kommentar?<div class='acc-del' data-id='" + myKey + "'>" +
            "AKSEPTER</div><div class='decli-del'>AVSLÅ</div></div>";
        //Tar enbart fram en knapp, och inte flera.
        $('.info-msg-box .delete-comment-btn').eq(0).after($(accbox));

        // DELETE THIS
        $('.acc-del').click(function () {
            $.ajax({
                type: 'GET',
                url: 'underpages/comment-delete.php',
                data: {data: myKey},
                success: function (data) {
                    $(".info-msg").html(data);
                }
            });
        });

        // CLOSE STUFF
        $('.decli-del').click(function () {
            $('.acc-box').remove();
        });
    }

    //onclick closing messWindow
    $('#info-close-btn').click(function () {
        $('#info-win').removeClass('infoInAnim');
        $('#info-win').addClass('infoOutAnim');
    });
    //Tar bort splashscreen vid första besök.
    $('#welcome-splash').click(function () {
        $(location).attr('href', 'place.php')
    });

    //Byter färg på meny.
    $('#ulmenu').on('click', 'li', function () {
        $('#ulmenu li').removeClass('active');
        $(this).addClass('active');
    });
});

// $('#infoWindow').css({'right': -305, 'opacity': 1});
// $('#mainContent, #menu').css({'right': 305});
