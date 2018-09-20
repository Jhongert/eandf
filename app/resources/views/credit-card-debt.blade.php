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
                    <li class="active">Credit Card Debt</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Credit Card Debt</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>In Credit Card Debt? You're in Good Company</h2>
                        <p>If you face endless bills and mounting credit card debt in Florida, you are not alone. The U.S. Census Bureau 
                           recently found that credit card holders in the United States hold more than $870 billion in outstanding debt, 
                           and that figure continues to climb every day. Thankfully, when you face seemingly insurmountable credit card debt, 
                           you have options.</p>
                        <p>At The Law Offices of Elkins & Freedman, we carefully assess your situation and help you understand whether bankruptcy, 
                           debt negotiation or some other option is best for your circumstances. To provide you the straightforward answers you 
                           need, we draw on the knowledge and experience we have gained through more than 15,000 successful consumer bankruptcy 
                           filings. When you work with our firm, an Orlando or Boca Raton lawyer for credit card debt can custom-tailor advice 
                           to your specific goals, and make sure that you have a trusted advocate at your side through the entire debt relief 
                           process.</p>
                        <h2>Filing at the Right Time</h2>
                        <p>While credit card debt is typically considered unsecured, meaning it can be discharged in bankruptcy, there is a catch. 
                           The timing of your bankruptcy filing is important, as the purchases that you made with the card up to 90 days prior to 
                           filing will be under extreme scrutiny.</p>
                        <p>We understand that you may have used your credit card to pay for groceries and other necessities, but the court does not 
                           automatically assume this. As such, it is vital to speak to us as soon as possible so that we can help you file your 
                           bankruptcy petition at the appropriate time, and advocate on your behalf before the bankruptcy court.</p>
                        <h2>Call Us Today</h2>
                        <p>To discuss your options with an attorney — our initial consultations are free of charge — contact our firm at 
                           <strong>800-992-1277</strong>.</p>
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