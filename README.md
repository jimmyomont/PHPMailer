# PHPMailer

Formulaire permettant d'envoyer des e-mails. Il utilise la bibliothèque PHPMailer pour gérer l'envoi d'e-mails via SMTP de manière sécurisée. 
Les principales étapes comprennent la configuration des paramètres SMTP, la spécification de l'expéditeur et du destinataire, la définition du sujet et du corps du message, puis l'envoi de l'e-mail. 

---
### Le code HTML de la page commence par définir une structure simple avec un formulaire contenant trois champs : e-mail, sujet et message, ainsi qu'un bouton "send" pour soumettre le formulaire. Lorsque l'utilisateur remplit le formulaire et le soumet, le code PHP associé est déclenché pour gérer l'envoi de l'e-mail.

### Le code PHP utilise la bibliothèque PHPMailer, qui doit être correctement incluse grâce à des require statements. Les étapes clés de ce processus sont les suivantes :

1. Configuration du serveur SMTP : Le code configure le serveur SMTP en utilisant le protocole SSL pour garantir une communication sécurisée avec le serveur de messagerie Gmail (smtp.gmail.com). Il spécifie également les informations d'authentification, telles que le nom d'utilisateur (votre adresse e-mail) et le mot de passe associé.

2. Définition de l'expéditeur et du destinataire : Le code spécifie l'expéditeur de l'e-mail, qui est généralement votre adresse e-mail, et le destinataire, qui peut être soit l'adresse e-mail soumise via le formulaire, soit une adresse e-mail prédéfinie dans les constantes.

3. Configuration du sujet et du corps du message : Le sujet de l'e-mail est défini en utilisant les données soumises via le formulaire (le champ "subject"), et le corps du message est également défini à partir des données soumises (le champ "message"). Vous pouvez personnaliser ces données selon vos besoins.

4. Envoi de l'e-mail : La méthode `send()` de l'objet PHPMailer est appelée pour envoyer l'e-mail avec les paramètres configurés. Si l'envoi est réussi, une alerte JavaScript s'affiche pour informer l'utilisateur que l'e-mail a été envoyé avec succès, puis l'utilisateur est redirigé vers la page d'accueil.

Enfin, dans la dernière partie du code, des constantes sont définies pour stocker des informations sensibles telles que votre adresse e-mail, votre mot de passe, l'adresse du destinataire, et le nom du destinataire. Ces constantes sont utilisées dans le code pour simplifier la configuration.
