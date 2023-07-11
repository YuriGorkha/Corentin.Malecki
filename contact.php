<?php
if (isset($_POST['message'])) {
    $message = 'Message envoyé depuis la page Contact de sitecv
    Email : ' . $_POST['email'] . '
    Nom : ' . $_POST['nom'] . '
    Prénom : ' . $_POST['prénom'] . '
    Message : ' . $_POST['message'];

    $retour = mail('corentin.malecki@gmail.com', 'Envoi depuis page Contact', $message, 'From:contact@sitecv.fr\r\nReply-to:' . $_POST['email']);
    if($retour) {
        echo 'Votre message a bien été envoyé.';
    }
}
?>
