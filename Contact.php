<?php
    if (isset($_POST['message'])) {
        $message = '<h1>Message envoyé depuis la page Contact de sitecv</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Prénom : </b>' . $_POST['prénom'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('corentin.malecki@gmail.com', 'Envoi depuis page Contact', $message, 'From:contact@sitecv.fr\r\nReply-to:' . $_POST['email']);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
            }
    }
    ?>
