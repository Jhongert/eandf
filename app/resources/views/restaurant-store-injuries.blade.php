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
                    <li><a href="personal-injury">Personal Injury</a></li>/&nbsp;&nbsp; 
                    <li class="active">Restaurant/Store Injuries</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Restaurant/Store Injuries</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>Property owners in Florida have a clear legal obligation to keep their premises safe for those who shop there, 
                           dine there or visit for any lawful purposes. Unfortunately, many restaurant and store owners fail to take this 
                           obligation seriously, leading to falls and other accidents that can be devastating for the victims.</p>
                        <h2>Injured in a Restaurant or Store? Consult a Lawyer Immediately</h2>
                        <p>It is very important to contact an experienced lawyer as soon as possible if you have fallen on dangerous property 
                           and suffered a serious injury. People who hesitate and wait too long after a retail trip-and-fall or accident caused 
                           by a building code violation, for example, face an uphill battle to get fair compensation. At The Law Offices of 
                           Elkins & Freedman, a Boca Raton attorney for restaurant slip-and-fall injuries will treat you with care, hear you 
                           out and move decisively to investigate your case and gather critical evidence.</p>
                        <h2>Trusted Counsel and Determined Representation</h2>
                        <p>Our legal team has been protecting individuals' rights in courtrooms throughout Florida for more than 30 years. 
                           Whether your case calls for an Orlando restaurant slip-and-fall lawyer or a determined advocate equipped to prove 
                           fault for a trip-and-fall accident in a Margate store, you can turn to us with confidence. Our legal team's premises 
                           liability knowledge and capabilities cover the full spectrum of:</p>
                        <ul>
                            <li>Falls caused by spilled liquids on restaurant and retail store tile floors</li>
                            <li>Falls caused by merchandise or debris in aisles that could not be seen or avoided until it was too late for 
                                the victim</li>
                            <li>Falls caused by a wide range of other dangerous conditions such as poorly configured displays, ill-lit or 
                                treacherous staircases, or rumpled and dangerously placed floor mats or carpeting</li>
                            <li>Injuries ranging from broken or badly sprained ankles to traumatic brain injuries, from fractured wrists 
                                and arms to permanently disabling back injuries</li>
                        </ul>
                        <h2>Proving Fault and Obtaining Significant Compensation</h2>
                        <p>Whether your fall occurred in a Walmart or other "big-box" store, a South Florida grocery store or restaurant, or any 
                           other retail/commercial location, our legal team stands ready to help. Key requirements of your case may include 
                           establishing that:</p>
                        <ul>
                            <li>A dangerous condition existed and should have been corrected or marked with warnings.</li>
                            <li>The condition — liquid or another slippery substance on the floor, for example, or inadequate lighting on a stairwell 
                                — posed a substantial risk.</li>
                            <li>The victim could not have been reasonably expected to recognize or avoid the dangerous area, and thus is not at fault 
                                for his or her own injuries.</li>
                            <li>Injuries suffered — whether to the limbs, head, back or other body parts — are serious enough to require medical treatment 
                                and have a substantial impact on the fall victim's life.</li>
                            <li>The owner, store or restaurant employees or others responsible for keeping the property safe knew about and should have 
                                corrected a dangerous condition or posted a visible warning.</li>
                            <li>The accident was unavoidable under the circumstances.</li>
                        </ul>
                        <h2>For A Free, No-Risk Consultation, Call Today</h2>
                        <p>Please do not delay getting the legal advice you need in this traumatic time. If we cannot help you, that is what we will tell 
                           you — but there is a good chance that we can, so contact us today. You will pay no attorney fees whatsoever unless you ultimately 
                           receive financial compensation for your injuries.</p>
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