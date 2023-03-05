<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Объявления</title>

    <!-- Fonts -->
    <!--     <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

    <!-- Styles -->

</head>

<body class="container">
    <h1 class="my-3 text-center">Объявления</h1>
    @if (count($bbs) > 0)
    <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th>&nbsp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bbs as $bb)
            <tr>
                <td>
                    <h4>{{$bb->title}}</h4>
                </td>
                <td>{{$bb->price}}</td>
                <td>
                    <a href="/{{$bb->id}}">Подробнее ...</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>