<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="icon" href="{{ asset('images/MeloLibrary.png') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-g7V+eC1xQ7TUKbAa99LCnsDNXAKrZM01a33z22O93IlfVymy+M1kxJIXbAkktfK99O7ngXrEoU6RbU/OJ2Q6wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-R2FkLXZgQvv80F/sW8+65dPw4h4yvxDvpj+47PpJyskZlXkwZfmzdEZm8K3B18wGfrp+y5oRUL/wx+l8KjF1dw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    </body>
</html>