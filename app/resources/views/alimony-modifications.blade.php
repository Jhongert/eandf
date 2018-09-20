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
                    <li class="active">Alimony Modifications</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Alimony Modifications</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Changing Orders to Reflect Changed Circumstances</h2>
                        <p>If your financial situation, your ex-spouse's income, children's needs or certain other 
                           circumstances have changed substantially since your divorce, you may be eligible to obtain 
                           an appropriate post-judgment modification. Many orders can be modified under Florida law, 
                           including those for alimony or spousal support. Petitions for modifying spousal support in 
                           Boca Raton will have the best chance of success if they are drafted by an experienced attorney 
                           -versed in Florida family law and divorce.</p>
                        <h2>Responsive Attorneys with Decades of Experience</h2>
                        <p>At Elkins & Freedman, our attorneys provide you with the trusted advice and reliable guidance 
                           you need when seeking a modification to an alimony order. Orlando post-divorce modifications 
                           lawyers at our firm have helped many thousands of people make sound decisions and navigate the 
                           legal system effectively since 1979. We will recognize the urgency of your concerns, stay 
                           constantly responsive and treat you as we would want to be treated. You can talk to us openly 
                           and confidently about your situation, and you will always have a trusted advocate to run to when 
                           you need it the most.</p>
                        <p>We will provide a free consultation focused squarely on your needs.</p>
                        <h2>What Qualifies as a Substantial Change of Circumstance?</h2>
                        <p>The main question that must be asked in alimony modification situations is whether there has been 
                           a significant change in your financial situation or that of your former spouse. Often, this change 
                           takes the form of an unavoidable job loss, financial setback, illness or injury, or unforeseen 
                           medical or developmental needs that arise for your child. We will fully assess your situation and 
                           help you determine whether or not you qualify for a modification.</p>
                        <h2>Call an Attentive Florida Alimony Modifications Lawyer</h2>
                        <p>Divorce decree modifications are often within reach, but careful evaluation of your individual 
                           circumstances is essential. So is working with lawyers who know what evidence the court will need 
                           to approve your petition. For the personalized counsel you need, call <strong>800-992-1277</strong> 
                           or contact our Orlando alimony modification attorneys online now.</p>
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