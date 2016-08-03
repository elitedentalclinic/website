<!DOCTYPE html>
 <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-pink.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed"  type='text/css'>
        <link rel="stylesheet" href="{{asset('/css/elite.css')}}">
        <title>elite dental care</title>
    </head>
<body class="w3-light-grey">
        @include('layout._header')
        <section class="edc-main">
            <div class="w3-content w3-margin-left" style="max-width:1400px" >
                <div class="w3-row">
                    <div class="w3-col l7 m7  s12 ">
                            @include('layout._about')
                            @include('layout._surgeon')
                            @include('layout._timing')
                     </div>
                    <div class="w3-col l5 m5 s12 ">
                           @yield('content')
                     </div>
                 </div>
             </div>
        </section>
        @include('layout._footer')
        @include('layout._script')
</body>
</html>