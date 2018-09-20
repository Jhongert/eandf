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
                    <li class="active">Bankruptcy Means Test</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Bankruptcy Means Test</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Do You Qualify For Chapter 7?</h2>
                        <p>In 2005, the Bankruptcy Abuse Prevention and Consumer Protection Act of 2005 was passed at the federal level. 
                           One of the most significant changes this brought about was the introduction of a "means test" to assess an 
                           individual's eligibility to file for Chapter 7 bankruptcy. Relevant factors in your case will include your 
                           "disposable monthly income" relative to the median income in&nbsp;Florida.</p>
                        <p>You can trust the Boca Raton and Orlando-area attorneys at Elkins & Freedman for reliable information about 
                           whether debt relief through bankruptcy is available and right for you. Please do not be deterred by myths and 
                           misconceptions that indicate qualifying for Chapter 7 bankruptcy is more difficult than it has been in the past. 
                           Get the debt relief counsel you need now, rather than struggling while your situation becomes worse.</p>
                        <h2>What Does A Means Test Measure?</h2>
                        <p>We will explain what is involved with the means test for bankruptcy and find the best solution for you, applying 
                           past experience helping more than 15,000 clients file bankruptcy and get the debt relief they so badly needed. 
                           Important things to understand about the bankruptcy means test&nbsp;include:</p>
                        <ul>
                            <li>Disposable income calculations are based on a six-month period, and specific monthly expenses can be deducted.</li>
                            <li>On numerous occasions, we have uncovered nuances of our clients' unique financial situations that enable them to file 
                                Chapter 7 bankruptcy, even though other lawyers have advised them that a Chapter 13 payment plan was the only option.</li>
                        </ul>
                        <h2>Call to Discuss a Chapter 7 Means Test</h2>
                        <p>From convenient, accessible offices in South and Central Florida, bankruptcy means test lawyers at our firm will treat 
                           you with respect and spell out your options. We welcome people who are facing all kinds of personal and financial challenges, 
                           and you do not have to worry about being intimidated or pressured. Let's find the best solution for you, beginning with a 
                           free consultation at a time and place that works for you.</p>
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
