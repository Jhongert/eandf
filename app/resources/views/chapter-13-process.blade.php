@extends('layouts.app')

@section('content')

    <!-- HERO -->
    <section id="heroBankruptcy2"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp;
                    <li><a href="bankruptcy">Bankruptcy</a></li>/&nbsp;&nbsp; 
                    <li class="active">Chapter 13 Process</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Chapter 13 Process</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>You Don't Have to be Destitute to File for Bankruptcy</h2>
                        <p>If your income happens to be too high for Chapter 7 under the bankruptcy means test, you can 
                           get debt relief and protect specific assets by filing Chapter 13 bankruptcy. This variation of 
                           the bankruptcy process takes longer, but still creates an end result that frees you from 
                           crushing debt.</p>
                        <p>At The Law Offices of Elkins & Freedman, with lawyers serving clients in Boca Raton and throughout 
                           South and Central Florida, we will put our experience completing more than 15,000 prior bankruptcy 
                           filings to work and find the best available solution for you.</p>
                        <h2>How Does Chapter 13 Work?</h2>
                        <p>In Florida, the Chapter 13 process:</p>
                        <ul>
                            <li>Involves establishing a plan to pay a set amount against their debts monthly to a trustee over 
                                a three- to five-year period</li>
                            <li>Has the primary goal of saving your home from foreclosure</li>
                            <li>Takes into account problems with debts that cannot be discharged through bankruptcy, such as unpaid 
                                taxes, family support obligations and delinquent student loans</li>
                        </ul>
                        <p>By addressing these and other related factors, Chapter 13 bankruptcy allows for significant relief from 
                           unsecured debts even though you earn an income too high to allow you to file Chapter 7 bankruptcy.</p>
                        <h2>Let Us Help You Catch Up Financially, Call Today</h2>
                        <p>If you think you may need help filing Chapter 13 bankruptcy in Orlando or elsewhere in Florida, our debt 
                            repayment plan attorneys can help you create a plan that allows you time to catch up. This process begins 
                            with a free consultation at a time and location that works for you. We offer evening and weekend 
                            appointments, and we take pride in our responsiveness as well as what we are able to accomplish for our 
                            valued clients.</p>
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
