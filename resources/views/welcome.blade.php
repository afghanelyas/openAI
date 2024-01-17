<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AI Poem</title>
</head>
<body class="h-full grid place-items-center p-6 "> 
    <div class="text-xs font-snas">
        {!! nl2br($poem) !!}
    </div>
</body>
</html>