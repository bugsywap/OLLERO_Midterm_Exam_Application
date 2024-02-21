<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Midterm Exam - Ollero</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            font-family: 'Courier New', Courier, monospace;
        }
        ul li{
            list-style: none;
            font-size: 2rem;
        }
    </style>
    <h1>Hi! I am Gabriel Ollero. This is my midterm exam and I chose gadgets. Here is the list of my personal preference on best to worst: </h1>
    <ul>
    @foreach ($gadget_array as $gadget_list)
        <li> {{$gadget_list}}</li>
        @endforeach
    </ul>
</body>
</html>
