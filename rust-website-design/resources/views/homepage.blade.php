<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- INCLUDE HEAD -->
        @include('components.head')

        <!-- TITLE -->
        <title>{{ config('app.name') }} - Homepage</title>
    </head>
    <body id="body">

        <!-- INCLUDE HEADER -->
        @include('components.header')

        <!-- INCLUDE HOMEPAGE CONTENT -->
        @include('components.homepage')

        <!-- INCLUDE FOOTER -->
        @include('components.footer')

    </body>
</html>
