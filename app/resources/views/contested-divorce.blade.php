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
                    <li class="active">Contested Divorce</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Contested Divorce</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>In a contested divorce, you and the other party disagree on at least one of the major divorce issues, including property division and 
                           child custody. When a divorce is contested, an experienced attorney can be brought in to provide caring advisement and dynamic 
                           negotiation. While you and the other party may not agree, our law firm does not see this as a barrier to you obtaining workable and 
                           successful results.</p>
                        <p>With results-driven representation since 1979, The Law Offices of Elkins & Freedman is the law firm you need. Our divorce lawyers can 
                           guide you through the process and help you resolve all of the disputes surrounding your divorce. Call us toll free at 800-992-1277 to 
                           speak with us about how we can help.</p>
                        <h2>Effective Methods for Resolving All Major Divorce Issues</h2>
                        <p>Contested issues typically involve:</p>
                        <ul>
                            <li><a href="property-division">How property will be divided</a></li> 
                            <li><a href="child-custody-time">Where the children will live</a></li>
                            <li><a href="child-support">How much will be paid in child support</a></li>
                            <li><a href="alimony-spousal-support">If alimony will be awarded</a></li>
                        </ul>
                        <p>There are several methods we can use to reach a divorce settlement agreement that is in your best interests, including negotiation, 
                           mediation and trial. Each client is different, and we adjust our strategies and methods accordingly. We are dedicated to protecting 
                           your financial interests, the best interests of your children, your parental rights and your future.</p>
                        <h2>We are a Responsive Family Law Firm — Talk To Us Today</h2>
                        <p>We have convenient office locations in South Florida and Central Florida, including in Orlando and Boca Raton. To schedule your 
                           consultation at a time and office location that works best for you, please call <strong>800-992-1277</strong> or contact us online.</p>
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