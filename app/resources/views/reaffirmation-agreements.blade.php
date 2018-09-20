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
                    <li class="active">Reaffirmation Agreements</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Reaffirmation Agreements</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Recognize the Reaffirmation Trap</h2>
                        <p>When you face extreme debt and are considering bankruptcy or other debt relief options, it is important to get an 
                           attorney involved in the process as soon as possible. This is especially true if you have been asked to sign a 
                           reaffirmation agreement or a waiver discharge.</p>
                        <p>Lenders often use high-pressure tactics to get borrowers to unknowingly sign these agreements, thereby signing away 
                           many of their rights and their ability to retain their possessions. These lenders will tell you that these agreements 
                           prevent car repossession or possession of other property, but the reality is that these agreements eliminate your ability 
                           to discharge certain debts through bankruptcy. Your property or your car may still be repossessed if you fall behind on 
                           your payments at a later time.</p>
                        <h2>Consult an Attorney Before You Sign</h2>
                        <p>At The Law Offices of Elkins & Freedman, we give you direct access to reaffirmation agreement lawyers serving Boca Raton, 
                           Orlando, and other communities throughout South and Central Florida. We carefully analyze reaffirmation agreements, and 
                           give you advice about whether or not signing the agreement is appropriate for your situation. The advice we provide is 
                           shaped by the knowledge we have gained during the more than 30 years we have helped clients, and by the more than 15,000 
                           successful consumer bankruptcy petitions we have filed.</p>
                        <p>At The Law Offices of Elkins & Freedman, we give you direct access to reaffirmation agreement lawyers serving Boca Raton, 
                           Orlando, and other communities throughout South and Central Florida. We carefully analyze reaffirmation agreements, and 
                           give you advice about whether or not signing the agreement is appropriate for your situation. The advice we provide is 
                           shaped by the knowledge we have gained during the more than 30 years we have helped clients, and by the more than 15,000 
                           successful consumer bankruptcy petitions we have filed.</p>
                        <h2>Contact Us for Help with Debt Relief</h2>
                        <p>Call <strong>800-992-1277</strong> or contact us online to arrange a free consultation with a member of our results-oriented debt relief 
                           team.</p>
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