<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
include "includes/header.php";
?>

<body>

<!--<div class='table_of_contents'>
<h3>Inhalt</h3>
<ol>
<a href='#elemente'><li><p>Elemente</p></li></a>
</ol>

</div>-->


    <div class='content'>
    <h2>Login</h2>
    <p>Das Login (auf Deutsch "Anmelden") ist der Vorgang, bei dem Sie sich mit Ihrem Benutzerkonto, bestehend aus <b>Benutzernamen</b> und <b>Passwort</b>, anmelden, um auf die Funktionalitäten der Applikation zugreifen zu können. Bevor Sie sich anmelden, haben Sie keinen Zugriff auf diese und werden wieder auf die Anmeldeseite weitergeleitet. </p>
        
    <p>Damit Sie sich anmelden können, brauchen Sie ein vorhandenes Benutzerkonto. Falls Sie keines haben sollten oder eines ihrer Angaben vergessen haben, wenden Sie sich bitte an einen Administrator.</p>

    <h3 id="elemente">Elemente</h3>
    <img src='imgs/login.png'>

    
    <ol>
        <li><p><b>Benutzername:</b> In diesem Textfeld geben Sie den Benutzernamen ein.</p></li>
        <li><p><b>Passwort:</b> In diesem Textfeld geben Sie das Passwort ein.</p></li>
        <li><p><b>Anmelden:</b> Mittels diesem Knopf melden Sie sich an. (Benutzername und Passwort müssen im Textfeld eingegeben sein)<p></li>
    </ol>
    <br>
    <p><i class="fa fa-warning" style="font-size:24px;color:orange"> </i> Bei einer Falscheingabe der Daten werden Sie darauf aufmerksam gemacht.</p>
    <img src='imgs/falschespasswort.png'>
</div>

<?php
    include "includes/footer.php";
    ?>

</body>

</html>