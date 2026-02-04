<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-12 flex flex-col gap-4">
    <h1 class="text-5xl">Controle de Hábitos do Well</h1>
    <p>O controle de hábitos é uma ferramenta que ajuda as pessoas a desenvolverem hábitos saudáveis e a manterem a
        consistência
        em suas rotinas.</p>


    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Clique aqui</button>
</body>

</html>