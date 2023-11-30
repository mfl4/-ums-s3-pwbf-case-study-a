<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mx-44 my-20">
    <h1 class="text-3xl font-black text-center border-y-4 border-violet-500 p-5 mb-5">{{ $title }}</h1>

    @yield('content')
</body>

</html>
