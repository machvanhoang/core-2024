<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" loader="enabled" dir="ltr" data-nav-layout="vertical"
    data-theme-mode="dark" data-header-styles="dark" data-menu-styles="dark" data-toggled="close"
    style="--primary-rgb: 37, 199, 224;">

<head>
    @include('partials.admin.head')
</head>

<body>
    @include('partials.admin.switcher')
    @include('partials.admin.loader')
    <div class="page">
        @include('partials.admin.header')
        @include('partials.admin.aside')
        <div class="main-content app-content">
            {{ $slot }}
        </div>
        @include('partials.admin.footer')
        @include('partials.admin.header-responsive-search')
    </div>
    @include('partials.admin.sroll')
    @include('partials.admin.js')
</body>

</html>
