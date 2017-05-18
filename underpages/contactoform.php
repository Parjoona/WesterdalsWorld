<?php require '../headunderpages.php'; ?>
<body>
<?php require '../header.php'; ?>
<main class="contactContent">
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
            <p><input type="submit" name="submit" value="Submit"></p>
            <div class="clear"> </div>
        </form>
    </div>
    </div>



</main>
</wrapper>
</body>
</html>