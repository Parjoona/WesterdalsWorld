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
        //Hämtar data från place-info.php
        if ($(myKey).is(':empty')) {
            //Do nothing
        } else {
            // $(this).append("<div class='acc-box'><div class='acc-del' data-id='" + myKey +"'>ACCEPT</div><div class='decli-del'>DECLINE</div></div>");
            $.ajax({
                type: 'GET',
                url: 'underpages/comment-delete.php',
                data: {data: myKey},
                success: function (data) {
                    $(".info-msg").html(data);
                }
            });
        }
    });

    //onclick closing messWindow
    $('#info-close-btn').click(function () {
        $('#info-win').removeClass('infoInAnim');
        $('#info-win').addClass('infoOutAnim');
    });
    //Tar bort splashscreen vid första besök.
    $('#welcome-splash').click(function () {
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
