<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>This is a title</title>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../jsbin/script.js"></script>
    <!-- CSS stylesheet -->
   <link rel="stylesheet" href="../cssbin/style.css">

</head>
<style>

    .contactFrm {
        height: 40px;

    }
    .contactFrm h4 {
        font-size: 1em;
        color: #ad343e;
        margin-bottom: 0.3em;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 2px;
    }
    .contactFrm input[type="text"], .contactFrm input[type="email"] {
        width: 50%;
        color: #ad343e;
        background: #fff;
        outline: none;
        font-size: 0.8em;
        padding: .5em 1em;
        border: 1px solid #ad343e;
        -webkit-appearance: none;
        display: block;
        margin-bottom: 1.2em;
    }
    .contactFrm textarea {
        resize: none;
        width: 50%;
        background: #fff;
        color: #ad343e;
        font-size: 0.8em;
        outline: none;
        padding: .5em 1em;
        border: 1px solid #ad343e;
        min-height: 8em;
        -webkit-appearance: none;
    }
    .contactFrm input[type="submit"] {
        bottom: 0px;
        outline: none;
        color: #FFFFFF;
        padding: 0.5em 0;
        font-size: 1em;
        margin: 1em 0 0 0;
        -webkit-appearance: none;
        background: #ad343e;
        transition: 0.5s all;
        border: 1px solid #ad343e;
        -webkit-transition: 0.5s all;
        transition: 0.5s all;
        -moz-transition: 0.5s all;
        width: 20%;
        cursor: pointer;

    }
    .contactFrm input[type="submit"]:hover {
        background: none;
        color: #ad343e;
    }
    p.statusMsg{font-size:18px;}
    p.succdiv{color: black;}
    p.errordiv{color: darkred}

    #posRel * {
        position: relative;
    }
    #fixForm *{
        left: 50px;
        bottom: -20px;
    }
    #textI{
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        color: #a31621;
        left: 149px;
        bottom: -50px;
    }





</style>

<body>
<?php require '../header.php'; ?>
<?php require '../head.php'; ?>



<main class="contactContent" id="posRel">


    <div id="infoCont">
        <h3 id="conText"> Takk for at du tar i bruk vår side, ved å fylle ut skjemaet og klikker send tar vi i mot
            tilbakemeldinger, enten om du har problemer med din bruker, ønsker å komme med tips til
            steder som er vært å ha med på WesterWhat sin steds side, eller om du ønsker å legge
            til event. Vi setter pris på din tilbakemedling. Med Vennlig Hilsen grunnleggerne av
            Westerdals Wester What. </h3>

    </div>
    <div id="fixForm">
    <h2 id="textI">Send oss en henvendelse</h2>
    <div class="contactFrm">
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <form action="contactoform.php" method="post">
            <h4>Name</h4>
            <input type="text" name="name" placeholder="Your Name" required="">
            <h4>Email </h4>
            <input type="email" name="email" placeholder="email@example.com" required="">
            <h4>Message</h4>
            <textarea name="message" placeholder="Write your message here" required=""> </textarea>
            <p> <input type="submit" name="submit" value="Submit"> </p>
            <div class="clear"> </div>
        </form>
    </div>
    </div>



</main>
</body>
</wrapper>
</html>