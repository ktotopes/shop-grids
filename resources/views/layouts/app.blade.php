<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('layouts.partials._meta')

    <title>{{$title ?? config('app.name')}}</title>

    @include('layouts.partials._favicon')

    @include('layouts.partials._styles')

</head>

<body>

@include('layouts.partials._loader')

@include('layouts.partials._header')

<main>
    @yield('content')
</main>

@include('layouts.partials._footer')

@include('layouts.partials._scrollTop')

@include('layouts.partials._scripts')

@yield('scripts')

</body>

</html>
