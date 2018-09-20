@extends('layouts.app')

@section('content')

    <!-- HERO -->
    <section id="heroAttorneys"></section>

    <!-- BREADCRUMBS -->
    <section id="breadcrumb">
        <div class="container">
            <div class="col-md-12 row pl-0">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>/&nbsp;&nbsp; 
                    <li class="active">Attorneys</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Attorneys</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8 pr-5">
                    <h2>Putting Clients' Needs First Since 1979</h2>
                    <p>Based in Boca Raton, with five additional offices in the Orlando and Boca Raton areas, 
                       the lawyers of Elkins & Freedman offer experienced, highly responsive legal counsel in 
                       the areas of divorce and family law, bankruptcy and personal injury. They share a strong, 
                       enduring commitment to helping people across the cultural spectrum overcome some of life's 
                       most difficult problems.</p>
                    <h2>Attorneys You Can Trust</h2>
                    <p>Founding partners Alan J. Elkins and Richard L. Freedman are both 1978 graduates of the law 
                       school at Nova Southeastern University. Both have built accomplished track records over their 
                       three-plus decades as members of The Florida Bar, effectively handling more than 10,000 divorce 
                       cases and 15,000 bankruptcy filings. Associate Daniel C. Elkins has earned numerous honors while 
                       obtaining his undergraduate degree in business administration and then his law degree from 
                       Washington University.</p>
                </div>
                <!--Sidebar Menu-->
                <div class="col-md-4">
                    <article>
                        <div class="menuSidebar">
                            <ul class="list-unstyled">
                                <a href="alan-elkins">
                                    <li>Alan J. Elkins</li>
                                </a>
                                <a href="daniel-elkins">
                                    <li>Daniel C. Elkins</li>
                                </a>
                                <a href="richard-freedman">
                                    <li>Richard L. Freedman</li>
                                </a>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ATTORNEYS MODULE -->
    @include("inc.attorneys-module")

    <!-- SERVICES MODULE -->
    @include("inc.services-module")
@endsection
