<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1 class="text-teal-100 font-bold underline bg-slate-700 text-3xl flex justify-center ">
    Hello, Im {{ $name }}!!!
  </h1>
  <p class="text-teal-100 font-bold underline bg-slate-700 text-3xl flex justify-center ">
    I live in {{ $address }}, and my email is {{ $email }}
</p>
</body>
</html>