/**
 * Created by Pauma on 2017-03-30.
 */



// Open message window
function openMessage(numberlog) {
    document.getElementById("messageWindow").style.right = -305 + 'px';
    document.getElementById("mainWindow").style.right = 305 + 'px';
    document.getElementById("messageWindow").style.opacity = 1;
    document.getElementById("menu").style.right = 305 + 'px';

    $.ajax({
        type: "POST",
        url: 'conInfo.php',
        data : { num : numberlog}
    }).done(function(res){
        document.getElementById("messInfo").innerHTML = res;
    });
}

function closeMessage() {
    document.getElementById("messageWindow").style.right = 0;
    document.getElementById("mainWindow").style.right = 0;
    document.getElementById("messageWindow").style.opacity = 0;
    document.getElementById("menu").style.right = 0;
}
