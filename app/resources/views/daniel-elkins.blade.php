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
                    <li class="active">Daniel C. Elkins</li>
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
                            <img src="images/daniel-elkins.jpg" class="img-fluid" alt="Attorney Daniel C. Elkins">
                        </div>
                        <!--Content-->
                        <div id="attorneyInfo" class="col-sm-6 col-md-7 col-lg-7 offset-lg-1">
                            <h2>Daniel C. Elkins</h2>
                            <p class="attorneyTitle">Associate</p>
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
                                    <p><span class="infoText">Phone:</span> 407.830.1177</p>
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
                                    <li>Personal Injury</li>
                                    <li>Bankruptcy</li>
                                    <li>Family/Divorce</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bioBox">
                            <h3>Bar Admissions</h3>
                            <div class="bioItems">
                                <ul class="list-unstyled">
                                    <li>Florida</li>
                                    <li>U.S. District Court Middle District of Florida</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bioBox">
                            <h3>Education</h3>
                            <div class="bioItems">
                                <ul class="list-unstyled">
                                    <li><strong>Washington University School of Law</strong>, St. Louis, Missouri J.D. <em>cum laude</em> - 2011</li>
                                    <li><strong>Lynn University</strong> <br>B.S. summa cum laude - 2008 <br>Major: Business Administration</li>
                                    <li><strong>University of Oxford (Hertford)</strong> England - 2007</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bioBox">
                            <h3>Honors &amp; Awards</h3>
                            <div class="bioItems">
                                <ul class="list-unstyled">
                                    <li>F. Hodge O'Neal Corporate Law Award</li>
                                    <li>CALI Award – Corporations</li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <article class="col-md-7 col-lg-7 offset-lg-1">
                        <p>Daniel Elkins is an associate attorney at Elkins & Freedman, where he concentrates his practice in Personal Injury, 
                           Bankruptcy, and Family Law. While attending Washington University in St. Louis School of Law, Mr. Elkins served as a 
                           law clerk for the Honorable Rodney W. Sippel, U.S. District Judge in the Eastern District of Missouri. Prior to attending 
                           law school, Mr. Elkins worked for a real estate development firm in south&nbsp;Florida.</p>
                        <div class="bioSocial">
                            <a href="https://twitter.com/DanielElkinsESQ">
                                <p>
                                    <img src="images/twitter-icon-color.png" class="social img-fluid" alt="Twitter Icon">
                                    Follow Daniel on Twitter
                                </p>
                            </a> 
                        </div>   
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