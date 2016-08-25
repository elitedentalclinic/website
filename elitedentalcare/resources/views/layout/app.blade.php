<!DOCTYPE html>
 <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-pink.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two">
        <link rel="stylesheet" href="{{asset('/css/elite.css')}}">
        <title>elite dental care</title>
    </head>
    <body>
        @include('layout._header')
        @if(session('status'))
            @include('sections.confirmation')
        @endif
        @include('sections.home')
        @include('sections.about')
        @include('sections.surgeon')
        @include('sections.appointment')
        @include('layout._footer')
        @include('layout._script')
    </body>
</html>