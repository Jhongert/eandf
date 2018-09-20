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
                    <li class="active">Parenting Plan</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Parenting Plan</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Laying The Foundation for Parental Cooperation</h2>
                        <p>Under a Florida law passed in 2008, every couple who divorces with minor children must enter into 
                           a parenting plan approved by the court. Although terms such as custody and visitation are still 
                           sometimes used in discussion, your parenting plan will be the groundwork for how children will divide 
                           their time between you and your ex-spouse, how responsibilities are shared and other key concerns.</p>
                        <p>At The Law Offices of Elkins & Freedman, a Boca Raton attorney for parenting plans can help you reach 
                           agreements on custody, time sharing and other divorce-related issues. While equipped to handle the most 
                           adversarial divorce cases, we are especially adept at finding strategies to establish fair parenting 
                           plans while minimizing stress and costs.</p>
                        <h2>Creating and Negotiating Fair, Workable Parenting Plans</h2>
                        <p>A parenting plan lawyer at our firm will hear you out and gain a clear understanding of what issues are 
                           most important to you and your kids. Your unique situation may call for a basic, long-distance, safety-focused 
                           or highly structured parenting plan, and attorneys at our firm have in-depth familiarity with all of these.</p>
                        <p>We will assist you in creating a parenting plan aligned with your key goals, addressing issues such&nbsp;as:</p>
                        <ul>
                            <li>Specific guidelines establishing when each child will spend time with each parent, including arrangements 
                               for vacations and holidays</li>
                            <li>How decision-making authority and practical responsibilities for schooling, health care, religious upbringing, 
                                and other matters will be allocated or shared</li>
                            <li>Special stipulations arising from either or both parents' concerns about the behavior or judgment of the other 
                                when with the children</li>
                        </ul>
                        <h2>Discuss Your Concerns with a Lawyer</h2>
                        <p>If your relationships with your children are important to you, call us at <strong>800-992-1277</strong> and schedule your free 
                           consultation. Choose the Elkins & Freedman location most convenient for you: in Orlando or one of our five other 
                           offices. We offer evening and weekend appointments, and structure affordable payment plans when needed.</p>
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