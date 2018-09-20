@extends('layouts.app')

@section('content')
    <!-- HERO  -->
    <section id="services">
        <!--Desktop Version-->
        <div class="d-none d-md-block">
            <div id="service1" class="service">
                <div class="serviceBox">
                    <h1>Divorce &amp;<br>Family&nbsp;Law</h1>
                    <div class="serviceContent">
                        <hr>
                        <p>Skilled, results-driven representation in South Florida family 
                        law matters has been a pillar of strength for our&nbsp;law...</p>
                        <a href="divorce-family-law"><button class="btn2 btn-lg">Learn More</button></a>
                    </div>
                </div>
                <img src="images/tri.svg" class="triangleIcon" alt="Triangle">
            </div>
            <div id="service2" class="service">
                <div id="serviceBox2" class="serviceBox">
                    <h1>Bankruptcy</h1>
                    <div class="serviceContent">
                        <hr>
                        <p>Although filing personal bankruptcy is a big step, many people find that 
                        it is the one legal, dependable way to&nbsp;get...</p>
                        <a href="bankruptcy"><button class="btn2 btn-lg">Learn More</button></a>
                    </div>
                </div>
                <img src="images/tri.svg" class="triangleIcon" alt="Triangle">
            </div>
            <div id="service3" class="service">
                <div class="serviceBox">
                    <h1>Personal<br>Injury</h1>
                    <div class="serviceContent">
                        <hr>
                        <p>An accident caused by someone else's negligence can be devastating, potentially 
                        causing head injuries, back&nbsp;injuries...</p>
                        <a href="personal-injury"><button class="btn2 btn-lg">Learn More</button></a>
                    </div>
                </div>
                <img src="images/tri.svg" class="triangleIcon" alt="Triangle">
            </div>
        </div>
        <!--Mobile Version-->
        <div class="d-block d-md-none">
            <a href="divorce-family-law">
                <div id="serviceMobile1">
                    <div class="serviceContentMobile">
                        <h1>Divorce &amp; Family Law</h1>
                    </div>
                    <img src="images/tri.svg" class="triangleIcon" alt="Triangle">
                </div>
            </a>
            <a href="bankruptcy">
                <div id="serviceMobile2">
                    <div class="serviceContentMobile">
                        <h1>Bankruptcy</h1>
                    </div>
                    <img src="images/tri.svg" class="triangleIcon" alt="Triangle">
                </div>
            </a>
            <a href="personal-injury">
                <div id="serviceMobile3">
                    <div class="serviceContentMobile">
                        <h1>Personal Injury</h1>
                    </div>
                    <img src="images/tri.svg" class="triangleIcon" alt="Triangle">
                </div>
            </a>
        </div>
    </section>

    <!-- OUR FIRM MODULE -->
    @include("inc.firm-module")

    <!-- ATTORNEYS MODULE -->
    @include("inc.attorneys-module")

    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection