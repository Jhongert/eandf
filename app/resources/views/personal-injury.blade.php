@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroPersonalInjury"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp; 
                    <li class="active">Personal Injury</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Personal Injury</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>An accident caused by someone else's negligence can be devastating, potentially causing head injuries, back 
                           injuries, broken bones and other harm that requires costly medical treatment. Victims often cannot work for 
                           an extended period and cannot perform or enjoy many life activities. In some cases, these injuries prove 
                           permanently disabling.</p>
                        <p>Medical error is the third leading cause of death in the U.S. If you've been hurt in an accident through 
                           someone else's negligence, it is critical to get an experienced lawyer involved as soon as possible. Prompt 
                           investigation to preserve evidence and begin building your case could make all the difference for your future.</p>
                        <p>The personal injury attorneys at The Law Offices of Elkins & Freedman have more than 60 years of combined experience 
                           assessing legal options and defending injured people's rights in Florida. We offer informed counsel and aggressive 
                           representation to people in communities such as Boca Raton, Orlando, West Palm Beach and Coral Springs.</p>
                        <h2>Fighting for Every Dollar you Deserve</h2>
                        <p>When you've been injured in an accident, you not only have the pain of injuries to contend with, but also potentially 
                           steep medical bills as well as lost wages from time off work. Who pays for this? Without a lawyer on your side, it's 
                           easy to get bogged down in unmanageable medical bills and other fees associated with your injuries.</p>
                        <p>At The Law Offices of Elkins & Freedman, we can advocate on your behalf to get fair and full compensation from insurance 
                           companies and any other parties responsible for your injuries. Whether you've been in a car accident, have been hurt in 
                           a slip-and-fall/trip-and-fall accident, or suffered another type of injury because of someone else's negligence, we can 
                           help. And we work on contingency, which means that you owe us no lawyers' fees until we recover compensation for your 
                           case.</p>
                        <h2>Fight for What's Right, Contact Us Today</h2>
                        <p>We treat each client like we would want to be treated. You can turn to our firm anytime for trustworthy, compassionate 
                           legal guidance. Getting the compensation you need can begin with a free consultation and case evaluation. If we cannot 
                           help you obtain money to help pay for medical expenses and address other damages, you will pay no attorney fees at all. 
                           Call <strong>800-992-1277</strong> or email us, today.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc.personal-injury-sidebar")
            </div>
        </div>
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection