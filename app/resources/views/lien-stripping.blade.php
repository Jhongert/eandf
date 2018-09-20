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
                    <li class="active">Lien Stripping</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Lien Stripping</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Keeping Your House, Keeping Your Head Above Water</h2>
                        <p>When your home is crushed under the weight of a second or third mortgage or a lien of any other kind, it can 
                           lead to extreme financial distress. It can seem as though you will never be able to escape from an endless amount 
                           of debt, and losing your home may seem like a certainty. In reality, with the help of an experienced Boca Raton 
                           lawyer for lien stripping, you can rid yourself of these additional encumbrances — though a process known as lien 
                           stripping — and give yourself the breathing room you need to meet your financial obligations.</p>
                        <p>The attorneys at The Law Offices of Elkins & Freedman are committed to remaining on the forefront of bankruptcy 
                           and debt relief law, including emerging topics such as lien stripping. Our lien stripping lawyers serving Boca Raton, 
                           Orlando, and other cities in Central and South Florida have helped numerous clients rid themselves of liens or second 
                           mortgages that make their property unmarketable and filled their lives with endless financial stress. Our lien stripping 
                           work is a natural extension of our debt relief practice; we have helped thousands of clients and made more than 15,000 
                           successful consumer bankruptcy filings during our firm's more than 30-year&nbsp;history.</p>
                        <h2>What Does Lien Stripping Take Into Consideration?</h2>
                        <p>Lien stripping is available to consumers through Chapter 13 bankruptcy. The court will assess factors such as:</p>
                        <ul>
                            <li>How many mortgages or liens are attached to the property</li>
                            <li>Whether the property is your primary residence</li>
                            <li>The amount you owe on your primary mortgage relative to the fair market value of the home at the time of filing 
                               for bankruptcy</li>
                        </ul>
                        <p>We help you understand these and all other relevant factors that can affect your eligibility for lien&nbsp;removal.</p>
                        <h2>Explore Your Options With A Florida Lien Stripping Attorney</h2>
                        <p>To arrange a free initial consultation with one of our trusted mortgage debt relief attorneys, contact our firm at 
                           <strong>800-992-1277</strong>.</p>
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