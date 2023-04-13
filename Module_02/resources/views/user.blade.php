<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="4">
        <tr><td>Привет! {{$user['last_name']}}</td></tr>
        <tr><td>фамилия {{$user['first_name']}}</td></tr>
        <tr><td>Твоя почта {{$user['email']}}</td></tr>
    </table>
</body>
</html>