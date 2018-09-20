@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroNews"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp; 
                    <li class="active">News</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>News</h1>
            <div class="row justify-content-center">
                <!--Main Content-->
                <div class="col-md-12 col-lg-10">
                    <div class="newsBox">
                        <h2>Lorem Ipsum Dolor Sit Amet</h2>
                        <p class="newsDate d-none d-md-block"><span class="newsDateLine">|</span>&nbsp; &nbsp; June 12, 2018</p>
                        <p class="newsDateMobile d-block d-md-none">June 12, 2018</p>
                        <p class="newsAuthor">By: Lorem Ipsum</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusatium doloremque 
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
                            quasi architecto.</p>
                        <a href="news-detail"><button class="btn btn-lg">Learn More</button></a>
                    </div>
                    <div class="newsBox">
                        <h2>Quae Ab Illo Inventore Veritatis</h2>
                        <p class="newsDate d-none d-md-block"><span class="newsDateLine">|</span>&nbsp; &nbsp; May 30, 2018</p>
                        <p class="newsDateMobile d-block d-md-none">May 30, 2018</p>
                        <p class="newsAuthor">By: Laboris Nisi</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                        nostrud exercitation.</p>
                        <a href="#"><button class="btn btn-lg">Learn More</button></a>
                    </div>
                    <div class="newsBox">
                        <h2>Excepteur Sint Occaecat Cupidatat</h2>
                        <p class="newsDate d-none d-md-block"><span class="newsDateLine">|</span>&nbsp; &nbsp; April 23, 2018</p>
                        <p class="newsDateMobile d-block d-md-none">April 23, 2018</p>
                        <p class="newsAuthor">By: Deserunt Mollit</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                        <a href="#"><button class="btn btn-lg">Learn More</button></a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- SERVICES MODULE -->
    @include("inc.services-module")
@endsection