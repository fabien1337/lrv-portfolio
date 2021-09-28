<!DOCTYPE html>
<html>
<head>
    <title>Mail contact</title>
</head>
<body>
    <p>Nom : {{ $request['name'] }}</p>
    <p>Email : {{ $request['email'] }}</p>
    <p>Sujet : {{ $request['subject'] }}</p>
    <p>Message :<br />{!! nl2br($request['message']) !!}</p>
</body>
</html>