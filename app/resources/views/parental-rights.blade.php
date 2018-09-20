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
                    <li class="active">Parental Rights</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Parental Rights</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Prioritizing Children's Best Interests</h2>
                        <p>Where children will live and how they will divide their time are the greatest concerns for many mothers 
                           and fathers facing divorce. At Elkins & Freedman, we will help you understand your rights and explore all 
                           realistic options related to custody and visitation. We keep you focused on your children's best interests, 
                           since that is what is most important and will be the clear priority of the Florida court that issues orders 
                           in your case.</p>
                        <p>Our Boca Raton parental rights lawyers are committed to helping clients throughout Florida establish viable 
                           goals for custody and parenting time and the best strategy for achieving them through negotiation, mediation 
                           or litigation. In terms of child support, our lawyers will explain the guidelines, address any special 
                           considerations, and help you accurately project what you will pay or receive. In all cases, we aim to protect 
                           both mothers' rights and fathers' rights, and help you establish a situation that will help you and your 
                           children move forward with your lives after a divorce.</p>
                        <h2>Practical Solutions for Emotional Issues</h2>
                        <p>The attorneys at our law firm have advised and advocated for more than 10,000 clients coping with Florida 
                           divorce. We also frequently help men and women assert their rights and protect their interests through 
                           post-divorce modifications in situations involving a substantial change in circumstances. Our practical, 
                           nonjudgmental family lawyers also help unmarried parents resolve issues associated with parental rights 
                           related to paternity, custody, time sharing and financial support.</p>
                        <p>We help you understand all of the issues that can impact your case, including the fact that:</p>
                        <ul>
                            <li>Mothers and fathers have equal rights under the law, but many factors must be evaluated in setting 
                                realistic, achievable objectives for custody and time sharing.</li>
                            <li>Custody rights will be formally established by an order for residential custody. This will determine 
                                where children will live, and whether input on key decisions regarding children's upbringing will be 
                                shared between the parents.</li>
                            <li>Under all but extreme circumstances, formalizing parental rights and obligations through a mutually 
                                acceptable custody agreement and parenting plan is a far better solution than engaging in a costly, 
                                stressful dispute and putting these decisions in the hands of the court.</li>
                        </ul>
                        <h2>Access a Practical Voice in a Turbulent Time</h2>
                        <p>We encourage you to contact us for a free consultation focused on the most important issues for you. We offer 
                           evening and weekend appointments and manageable payment plans to help ensure our services are manageable and 
                           affordable for you. Please call <strong>800-992-1277</strong> or reach out to us online today. We have six 
                           convenient locations, including offices in Orlando and Boca Raton.</p>
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