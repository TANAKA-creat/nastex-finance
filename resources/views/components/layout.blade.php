<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <?php date_default_timezone_set('Asia/Tokyo'); ?>
    <title>nastex_money</title>
</head>

<body>
    <div class="container">
        {{-- {{ $slot }} --}}
        @component('components.header')
        @endcomponent

        <main class="py-4 md-5">
            @yield('content')
        </main>

        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>
