<?php
// Inclusion des classes PHPMailer nécessaires
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PhpMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Vérifie si le formulaire a été soumis
if(isset($_POST["send"])){
    // Inclusion du fichier de configuration externe
    require_once('config.php');
    
    // Création d'une nouvelle instance de PHPMailer en activant les exceptions en cas d'erreur
    $mail = new PHPMailer(true);

    // Configuration du mode d'envoi par SMTP
    $mail->isSMTP(); // Indique que l'envoi se fait via SMTP

    // Configuration du niveau de débogage SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Active la sortie de débogage détaillée

    // Configuration de la sécurité SMTP (implicit TLS)
    $mail->SMTPSecure = 'ssl'; // Utilise une connexion TLS implicite pour le chiffrement

    // Configuration du serveur SMTP (Gmail dans cet exemple)
    $mail->Host = 'smtp.gmail.com'; // Serveur SMTP à utiliser pour l'envoi d'e-mails

    // Activation de l'authentification SMTP
    $mail->SMTPAuth = true; // Active l'authentification SMTP

    // Spécification du nom d'utilisateur SMTP (votre adresse e-mail)
    $mail->Username = EMAIL; // Remplacez 'EMAIL' par votre nom d'utilisateur SMTP

    // Spécification du mot de passe SMTP (votre mot de passe e-mail)
    $mail->Password = PASSWORD; // Remplacez 'PASSWORD' par votre mot de passe SMTP

    // Configuration du port SMTP
    $mail->Port = 465; // Port TCP à utiliser pour la connexion SMTP (465 pour SSL)

    // Configuration de l'expéditeur de l'e-mail
    $mail->setfrom(RECIPIENT , NAME_RECIPIENT );// Adresse e-mail et nom de l'expéditeur

    // Ajout du destinataire spécifié via le formulaire
    $mail->addAddress($_POST["email"]); // Adresse e-mail spécifiée dans le formulaire

    // Configuration de l'e-mail en HTML
    $mail->isHTML(true); // L'e-mail est au format HTML

    // Spécification du sujet de l'e-mail (à partir du formulaire)
    $mail->Subject = $_POST["subject"]; // Sujet de l'e-mail

    // Spécification du corps de l'e-mail (à partir du formulaire)
    $mail->Body = $_POST["message"]; // Corps de l'e-mail

    // Envoi de l'e-mail
    $mail->send();

    // Affichage d'une alerte JavaScript pour informer de l'envoi réussi
    echo "
    <script> 
    alert('Envoyé avec succès');
    document.location.href = 'index.php'; // Redirection vers la page d'accueil
    </script>
    ";
}
