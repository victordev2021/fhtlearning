<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: rebeccapurple;
        }

    </style>
</head>

<body>
    <h1>Este es un correo electrónico de revisión de cursos.</h1>
    <p>El curso <strong>{{ $course->title }}</strong> no se ha aprobado.</p>
    <h2>Motivo rechazo</h2>
    {!! $course->observation->body !!}
</body>

</html>
