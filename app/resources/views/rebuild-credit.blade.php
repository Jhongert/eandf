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
                    <li class="active">Rebuild Credit After Filing Bankruptcy</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Rebuild Credit After Filing Bankruptcy</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>There is a myth that filing bankruptcy destroys a person's credit. Unfortunately, this myth has prevented 
                           many people in Boca Raton, Orlando and throughout Florida from obtaining the debt relief they need. The 
                           truth is that you can get credit after filing bankruptcy.</p>
                        <h2>Understand How Bankruptcy Really Impacts Your Credit Score</h2>
                        <p>If you are considering bankruptcy, it is likely that your credit score has already been damaged. It will 
                           likely incur further damage if you allow your debt problems to continue. While filing bankruptcy does have 
                           an impact on your credit score, it is temporary. Furthermore, it eliminates the debt problems that would 
                           have had a further negative impact.</p>
                        <p>In reality, filing bankruptcy is the first step to turning your credit score around. You will have your debt 
                           problems out of the way so you can begin rebuilding. At The Law Offices of Elkins & Freedman, we consider 
                           ourselves bankruptcy lawyers and credit repair lawyers. This is because we will not simply walk away from 
                           your case after we have filed bankruptcy on your behalf. We will offer guidance on how to rebuild credit 
                           after bankruptcy.</p>
                        <p>Many of the things that can be done to rebuild credit after bankruptcy are common sense. We will encourage 
                           you to pay your bills in a timely manner. When you start to get credit card offers, and people are often 
                           surprised at how soon they arrive after filing bankruptcy, we may make suggestions about whether or not 
                           you should apply. The fact is that one of the keys to improving credit is simply making scheduled payments, 
                           and of course that requires something to make payments on, such as a small, reasonable credit card balance.</p>
                        <h2>Do Not Let Credit Score Concerns Stop You From Filing Bankruptcy</h2>
                        <p>Let our attorneys review your case and give you honest answers about your credit score and how bankruptcy will 
                           impact it. For a free initial consultation at one of our Florida law offices, call us at <strong>800-992-1277</strong>
                           or send us an email.</p>
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