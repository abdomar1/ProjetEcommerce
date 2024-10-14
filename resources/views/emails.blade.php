<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body>
    <h1>Vous avez reçu un nouveau message de contact</h1>
    <p><strong>Nom :</strong> {{ $details['nom'] }}</p>
    <p><strong>Email :</strong> {{ $details['email'] }}</p>
    <p><strong>Message :</strong> {{ $details['message'] }}</p>
</body>
</html>
