@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section id="heroDisclaimer"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp; 
                    <li class="active">Disclaimer</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Disclaimer</h1>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7">
                    <p>The information you obtain at this site is not, nor is it intended to be, legal advice. You 
                       should consult an attorney for advice regarding your individual situation. We invite you to 
                       contact us and welcome your calls, letters and electronic mail. Contacting us does not create 
                       an attorney-client relationship. Please do not send any confidential information to us until 
                       such time as an attorney-client relationship has been established.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES MODULE -->
    @include("inc.services-module")
@endsection