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
                    <li class="active">Child Support</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Child Support</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Calculating an Accurate Agreement Based on Formula and&nbsp;Finances</h2>
                        <p>Due to the complex regulations and guidelines that are involved, child support is an especially complex 
                           area of family law in Florida. At Elkins & Freedman, our Boca Raton child support attorneys take the time 
                           to walk you step by step through child support calculations and ensure that your child support accurately 
                           reflects your situation. Our experienced legal team — we have helped more than 10,000 clients through the 
                           Florida divorce process — provides you with honest and clear advice about your situation, and it gives you 
                           the tools you need to ensure support enforcement in an efficient and effective manner.</p>
                        <p>If you are already paying or receiving child support, and your financial situation has changed, we can help. 
                           Whether you have lost a job or are in financial distress for some other reason, we can help you modify child 
                           support.</p>
                        <h2>Elements of Florida Child Support Guidelines</h2>
                        <p>A child support calculator developed by the state of Florida determines what your child support obligations 
                           or payments will be. The formula this calculator uses considers many different factors, including:</p>
                        <ul>
                            <li>Custodial schedule/number of overnights</li>
                            <li>Gross monthly income of each party</li>
                            <li>Cost of children's health insurance</li>
                            <li>Costs of day care</li>
                        </ul>
                        <p>There are many other expenses that need to be taken into account to reach an appropriate child support figure. 
                           At our firm, a child support lawyer serving Boca Raton, Orlando and other surrounding communities will help 
                           you understand all of the factors that need to be taken into account in your case.</p>
                        <h2>Contact Us for the Help You Deserve</h2>
                        <p>To arrange an initial consultation with our lawyers, call <strong>800-992-1277</strong> or <a href="contact">contact us</a> online.</p>
                    </article>   
                </div>
                <!--Sidebar-->
                @include("inc/divorce-sidebar")
            </div>
        </div>
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")

@endsection