<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- INCLUDE HEAD -->
        @include('components.head')

        <!-- TITLE -->
        <title>{{ config('app.name') }} - Homepage</title>
    </head>
    <body>

        <!-- INCLUDE HEADER -->
        @include('components.header')

        <!-- INCLUDE FOOTER -->
        @include('components.homepage')

        <!-- INCLUDE FOOTER -->
        @include('components.footer')

    </body>
</html>
