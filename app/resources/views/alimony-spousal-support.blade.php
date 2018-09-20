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
                    <li class="active">Alimony/Spousal Support</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Alimony/Spousal Support</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Analyzing Your Case and Protecting Your Financial Interests</h2>
                        <p>Whether spousal support (sometimes called alimony or spousal maintenance) should be awarded — and if so, how much for how long 
                           — is a serious point of dispute for many couples who divorce in South Florida. Finding the right approach to this issue requires 
                           counsel from an attorney with in-depth knowledge of the law and how it is applied in Broward County and Palm Beach County courts 
                           and throughout Central and South Florida. Guidelines for <a href="alimony-amounts">determining alimony payments</a> are more 
                           fluid and subjective than they are for child support. However, there are certain predictable elements that courts may take into 
                           consideration to reach a reasonable settlement.</p>
                        <p>At The Law Offices of Elkins & Freedman, experienced Boca Raton alimony attorneys are here to protect your interests and your 
                           financial future. We are committed to thoroughly analyzing your case and pursuing the right strategy for you, beginning with a 
                           free consultation.</p>
                        <h2>Individual Attention Before and After the Divorce</h2>
                        <p>Our lawyers have guided more than 10,000 people through the Florida divorce process, handling many intensely disputed and financially 
                           complex cases along the way.</p>
                        <p>At our law firm, you will benefit from personal attention from an attorney who recognizes all you have on the line and knows how to 
                           advocate effectively for a favorable outcome. In addition to divorce representation, we help many people pursue justified post-divorce 
                           modifications of alimony and other orders.</p>
                        <h2>Contact an Experienced Spousal Support Attorney</h2>
                        <p>We will be happy to meet with you at any of our conveniently located South and Central Florida offices, including Orlando and Boca 
                           Raton. We offer evening and weekend appointments when needed. Please call <strong>800-992-1277</strong> or contact us online now for 
                           the family law counsel you need.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc.divorce-sidebar")
            </div>
        </div>
        
    </section>

    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection