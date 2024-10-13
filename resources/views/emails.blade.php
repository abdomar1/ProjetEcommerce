<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message</title>
</head>
<body>
    <h1>Nouveau message de {{ $details['nom'] }}</h1>
    <p>Email : {{ $details['email'] }}</p>
    <p>Message : </p>
    <p>{{ $details['message'] }}</p>
</body>
</html>
