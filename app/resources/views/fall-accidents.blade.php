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
                    <li class="active">Slip &amp; Fall/Trip &amp; Fall Accidents</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Slip &amp; Fall/Trip &amp; Fall Accidents</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>Anyone can slip- or trip-and-fall on dangerous property. These accidents are totally unexpected, and often, the injuries 
                           suffered seriously disrupt a person's life and create overwhelming medical bills. In some cases, consequences are permanently 
                           disabling.</p>
                        <h2>Find Out if Your Case Justifies a Lawsuit</h2>
                        <p>Did you fall in a store or restaurant and suffer a broken wrist or a knee, ankle or back injury? Did a family member's unavoidable 
                           slip or trip cause a concussion or joint injuries? A well-prepared premises liability lawsuit may be the only way for you to get 
                           the money you need for medical expenses, lost wages and other damages. Fast action to get qualified legal counsel from a Boca Raton 
                           attorney for slip-and-fall accidents is essential.</p>
                        <p>Attorneys at The Law Offices of Elkins & Freedman have been asserting the rights of people in Orlando and throughout South and 
                           Central Florida for more than 30 years. Whatever your case demands in terms of investigation to prove who was at fault, negotiation 
                           or trial work, you will have a dynamic and trustworthy legal team on your side.</p>
                        <h2>Representation for a Range of Dangerous Property Injuries</h2>
                        <p>We are here to offer our clients caring guidance and take decisive action after any serious trip-and-fall or slip-and-fall accident 
                           such as those arising from:</p>
                        <ul>
                            <li>A fall caused by a spill of liquid or any slippery substance that should have been cleaned up or posted with warnings</li>
                            <li>A fall on broken stairs, due to the absence of an adequate railing, or due to other unsafe conditions such as inadequate 
                                lighting</li>
                            <li>Falls caused by a range of other unsafe conditions in a big-box store such as Walmart, a grocery store, or any other retail 
                                or commercial location</li>
                        </ul>
                        <h2>Our Firm Will Fight for Maximum Compensation</h2>
                        <p>Whether you were injured in Pompano Beach, Margate or Coral Springs, a trip-and-fall lawyer at our firm will take you seriously. 
                           We welcome people from all cultural backgrounds and all levels of economic status, exerting a total effort to win justice and financial 
                           damages that help you move forward in life.</p>
                        <p>For a free consultation after a fall or other injury-causing accident, call <strong>800-992-1277</strong> right now. You will pay no 
                           attorney fees at all unless we take on your case and recover financial compensation for you.</p>
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