<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
include "includes/header.php";
?>

<div class='table_of_contents'>
<h3>Inhalt</h3>
<ol>
<a href='#zweck'><li><p>Zweck</p></li></a>
<a href='#rechterstellen'><li><p>Recht zuweisen</p></li></a>
<a href='#rechtbearbeiten'><li><p>Rechtezuweisung bearbeiten</p></li></a>
<a href='#rechtloeschen'><li><p>Rechtezuweisung entfernen</p></li></a>


</ol>
</div>

<body>
    <div class ='content'>
    <h2>Rechte verwalten</h2>
    <h3 class='anchor' id='zweck'>Zweck</h3>
    <p>In vielen Unternehmen gibt es verschiedene Kompetenzen und Verantwortungen, über die ein Angestellter verfügen kann. Damit in dieser Applikation nicht jeder Benutzer jede Funktion ausführen kann, gibt es sogenannte Rechte. Die Funktionen in dieser Applikation werden durch Rechte abhängig vom Benutzer, Benutzergruppe oder Abteilung gewährt oder beschränkt.</p>

    <p>In dieser Applikation unterscheidet man zwischen 4 Rechte:</p>
    <ul>
    <li><p><b>Write </b>(Auf Deutsch "Schreiben") - Das Recht, ein neues Benutzerkonto erstellen zu können.</p></li>
    <li><p><b>Read </b>(Auf Deutsch "Lesen") - Das Recht, Benutzerdetails lesen zu können.</p></li>
    <li><p><b>Update </b>(Auf Deutsch "Aktualisieren") - Das Recht, Benutzerdaten aktualisieren zu können.</p></li>
    <li><p><b>Delete </b>(Auf Deutsch "Löschen"> - Das Recht, Benutzerdaten löschen zu können.</p></li>
    </ul>
    <br>
    <p>Eine Spezialform gibt es allerdings noch:</p>
    <ul>
    <li><p><b>Admin </b>(Kurzform von "Administrator") - Dieses Recht gewährt alle oben genannten Rechte. Nur Administratoren haben dieses Recht. </p></li>
    </ul>
    <br>
    <p><b>Beispiel</b></p>
    <p>Ein Benutzer mit allen Rechten würde bei der Seite <b>Benutzer verwalten</b> dieses Fenster sehen: </p>
    <img src='imgs/beispielallerechte.png'>
    <p>Ein Benutzer mit bloss dem Recht <b>Read</b> würde folgende Seite sehen: </p>
    <img src='imgs/beispielreadrecht.png'>
    
    <p>Um zu wissen, welche Rechte Sie aufgrund Ihrer Benutzergruppenzugehörigkeit oder Ihrer Abteilung haben, wenden Sie sich bitte an einen Administrator.</p>
    <br>
    <img src='imgs/rechteverwalten.png'>
    <ol>
        <li><p><b>Recht an Benutzer zuweisen: </b>Mit diesem Link gelangen Sie auf die Seite, wo man einem Benutzer ein neues/weiteres Recht zuweisen kann.</p></li>
        <li><p><b>Benutzername: </b>Alle in der Datenbank gespeicherte Benutzer.</p></li>
        <li><p><b>Recht: </b>Alle Rechte, über die ein <b>Benutzer</b> (siehe Element 2) verfügen kann. Mehrere Rechte, die einem einzelnen Benutzer zugewiesen sind, werden untereinander aufgelistet.</p></li>
        <li><p><b>Bearbeiten: </b>Dieser Link leitet Sie auf die Seite weiter, bei der Sie die Zuweisung eines Rechts an einem Benutzer bearbeiten können.</p></li>
        <li><p><b>Details: </b>Dieser Link leitet Sie auf die Seite weiter, bei der Sie bloss wieder den Benutzernamen des Benutzers und das Recht dieses Benutzers sehen können.</p></li>
        <li><p><b>Löschen: </b>Mittels diesen Link entfernen Sie ein Recht eines Benutzers. Sie werden gewarnt, bevor Sie einem Benutzer ein Recht entfernen.</p></li>
    </ol>

    <br>

    <h3 class='anchor' id='rechterstellen'>Recht zuweisen</h3>
    <p>Mittels dieser Funktion weisen Sie ein Recht einem Benutzer zu.</p>
    <img src='imgs/rechterstellen.png'>
    <ol>
        <li><p><b>Benutzername: </b>Hier wählen Sie den Benutzernamen aus, für welches Sie ein Recht zuweisen wollen.</p></li>
        <li><p><b>Recht: </b> Hier wählen Sie das Recht aus, welches Sie für das obige Benutzerkonto zuweisen wollen.</p></li>
        <li><p><b>Erstellen: </b>Drücken Sie nun auf <b>Erstellen</b>, um die neue Zuweisung zu speichern.</p></li>
        <li><p><b>Zurück: </b>Falls Sie zurück zum Menü "Rechte bearbeiten" gehen möchten, haben Sie die Möglichkeit mit diesem Link zurückzukehren.</p></li>
    </ol>
    <br>
    <h3 class='anchor' id='rechtbearbeiten'>Rechtezuweisung bearbeiten</h3>
    
    <p>Falls Sie ein bestehendes Recht eines Benutzers ändern wollen, haben Sie die Möglichkeit mithilfe dieser Funktion.</p>
    <img src='imgs/rechtbearbeiten.png'>
    <ol>
    <li><p><b>Benutzername: </b>Hier wählen Sie den Benutzernamen aus, für welches Sie das Recht ändern wollen.</p></li>
        <li><p><b>Recht: </b> Hier wählen Sie das neue Recht aus, welches Sie für das obige Benutzerkonto neu zuweisen wollen.</p></li>
        <li><p><b>Erstellen: </b>Drücken Sie nun auf <b>Erstellen</b>, um die Änderung zu speichern.</p></li>
        <li><p><b>Zurück: </b>Falls Sie zurück zum Menü "Rechte bearbeiten" gehen möchten, haben Sie die Möglichkeit mit diesem Link zurückzukehren.</p></li>
    </ol>
    <br>
    <h3 class='anchor' id='rechtloeschen'>Rechtezuweisung entfernen</h3>
    <p>Mit dieser Funktion können Sie einem Benutzer ein Recht entfernen. Sie werden gewarnt, bevor Sie einem Benutzer das Recht entfernen.</p>
    <img src='imgs/rechtloeschen.png'>

    <p><a href='#top'>Zurück zum Anfang</a></p>

    </div>


    <?php
    include "includes/footer.php";
    ?>
</body>

</html>