@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroBankruptcy"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp; 
                    <li class="active">Bankruptcy</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Bankruptcy</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>If your debt load has gotten out of control, the pressures you are facing every day and night can be overwhelming. Although filing 
                           personal bankruptcy is a big step, many people find that it is the one legal, dependable way to get real debt relief. Meet with a Boca 
                           Raton bankruptcy attorney and find out if you may be eligible to have many of your debts discharged and get a fresh financial start 
                           that makes life manageable again.</p>
                        <h2>Approachable Attorneys Providing Debt Relief In Florida</h2>
                        <p>At The Law Offices of Elkins & Freedman, we take the intimidation of speaking with a Boca Raton-area bankruptcy lawyer out of the equation. 
                           Rather than adding to your stress, we are committed to helping you make the best possible decisions and get back on track. Attorneys at our 
                           firm have been doing exactly that for more than 30 years, and we have filed more than 15,000 bankruptcy cases.</p>
                        <h2>Taking the Fear out of the Bankruptcy Process</h2>
                        <p class="mb-4">We want to help you end creditor harassment, discharge debt, and work your way back to financial stability and productivity. You can turn 
                           to us for accurate information on everything that bankruptcy involves, its benefits and its risks, including:</p>
                        <div>
                            <!--Problem 1-->
                            <div class="row no-gutters problem">
                                <div class="col-10 col-lg-11">
                                    <h5>Bankruptcy means test</h5>
                                </div>
                                <div class="col-2 col-lg-1 infoArrow">
                                    <img src="images/info-arrow.svg" class="infoArrowRotate rotate-reset" alt="Arrow icon">
                                </div>
                                <!--Info 1-->
                                <div class="problemInfo">
                                    <p>Walking you through the bankruptcy means test and efficiently assessing your eligibility to get the debt relief you need.
                                    <a href="bankruptcy-means-test">Read More</a></p>
                                </div>
                            </div>
                            <!--Problem 2-->
                            <div class="row no-gutters problem">
                                <div class="col-10 col-lg-11">
                                    <h5>Chapter 7 bankruptcy</h5>
                                </div>
                                <div class="col-2 col-lg-1 infoArrow">
                                    <img src="images/info-arrow.svg" class="infoArrowRotate rotate-reset" alt="Arrow icon">
                                </div>
                                <!--Info 2-->
                                <div class="problemInfo">
                                    <p>Determining whether Chapter 7 bankruptcy can bring you near-immediate relief through a discharge of some or all your unsecured 
                                    debts, such as credit card balances and medical bills.<a href="chapter-7">Read More</a></p>
                                </div>
                            </div>
                            <!--Problem 3-->
                            <div class="row no-gutters problem">
                                <div class="col-10 col-lg-11">
                                    <h5>Chapter 13 bankruptcy</h5>
                                </div>
                                <div class="col-2 col-lg-1 infoArrow">
                                    <img src="images/info-arrow.svg" class="infoArrowRotate rotate-reset" alt="Arrow icon">
                                </div>
                                <!--Info 3-->
                                <div class="problemInfo">
                                    <p>Addressing more complex debt challenges, such as home foreclosure or your desire to protect certain assets, through Chapter 13 
                                    bankruptcy and a payment plan over time.<a href="chapter-13">Read More</a></p>
                                </div>
                            </div>
                            <!--Problem 4-->
                            <div class="row no-gutters problem">
                                <div class="col-10 col-lg-11">
                                    <h5>Rebuild credit after bankruptcy</h5>
                                </div>
                                <div class="col-2 col-lg-1 infoArrow">
                                    <img src="images/info-arrow.svg" class="infoArrowRotate rotate-reset" alt="Arrow icon">
                                </div>
                                <!--Info 4-->
                                <div class="problemInfo">
                                    <p>Answering all your questions honestly and thoroughly, including those about what property and assets you can keep and your ability 
                                    to rebuild credit after bankruptcy.<a href="rebuild-credit">Read More</a></p>
                                </div>
                            </div>
                            <!--Problem 5-->
                            <div class="row no-gutters problem">
                                <div class="col-10 col-lg-11">
                                    <h5>Lien stripping and reaffirmation agreements</h5>
                                </div>
                                <div class="col-2 col-lg-1 infoArrow">
                                    <img src="images/info-arrow.svg" class="infoArrowRotate rotate-reset" alt="Arrow icon">
                                </div>
                                <!--Info 5-->
                                <div class="problemInfo">
                                    <p>Helping you understand all of your options, including those related to complicated topics such as lien stripping and reaffirmation 
                                    agreements.</p>
                                </div>
                            </div>
                        </div>
                        <h2 class="mt-4">Explore the Possibility of a Fresh Start. Call Us Today.</h2>
                        <p>Too many people wait too long to get dependable bankruptcy information. Too many people drain retirement accounts and lose other assets they 
                           could have kept by consulting us sooner. Please take a positive step for your future today by calling 800-992-1277 or sending us an email 
                           request for your free, no-risk consultation.</p>
                        <p>We have full-service offices throughout Central and South Florida, including locations in Orlando and Boca Raton, where you can meet your 
                           attorney in the evening or on Saturday if needed.</p>
                        <p>We are a debt relief agency. We help people file for bankruptcy relief under the Bankruptcy Code.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc.bankruptcy-sidebar")
            </div>
        </div>
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection