<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body>

<?php
include "includes/header.php";
?>

<div class='table_of_contents'>
<h3>Inhalt</h3>
<ol>
<a href='#benutzererstellen'><li><p>Benutzer erstellen</p></li></a>
<a href='#benutzerbearbeiten'><li><p>Benutzer bearbeiten</p></li></a>
<a href='#benutzerloeschen'><li><p>Benutzer löschen</p></li></a>
<a href='#benutzerabteilung'><li><p>Abteilung des Benutzers ändern</p></li></a>
<a href='#benutzergruppe'><li><p>Benutzergruppenzugehörigkeit ändern</p></li></a>

</ol>

</div>
    <div class ='content'>
    <h2>Benutzer verwalten</h2>
    <p>Nachdem Sie sich erfolgreich angemeldet haben, werden Sie automatisch auf die Seite "Benutzer verwalten" weitergeleitet. Von hier aus haben Sie die Wahl, sämtliche unten aufgelistete Funktionen auszuführen. Lesen Sie sich bitte zu erst durch, was überhaupt die einzelnen Funktionen machen. Ob Ihnen eine Funktion angezeigt wird, hängt davon ab, welche Rechte Sie zugewiesen bekommen haben. (Wird in <a href='rechteverwalten.php'>Rechte verwalten</a> ausführlicher erklärt)</p>

    <img src='imgs/benutzerverwalten.png'>
    <ol>
        <li><p><b>Logout:</b> Abmelden; <a href='logout.php'>Mehr dazu</a></p></li>
        <li><p><b>Benutzer verwalten:</b> Mit diesem Link gelangen Sie auf die Seite zur Verwaltung von Benutzern, auf der Sie sich momentan befinden.</p></li>
        <li><p><b>Rechte von Benutzer bearbeiten:</b> Mit diesem Link gelangen Sie auf die Seite zur Verwaltung von Rechten, die ein Benutzer hat; <a href='rechteverwalten.php'>Mehr dazu</a></p></li>
        <li><p><b>Abteilung von Benutzer bearbeiten:</b> Mit diesem Link gelangen Sie auf die Seite, wo Sie die Abteilung des einzelnen Benutzers ändern. </p></li>
        <li><p><b>Benutzergruppe bearbeiten:</b> Mit diesem Link gelangen Sie auf die Seite, wo Sie die Benutzergruppenzugehörigkeit des einzelnen Benutzers ändern.</p></li>
        <li><p><b>Neuen Benutzer erstellen:</b> Mit diesem Link gelangen Sie auf die Seite, wo Sie einen neuen Benutzer erstellen.</p></li>
        <li><p><b>Benutzername:</b> Alle in der Datenbank gespeicherte Benutzer. </p></li>
        <li><p><b>Bearbeiten:</b> Dieser Link leitet Sie auf die Seite weiter, bei der Sie das Passwort eines Benutzers ändern.</p></li>
        <li><p><b>Details:</b> Dieser Link leitet Sie auf die Seite weiter, bei der Sie bloss wieder den Benutzernamen des Benutzers sehen können.</p></li>
        <li><p><b>Löschen:</b> Mittels diesen Link löschen Sie einen Benutzer.</p></li>

    </ol>
    <br>

    <h3 class='anchor' id = 'benutzererstellen'>Benutzer erstellen</h3>
    <p>Mit der Funktion <b>Benutzer erstellen</b> kreieren Sie ein neues Benutzerkonto samt Abteilungs- und Benutzergruppenzuweisung. Dazu weisen Sie diesem neuen Benutzerkonto ein Recht zu. <a href='rechteverwalten.php'>(Mehr zu Rechte)</a> </p>
    <p>Drücken Sie auf den Link <b>Neuen Benutzer erstellen </b> (siehe Element 6 oben). Sie werden anschliessend auf die Seite zum Erstellen eines neuen Benutzers weitergeleitet.</p>
    <img src='imgs/benutzererstellen.png'>
    <ol>
        <li><p><b>Benutzername:</b> Geben Sie in diesem Textfeld den gewünschten Benutzernamen für den neuen Benutzer ein.</p></li>
        <p><i class="fa fa-warning" style="font-size:24px;color:orange"></i> Passen Sie auf, dass Sie <b>nicht</b> einen Benutzernamen eingeben, der schon vergeben ist.</p>
        <li><p><b>Passwort:</b> Geben Sie in diesem Textfeld das Passwort des neuen Benutzer ein. Achten Sie auf eine ausreichende Länge und Komplexität für Ihre eigene Sicherheit.</p></li>
        <li><p><b>Recht:</b> Wählen Sie aus dieser Auswahlbox eines der Rechte bzw. das Recht, welches Sie dem neuen Benutzer zuweisen möchten. Sie können später weitere Rechte hinzufügen. (Wird in <a href='rechteverwalten.php'>Rechte verwalten</a> ausführlicher erklärt)
        </p></li>
        <img src='imgs/allerechte.png'>
        <li><p><b>Benutzergruppe:</b> Wählen Sie aus dieser Auswahlbox die Benutzergruppe, die der neue Benutzer zugehört.</p></li>
        <img src='imgs/allebgruppen.png'>
        <li><p><b>Abteilung:</b> Wählen Sie aus dieser Auswahlbox die Abteilung, die der neue Benutzer zugehört.</p></li>
        <img src='imgs/alleabteilungen.png'>
        <li><p><b>Erstellen:</b> Nachdem Sie alles eingetragen und ausgewählt haben, drücken Sie nun auf <b>Erstellen</b>, um die eingegebene Daten zu speichern.</p></li>
        <li><p><b>Zurück:</b> Falls Sie zurück zum Menü "Benutzer verwalten" gehen möchten, haben Sie die Möglichkeit mit diesem Link zurückzukehren.</p></li>

    </ol>
    <br>
    <h3 class='anchor' id = 'benutzerbearbeiten'>Benutzer bearbeiten</h3>
    <p>Mit der Funktion <b>Benutzer bearbeiten</b> ändern Sie den Passwort eines Benutzerkontos.</p>
    <img src='imgs/benutzerbearbeiten.png'>
    <p>Geben Sie das neue Passwort in das Textfeld und drücken Sie auf den Knopf <b>Save</b> (auf Deutsch "Speichern"). Das Passwort sollte nun aktualisiert sein.</p>
    <br>

    <h3 class='anchor' id = 'benutzerloeschen'>Benutzer löschen</h3>
    <p>Sie löschen einen Benutzer indem Sie die <b>Löschen</b> beim jeweiligen Benutzer drücken. (Siehe Element 10 oben)</p>
    <p><i class="fa fa-warning" style="font-size:24px;color:red"></i> Sie werden <b>nicht</b> gefragt, ob Sie sich bei Ihrer Entscheidung zu löschen sicher sind und aufgefordert, Ihre Wahl zu bestätigen. Der Benutzer wird direkt gelöscht, sobald man den "Löschen" Link tätigt</p>

    <br>
    <h3 class='anchor' id = 'benutzerabteilung'>Abteilung des Benutzers ändern</h3>
    <p>Jeder Benutzer ist in einer Abteilung (z.B. Produktion, IT, Verkauf, etc.). Unten stehen die Funktionen zur Verwaltung dieser Abteilungen.</p>
    <img src='imgs/abteilungverwalten.png'>
    <ol>
    <li><p><b>Benutzer in Abteilung einteilen: </b>Mit diesem Link gelangen Sie auf die Seite, wo Sie einen Benutzer in einer Abteilung einteilen. Zur Einteilung eines Benutzers in einer Abteilung, wählen Sie den <b>Benutzernamen</b> und die <b>Abteilung</b> des jeweiligen Benutzers.</p></li>
    <img src='imgs/abteilungeinteilen.png'>
    <li><p><b>Abteilung: </b>Alle Abteilungen, in denen Benutzer vorhanden sind.</p></li>
    <li><p><b>Benutzername: </b>Alle Benutzer, die in einer <b>Abteilung</b> links (siehe Element 2) eingeteilt sind.</p></li>
    <li><p><b>Bearbeiten:</b> Dieser Link leitet Sie auf die Seite weiter, bei der Sie die Abteilung des Benutzers ändern. Zur Änderung einer Zugehörigkeit zu einer Abteilung, wählen Sie den Benutzernamen und die Abteilung, in der der Benutzer neu eingeteilt werden sollte.</p></li>
    <img src='imgs/abteilungbearbeiten.png'>
    <li><p><b>Details:</b> Dieser Link leitet Sie auf die Seite weiter, bei der Sie bloss wieder den Benutzernamen des Benutzers und den Abteilungsnamen sehen können.</p></li>
    <li><p><b>Löschen:</b> Mittels diesen Link entfernen Sie einen Benutzer aus einer Abteilung. Sie werden gewarnt, bevor Sie einen Benutzer aus der Abteilung löschen.</p></li>
    </ol>
    <img src='imgs/abteilungloeschen.png'><p></p>
    <br>


    <h3 class='anchor' id = 'benutzergruppe'>Benutzergruppenzugehörigkeit ändern</h3>
    <p>Jeder Benutzer kann eines der Benutzergruppen (z.B. Mitarbeiter, Praktikant, Ausbilder) angehören. Unten stehen die Funktionen zur Verwaltung dieser Benutzergruppen.</p>
    <img src='imgs/benutzergruppeverwalten.png'>
    <ol>
    <li><p><b>Benutzer an Benutzergruppe zuweisen: </b>Mit diesem Link gelangen Sie auf die Seite, wo Sie einen Benutzer in einer Benutzergruppe einteilen. Zur Einteilung eines Benutzers in einer Benutzergruppe, wählen Sie den <b>Benutzernamen</b> und die <b>Benutzergruppe</b> des jeweiligen Benutzers.</p></li>
    <img src='imgs/benutzergruppeeinteilen.png'>
    <li><p><b>Benutzername: </b>Alle Benutzer, die in einer <b>Benutzergruppe</b> links (siehe Element 2) eingeteilt sind.</p></li>
    <li><p><b>Benutzergruppe: </b>Alle Benutzergruppe, in denen Benutzer vorhanden sind.</p></li>
    <li><p><b>Bearbeiten:</b> Dieser Link leitet Sie auf die Seite weiter, bei der Sie die Benutzergruppe des Benutzers ändern. Zur Änderung einer Zugehörigkeit zu einer Benutzergruppe, wählen Sie den Benutzernamen und die Benutzergruppe, in der der Benutzer neu eingeteilt werden sollte.</p></li>
    <img src='imgs/benutzergruppebearbeiten.png'>
    <li><p><b>Details:</b> Dieser Link leitet Sie auf die Seite weiter, bei der Sie bloss wieder den Benutzernamen des Benutzers und den Abteilungsnamen sehen können.</p></li>
    <li><p><b>Löschen:</b> Mittels diesen Link entfernen Sie einen Benutzer aus einer Benutzergruppe. Sie gewarnt, bevor Sie einen Benutzer aus der Benutzergruppe löschen.</p></li>
    </ol>
    <img src='imgs/benutzergruppeloeschen.png'><p></p>

    <p><a href='#top'>Zurück zum Anfang</a></p>
   </div>

   <?php
    include "includes/footer.php";
    ?>
</body>

</html>