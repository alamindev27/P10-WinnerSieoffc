{{-- <!doctype html>
<html lang="en">
@include('frontend.layouts.partials.head')

<body>
    @include('frontend.layouts.partials.top-bar')
    @yield('content')
    @include('frontend.layouts.partials.footer')
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">

</head> --}}
@include('frontend.layouts.partials.head')

<body>

    @yield('content')
@include('frontend.layouts.partials.footer')
</body>

</html>
