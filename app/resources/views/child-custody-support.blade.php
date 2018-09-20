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
                    <li><a href="divorce-family-law">Divorce &amp; Family Law</a></li>/&nbsp;&nbsp; 
                    <li class="active">Child Custody &amp; Support Modifications</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Child Custody &amp; Support Modifications</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Ensuring Appropriate Support Over Time</h2>
                        <p>Have your financial circumstances or your children's needs changed substantially since your divorce? 
                           Do you believe these changes justify a change in child support, custody or other orders? The risks of 
                           waiting to take action are very serious in such situations. It is essential to speak with a knowledgeable 
                           Boca Raton lawyer for child custody modification as soon as possible.</p>
                        <h2>Reliable Counsel and Efficient Action for Post-Divorce Modifications</h2>
                        <p>At The Law Offices of Elkins & Freedman, we have helped many people navigate the legal steps necessary to 
                           modify child support orders after divorce. Since 1979, we have been treating people facing difficult family 
                           law problems just as we would want to be treated. This includes emphasizing constant responsiveness, 
                           accessibility and affordability. For a free consultation to discuss your post-divorce concerns, call or 
                           email us now.</p>
                        <h2>Child Support and Custody Modifications</h2>
                        <p>Our dedicated, personable Boca Raton child custody modification attorneys have in-depth knowledge of the 
                           standards courts throughout Florida apply when evaluating petitions for modifications. You can count on clear, 
                           accurate guidance on matters including:</p>
                        <ul>
                            <li>A child support modification made necessary by an unavoidable job loss, job change or other financial 
                               hardship — or an upward adjustment based on improved financial circumstances or children's emerging 
                               special needs</li>
                            <li>A modification of child custody and/or time sharing due to any of a range of significant changes in 
                               family circumstances, including one parent's inability to care for children</li>
                            <li>Complex issues associated with relocation of minor children, whether you are a parent in need of the 
                               court's approval to move or a parent who wants to prevent such a move</li>
                        </ul>
                        <h2>Get Post-Decree Legal Guidance You Can Trust</h2>
                        <p>We offer free initial consultations at convenient locations throughout Central and South Florida, including 
                           offices in Boca Raton and Orlando. Your post-divorce modifications lawyer will hear you out, carefully analyze 
                           your unique situation and explain your rights under Florida law. For the guidance and representation you need, 
                           call <strong>800-992-1277</strong> or <a href="contact"> contact us</a> online now.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc/divorce-sidebar")
            </div>
        </div>
        
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc/news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc/testimonials-module")
@endsection