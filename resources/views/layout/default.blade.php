<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("tittle", "Ecomerce Application")</title>
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    @yield("style")
  </head>
  <body>
    @include('includes.header')
    @yield("content")
    @include('includes.footer')
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    @yield("script")
  </body>
</html>