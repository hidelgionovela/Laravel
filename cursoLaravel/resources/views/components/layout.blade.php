<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>
        th,
        td {
            padding: 15px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #af4c4c;
            color: white;
        }
    </style>
</head>

<body>

    {{ $slot }}
    {{-- {{$slot}}  Para poder carregar o conteudo de outras views neste local  --}}
    <h3>De: hidelgio Novela</h3>
</body>

</html>
