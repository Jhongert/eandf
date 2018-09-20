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
                    <li class="active">What Property Can I Keep?</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>What Property Can I Keep?</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>One of the biggest concerns people have about filing bankruptcy is that they are going to lose all of their 
                           property. In reality, nobody ever loses all of their property in bankruptcy. In fact, many people do not have 
                           to give up any of their property at all.</p>
                        <p>You will not know exactly what property you may lose, if any, until you discuss your case with an experienced 
                           bankruptcy lawyer. Everything depends on your specific situation. What does your debt load look like? What type 
                           of bankruptcy will you file? At The Law Offices of Elkins & Freedman, we encourage you to ask us, "What property 
                           can I keep in bankruptcy?" We will review your case and give you a clear, honest answer.</p>
                        <h2>Only Substantial Assets are in Jeopardy</h2>
                        <p>The bankruptcy court does not want every piece of your property. You will keep all personal items, clothes and 
                           so on. The only assets that are ever in jeopardy are larger, more valuable items: your home, your car, certain 
                           appliances, etc. Even these items may be kept if you are able to keep up on payments. You may have to sign a 
                           reaffirmation agreement.</p>
                        <p>The type of bankruptcy makes a difference as well. Only in Chapter 7 do people have to liquidate assets. Perhaps 
                           Chapter 13 makes more sense for you, based on your situation. This is common for people who want to stay in their 
                           home. With Chapter 13, a plan is created to repay debt over a period of time, so liquidation of assets is unnecessary.</p>
                        <h2>Should You Keep Your Property?</h2>
                        <p>Bankruptcy is a time of difficult choices. As your attorneys, we will make certain you understand all options. We 
                           will be realistic. We recognize that people typically want to keep their homes and cars, but there are times, such 
                           as after the loss of a job, that the payments involved in keeping these assets are too high for the person's current 
                           income. If that is the case, we will tell you that keeping the property now may lead to further debt problems in the 
                           future. Ultimately, the decision is yours, but we will make certain it is well-informed.</p>
                        <h2>Find Out More About Keeping Your Property in Bankruptcy</h2>
                        <p>For a free initial consultation at one of our Florida law offices, call us at <strong>800-992-1277</strong> or send 
                           us an email. We have locations in Boca Raton, Orlando and statewide.</p>
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