<!doctype html>
<html lang="en">

    <head>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <title>Law Offices of Elkins &amp; Freedman - {{ $title }}</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    </head>


    <body>

        <!--Back to Top-->
        <div id="backToTop"> 
            <a href="#"><img src="images/back-to-top.png" alt="back to top"></a> 
        </div>
        
        <!-- HEADER -->
        @include("inc.header")

        <main>

            @yield('content')

            <!-- CONTACT FORM MODULE -->
            @include("inc.contact-module")

            <!-- LOCATIONS MODULE -->
            @include("inc.locations-module")

        </main>

        <!--FOOTER-->
        <@include("inc.footer")
    
    </body>

</html>
