@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroFirm"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp; 
                    <li class="active">Our Firm</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Our Firm</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>30 Years of Experience Helping People Overcome Legal Issues</h2>
                        <img src="images/firm-inside-image.jpg" class="serviceImg img-fluid pt-3" alt="Divorce &amp; Family Law">
                        <p>Are you considering divorce or are you ready to file? Has your spouse filed against you, making it critical 
                            for you to get solid information and develop your own strategy?</p>
                        <p>Have you been seriously injured in a crash? Do you need help in dealing with the insurance company?</p>
                        <p>Are you struggling with debts? Are you ready to learn about your options for debt relief?</p>
                        <p>If you've answered yes to any of these questions, it's probably time to contact a lawyer. Since 1979, Elkins 
                            & Freedman has been serving clients throughout the Orlando area and South Florida, including Palm Beach County, 
                            Palm Beach Gardens, Boca Raton and more.</p>
                        <p>We consider ourselves a premier resource for people in the Orlando area and South Florida who are facing intimidating 
                            life challenges like yours. You can talk to us with confidence that your attorney will treat you with respect and offer 
                            legal counsel you can trust.</p>
                        <h3>Attorneys with Experience You Can Trust</h3>
                        <p>Attorneys Alan J. Elkins, Richard L. Freedman and Daniel C. Elkins work collaboratively, leveraging more than six 
                            decades of combined experience and perspective to find the absolute best solutions for each client. Relatively few firms 
                            in our area can rival a track record that includes more than 10,000 divorce cases, thousands of accident cases and 15,000 
                            successful bankruptcy filings.</p>
                        <h3>Your Interests Come First</h3>
                        <p>Our clients' interests lie at the heart of everything we do. We are committed to business practices that make our services 
                            accessible to all, including these:</p>
                        <ul>
                            <li>We offer a free initial consultation to address whatever challenge you are facing within our areas of focus.</li>
                            <li>Our lawyers will pick up the phone when you call or get back to you promptly in recognition of the fact that you 
                                are depending on us and need us to be constantly responsive.</li>
                            <li>We meet with clients evenings and weekends when needed, because we know that your work and family pressures may 
                                prevent you from meeting during standard business hours.</li>
                            <li>We offer payment plans and terms that make top-quality legal counsel affordable for people across the spectrum 
                                of life in South Florida.</li>
                        </ul>
                        <h3>Banish Fear and get the Facts</h3>
                        <p>Call our law firm at 800-992-1277 or contact us online to schedule your first consultation. It's on us. All local numbers 
                            are listed at the top of the page.</p>
                        <p>We are a debt relief agency. We help people file for bankruptcy relief under the Bankruptcy Code.</p>
                    </article>
                </div>
                <!--Sidebar-->
                <div class="col-md-4">
                    <!--Service Ads-->
                    <article>
                        <div class="serviceAd mt-0">
                            <img src="images/divorce-icon.svg" class="serviceAdIcon" alt="Bankruptcy">
                            <h2>Divorce &amp; Family Law</h2>
                            <hr>
                            <p>Skilled, results-driven representation in South Florida family law matters has been a pillar of...</p>
                            <a href="divorce-family-law"><button class="btn btn-lg">Learn More</button></a>
                        </div>
                        <div class="serviceAd">
                            <img src="images/bankruptcy-icon.svg" class="serviceAdIcon" alt="Bankruptcy">
                            <h2>Bankruptcy</h2>
                            <hr>
                            <p>If your debt has gotten out of control, the pressures you are facing every day and night can be...</p>
                            <a href="bankruptcy"><button class="btn btn-lg">Learn More</button></a>
                        </div>
                        <div class="serviceAd">
                            <img src="images/personal-injury-icon.svg" class="serviceAdIcon" alt="Bankruptcy">
                            <h2>Personal Injury</h2>
                            <hr>
                            <p>An accident caused by someone else's negligence can be devastating, potentially causing head injuries...</p>
                            <a href="personal-injury"><button class="btn btn-lg">Learn More</button></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ATTORNEYS MODULE -->
    @include("inc.attorneys-module")

    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection