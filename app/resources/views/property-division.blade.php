@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroDivorce2"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp;
                    <li><a href="divorce-family-law">Divorce &amp; Family Law</a></li>/&nbsp;&nbsp; 
                    <li class="active">Property Division</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Property Division</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Relieving the Anxiety of Asset Division</h2>
                        <p>For more than 30 years, the attorneys at The Law Offices of Elkins & Freedman have worked tirelessly to ensure that our clients 
                           receive their fair share or property in a divorce. While guiding our clients through their divorces, we provide them with direct 
                           access to the lawyers in charge of their cases, and remain attentive and responsive throughout the entire process.</p>
                        <p>We recognize that facing a divorce and having to divide assets can put you under a great deal of stress. As such, our attorneys 
                           do everything possible to alleviate any anxiety that the divorce process puts on you and strive to provide you with the peace of 
                           mind that comes from knowing our assertive advocates are by your side every step of the way.</p>
                        <h2>Careful and Complete Accounting of Assets and Debts</h2>
                        <p>Our property division attorneys in Boca Raton, Orlando and the surrounding portions of Central and South Florida have handled more 
                           than 10,000 divorce cases. This extensive experience has provided us with the proven negotiation and litigation skills necessary 
                           to make certain that our clients receive equitable division of assets such as:</p>
                        <ul>
                            <li>Real estate</li> 
                            <li>Vehicles</li>
                            <li>Bank accounts</li>
                            <li>Stocks and other investments</li>
                            <li>401(k)s, IRAs and other retirement accounts</li>
                            <li>Pensions</li>
                            <li>Employment benefits</li>
                            <li>Jewelry</li>
                            <li>Business interests</li>
                        </ul>
                        <p>In addition to helping our clients receive their fair share of these and other assets, we also assess all of the marital debt that 
                           is involved in a divorce. This allows us to develop comprehensive allocation solutions that encompass all assets and liabilities 
                           that a couple accumulated during their marriage.</p>
                        <h2>Contact Our Firm</h2>
                        <p>To arrange a free consultation, contact The Law Offices of Elkins & Freedman online or<br> call <strong>800-992-1277</strong>.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc.divorce-sidebar")
            </div>
        </div>
        
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection