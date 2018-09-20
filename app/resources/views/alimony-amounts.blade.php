@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroDivorce2"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp;
                    <li><a href="divorce-family-law.php">Divorce &amp; Family Law</a></li>/&nbsp;&nbsp; 
                    <li class="active">Alimony Amounts</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Alimony Amounts</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Who Should Get What and for How Long?</h2>
                        <p>For many couples who divorce in Florida, whether spousal support (sometimes called alimony or "maintenance") should be paid at 
                           all is a critical issue. Even more pressing is the amount of money that will be paid or received, as well as the duration of 
                           the payments. Understanding your realistic options and identifying the right strategy demand guidance from an attorney who 
                           knows relevant laws and how they are often applied by courts throughout Florida.</p>
                        <h2>Trustworthy Experience-Based Advice</h2>
                        <p>At The Law Offices of Elkins & Freedman, our knowledgeable Boca Raton and Orlando-area alimony payment lawyers will work hard 
                           to protect your financial interests and future. Applying experience gained in more than 10,000 prior divorce cases at all 
                           levels of complexity, we will carefully analyze your situation, provide you with advice based on our experience and Florida's 
                           alimony guidelines, and propose the most effective strategy, beginning with a free consultation.</p>
                        <h2>Meticulous Investigation and Planning</h2>
                        <p>Unlike child support, which is usually a straightforward calculation covered by statutory guidelines, Florida judges have 
                           substantial discretion in ordering spousal support. Planning and preparation — sometimes including efforts to expose hidden 
                           income or consult a vocational expert, for example — are critical. We remain at the forefront of this area of law; we stay 
                           up-to-date on all potential and actual alimony reforms that pass through the Florida Legislature, and Alan Elkins – one of 
                           our firm's partners – is routinely asked to speak at seminars and conferences regarding alimony and family law reform.</p>
                        <h2>How to Determine Alimony</h2>
                        <p>Whether you are focused on obtaining a fair alimony order to sustain your lifestyle or minimizing what you must pay, we help 
                           you take all key considerations into account when deciding on a course of action in your divorce. This includes looking at all 
                           state guidelines and factors that a court will look at if you and your spouse cannot reach an agreement.</p>
                        <p>These factors include:</p>
                        <ul>
                            <li>The length of the marriage</li>
                            <li>Each spouse's respective age, health, income, education and work history</li>
                            <li>Whether one spouse worked while the other pursued higher education</li>
                            <li>Whether one parent was responsible for child care full time</li>
                            <li>All other unique aspects of your marital life and financial situation</li>
                        </ul>
                        <p>We have guided thousands of people through all steps in the divorce process, successfully resolving many complex financial disputes 
                           along the way. At Elkins & Freedman, you can count on dedicated attention from a family law attorney determined to earn the best 
                           overall divorce outcome for you. We also pursue many post-divorce modifications for alimony and other orders when justified by a 
                           major change in circumstances.</p>
                        <h2>Call Today to Discuss Your Florida Alimony Concerns</h2>
                        <p>We offer evening and weekend appointments and will pick up the phone when you call or get back to you promptly. For a helpful, 
                           confidential consultation focused on your needs, call or contact us online anytime.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc/divorce-sidebar")
            </div>
        </div>
        
    </section>

    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection