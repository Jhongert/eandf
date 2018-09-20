@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroPersonalInjury"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp;
                    <li><a href="personal-injury">Personal Injury</a></li>/&nbsp;&nbsp; 
                    <li class="active">Premises Liability: Who Is At Fault</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Premises Liability: Who Is At Fault</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>You Fall. You Call.</h2>
                        <p>Most people are aware that legal action is possible after an injury on dangerous property, but the specifics 
                           of Florida premises liability law are not widely known. If you or a family member has been injured on someone 
                           else's dangerous property, it's essential to act quickly to access a knowledgeable Boca Raton attorney for 
                           premises liability.</p>
                        <h2>Act Quickly to Prove Responsibility</h2>
                        <p>At The Law Offices of Elkins & Freedman, we know the relevant laws and all steps necessary to prove you deserve 
                           financial compensation for a personal injury on property that was unsafe.</p>
                        <p>For more than 30 years, attorneys at our firm have been earning results for our clients through diligent 
                           investigation, dynamic negotiation and proven skill in the courtroom.</p>
                        <p>Determining whether a property owner is at fault for a slip-and-fall/trip-and-fall or other type of accident is 
                           a complex matter. To win a case, you must have sustained significant injury and also be able to prove that the 
                           property owner knew about the dangerous condition, but failed to do anything about it. Please contact us as 
                           soon as possible, minimizing the opportunity for anyone to remove or conceal evidence. If you can take photos, 
                           get witnesses' phone numbers or gather evidence on your own, that can be extremely valuable as well. The longer 
                           you wait, the more difficult it may become to prove your case.</p>
                        <h2>Contact One of Our Six Florida Locations</h2>
                        <p>For people from Orlando to Coral Springs, premises liability lawyers at our firm are an invaluable resource. 
                           For a free consultation, call <strong>800-992-1277</strong> now. You will pay no attorney fees unless we pursue 
                           your case and recover compensation.</p>
                    </article>
                </div>
                <!--Sidebar-->
                @include("inc.personal-injury-sidebar")
            </div>
        </div>
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection