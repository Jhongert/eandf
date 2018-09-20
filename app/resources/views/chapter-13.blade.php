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
                    <li class="active">Chapter 13</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Chapter 13</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Steady Income but Unmanageable Debt? Chapter 13 may be the&nbsp;Answer.</h2>
                        <p>Almost anyone can run into debt problems in an economy that has been so consistently adverse and 
                           volatile. For some people with substantial income and those who face the threat or reality of home 
                           foreclosure in Florida, a Chapter 13 bankruptcy filing is the best solution. If you have regular, 
                           dependable income but obligations you know you cannot meet long term, a consultation with one of 
                           our Boca Raton Chapter 13 lawyers may be the answer.</p>
                        <p>At The Law Offices of Elkins & Freedman, our Orlando and Boca Raton-area Chapter 13 bankruptcy 
                           attorneys are committed to finding the best available debt relief solution for each client we serve. 
                           That includes carefully assessing your overall financial situation and finding an answer even if you 
                           do not qualify to file Chapter 7 "debt liquidation" bankruptcy after completing the bankruptcy means 
                           test.</p>
                        <h2>Reasons to Choose Chapter 13</h2>
                        <p>Chapter 13 bankruptcy involves creating a plan to pay creditors over a three- to five-year period. That 
                           plan must be approved by a federal court administrator called a bankruptcy trustee. However, it is 
                           important to recognize that you may be able to discharge or significantly reduce certain debts as part 
                           of this plan. Reasons you may decide to file Chapter 13 bankruptcy include the following:</p>
                        <ul>
                            <li>Your income and assets prohibit you from filing Chapter 7 bankruptcy.</li>
                            <li>Your goals including protecting specific assets, such as your family home or other real estate, 
                                would be forfeited and sacrificed if you filed Chapter 7.</li>
                            <li>You need time to pay business tax obligations, child support, alimony or other obligations that 
                                cannot be discharged through bankruptcy.</li>
                            <li>You have filed a previous Chapter 7 bankruptcy discharge within the past eight years.</li>
                        </ul>
                        <h2>Get the Facts About Chapter 13 Bankruptcy, Contact Us Today</h2>
                        <p>If you are considering Chapter 13 bankruptcy, it is critical to speak with a lawyer who will spell out 
                           your obligations clearly and protect your best interests. We offer appointments for a free consultation 
                           in the evening or on weekends when necessary. Please get in touch with us today to assess your legal 
                           rights and obligations.</p>
                        <p>We are a debt relief agency. We help people file for bankruptcy relief under the Bankruptcy Code</p>
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