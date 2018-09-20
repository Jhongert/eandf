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
                    <li class="active">Chapter 7</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Chapter 7</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>In a Weak Economy, Many Seek Chapter 7 Bankruptcy</h2>
                        <p>If you have too much debt and cannot keep up with it, you are far from alone in Central and South Florida. A persistently tough 
                           economy has put millions of people in the same situation here and nationwide. For many hardworking people and families, students, 
                           retirees and others facing financial adversity, the path to recovery starts with reliable, personalized counsel on Chapter 7 
                           bankruptcy.</p>
                        <h2>Helping You Make the Best Decision for You</h2>
                        <p>At The Law Offices of Elkins & Freedman, we help clients stop creditor harassment, protect essential property and start fresh. 
                           Applying experience gained through more than 15,000 successful consumer bankruptcy filings over the past 30-plus years, we will 
                           treat you with genuine care and help you make the best decision possible about Chapter 7 bankruptcy or another debt relief solution 
                           such as Chapter 13.</p>
                        <h2>Banish Heavy Debt and Aggressive Creditors</h2>
                        <p>U.S. bankruptcy laws are in place to help people overcome unmanageable debt loads and get back on track. The Bankruptcy Code is 
                           essential to our economy, and it has been for hundreds of years. As experienced Boca Raton Chapter 7 attorneys, <strong>we will carefully 
                           assess your individual circumstances and focus on finding the right solution for you</strong>. If you qualify under the bankruptcy means test, 
                           benefits a Chapter 7 filing can provide include:</p>
                        <ul>
                            <li>Elimination of most or all unsecured debts, including credit card balances of any amount</li>
                            <li>Near-immediate relief from creditor calls, threatening letters and other actions against you, such as crippling wage garnishment 
                                or court judgments allowing seizure of your property</li>
                            <li>The ability to keep and protect assets critical for your family and livelihood, such as your home, basic vehicles and likely all 
                                of your household goods</li>
                        </ul>
                        <h2>Find Out if Chapter 7 Bankruptcy Can Help You</h2>
                        <p>Please do not wait to get the caring, reliable legal advice you need. If you are ready to file Chapter 7 bankruptcy or want to know what 
                           other options are available, turn to the Orlando and Boca Raton-area lawyers at Elkins & Freedman. We offer a free consultation, and are 
                           adept at making our services practical and affordable for each client we help.</p>
                        <p>We are a debt relief agency. We help people file for bankruptcy relief under the Bankruptcy Code.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc/bankruptcy-sidebar")
            </div>
        </div>
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")

@endsection