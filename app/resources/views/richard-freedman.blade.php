@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroAttorneys"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp;
                    <li><a href="attorneys">Attorneys</a></li>/&nbsp;&nbsp; 
                    <li class="active">Richard L. Freedman</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent" class="p-sm-0">
        <div class="container-fluid p-sm-0">
            <h1>Attorneys</h1>
            <div id="attorneyImgBar">
                <div class="container">
                    <div class="row">
                        <!--Photo-->
                        <div id="attorneyPhoto" class="col-sm-6 col-md-5 col-lg-4">
                            <img src="images/richard-freedman.jpg" class="img-fluid" alt="Attorney Daniel C. Elkins">
                        </div>
                        <!--Content-->
                        <div id="attorneyInfo" class="col-sm-6 col-md-7 col-lg-7 offset-lg-1">
                            <h2>Richard L. Freedman</h2>
                            <p class="attorneyTitle">Partner</p>
                            <div class="row no-gutters">
                                <div class="col-1 offset-1">
                                    <img src="images/location-icon.svg" class="attorneyIcon" alt="Location icon">
                                </div>
                                <div class="col-9">
                                    <p><span class="infoText">Location:</span> Boca Raton</p>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-1 offset-1">
                                    <img src="images/attorney-phone-icon.svg" class="attorneyIcon" alt="Phone icon">
                                </div>
                                <div class="col-9">
                                    <p><span class="infoText">Phone:</span> 561.717.6529</p>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-1 offset-1">
                                    <img src="images/email-icon.svg" class="attorneyIcon" alt="Email icon">
                                </div>
                                <div class="col-9">
                                    <p><span class="infoText"><a href="">Email</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="attorneyBioContent">
            <div class="container">
                <div class="row">
                    <aside class="col-md-5 col-lg-4">
                        <div class="bioBox">
                            <h3>Areas of Practice</h3>
                            <div class="bioItems">
                                <ul class="list-unstyled">
                                    <li>Bankruptcy</li>
                                    <li>Divorce</li>
                                    <li>Personal Injury</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bioBox">
                            <h3>Bar Admissions</h3>
                            <div class="bioItems">
                                <ul class="list-unstyled">
                                    <li>Florida, 1979</li>
                                    <li>U.S. District Court Middle District of Florida</li>
                                    <li>U.S. District Court Southern District of Florida</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bioBox">
                            <h3>Education</h3>
                            <div class="bioItems">
                                <ul class="list-unstyled">
                                    <li><strong>Nova Southeastern Law University</strong> <br>Fort Lauderdale, Florida <br>J.D. - 1978</li>
                                    <li><strong>George Washington University</strong> <br>Washington, District of Columbia <br>B.A. - 1974 <br>Major: Political Science</li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <article class="col-md-7 col-lg-7 offset-lg-1">
                        <p>Clients are always surprised when they call my office after hours and find me answering the phone. It is not 
                           unusual that I am in the office until 9:00 p.m. I believe it is important to stay in the office until I have 
                           returned every phone call. At Elkins & Freedman we have been offering free consultations for over 30 years.</p>
                        <p>I was born in Massachusetts, attended college at George Washington University and went to law school in Florida 
                           at Nova University where I met my law partner Alan Elkins. We have been in continuous legal practice since 1979. 
                           We have 6 office locations from Broward County through the Central Florida area.</p>
                        <p>If you have a legal problem pick up the phone or email me, I am ready to help.</p>
                    </article>
                </div>
            </div>
        </section>
    </section>

    <!-- SERVICES MODULE -->
    @include("inc.services-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection