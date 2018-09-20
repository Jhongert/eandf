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
                    <li class="active">Creditor Harassment</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Creditor Harassment</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Most of Our Potential Clients Qualify for Bankruptcy Protection</h2>
                        <p>If you have accumulated unmanageable debt, you are far from alone in Central Florida. Millions of people here 
                           and across the country are in a similar situation. For many, the most direct and reliable path to financial 
                           recovery and freedom from constant debt collection harassment starts with reliable counsel on Chapter 7 or 
                           Chapter 13 bankruptcy. While not everyone qualifies for these forms of sweeping debt relief, 90 to 95 percent 
                           of the potential clients who come to us do.</p>
                        <h2>Decades of Experience Securing Clients Debt Relief</h2>
                        <p>At Elkins & Freedman, our attorneys are dedicated to helping clients end creditor harassment, protect their most 
                           important assets and get back on track. Our Boca Raton and Orlando lawyers for creditor harassment have filed more 
                           than 15,000 bankruptcy cases since 1979. Our creditor harassment lawyers serving Central and South Florida communities 
                           will treat you with respect, advise you with integrity, and help you make the best decisions possible for your family 
                           and&nbsp;future.</p>
                        <h2>Stopping Creditor Harassment</h2>
                        <p>As soon as you file for bankruptcy, a legal mechanism known as the automatic stay goes into effect. The automatic stay 
                           prevents creditors from contacting you in any way unless they obtain the approval of the bankruptcy court. This means 
                           that collection calls, judgments, garnishments of your wages, repossession efforts and all other actions against you 
                           must cease immediately, and cannot resume until your case has reached its conclusion.</p>
                        <h2>How Can Bankruptcy Help Me?</h2>
                        <p>The U.S. Bankruptcy Code is in place so that people can eliminate overwhelming debt and return to stability and 
                           productivity. For hundreds of years now, it has been an essential component of our economy and has allowed financially 
                           distressed individuals to gain benefits such as:</p>
                        <ul>
                            <li>A complete, legally enforceable discharge (elimination) of most or all unsecured debts such as credit card balances</li>
                            <li>The ability to keep most or all of your essential assets, typically including your home, retirement savings in qualified 
                                accounts, basic automobiles and household property</li>
                        </ul>
                        <p>We will help you complete the bankruptcy means test and determine whether you are eligible to file bankruptcy.</p>
                        <h2>Protect Yourself From Creditors, Call Us Today</h2>
                        <p>Please do not put off getting the legal information and advice you need. Whether you are certain you want to file Chapter 7 
                           bankruptcy or want to discuss Chapter 13 and other options, turn to us at Elkins & Freedman. We offer a free consultation, 
                           flexible appointment times and manageable payment plans.</p>
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