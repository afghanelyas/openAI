<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AI Poem</title>
</head>
<body class="h-full grid place-items-center p-6 bg-gray-300 "> 
    <div class="text-xs font-snas ">
        {!! nl2br($poem) !!}
        <a href="{{ route('roast') }}">
            <button class="p-2 bg-blue-200">Roast</button>
        </a>
    </div>
</body>
</html>
