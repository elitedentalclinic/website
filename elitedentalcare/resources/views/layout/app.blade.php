<!DOCTYPE html>
 <html>
    <head>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                    document,'script','https://connect.facebook.net/en_US/fbevents.js');

            fbq('init', '1092305497503984');
            fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1092305497503984&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->

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