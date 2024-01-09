<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Page_01
    </h1>

    <form action="{{route('vers_le_traitement')}}" method="POST">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <button type="submit">Valider</button>
    </form>
</body>

</html>