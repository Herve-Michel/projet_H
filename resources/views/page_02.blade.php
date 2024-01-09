<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Page_02
    </h1>

    <form action="{{route('vers_le_traitement_age')}}" method="POST">
        @csrf
        <br><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
        <br><br>
        <button type="submit">Valider</button>
    </form>

</body>

</html>