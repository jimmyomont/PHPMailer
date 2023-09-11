<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SEND MAIL</title>
</head>
<body>
    <form class="" action="send.php" method="POST">
        Email <input type="email" name="email" value=""> <br>
        subject <input type="text" name="subject" value=""> <br>
        Message <textarea type="text" name="message" value="" ></textarea> <br>
        <button type="submit" name="send">send</button>
    </form>
</body>
</html>