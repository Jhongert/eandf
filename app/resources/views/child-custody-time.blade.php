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
                    <li class="active">Child Custody Time Sharing</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Child Custody Time Sharing</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Careful Consideration Where Children are Involved</h2>
                        <p>Issues involving children are the single greatest concern for many people facing divorce. Mothers 
                           and fathers must carefully consider what arrangements will serve children's best interests — as that 
                           is by far the dominant objective of all Florida courts in family law matters.</p>
                        <p>Forming clear goals for custody and parenting time and deciding how to aggressively pursue them are 
                           challenges that demand counsel from an experienced attorney. At Elkins & Freedman, you will be represented 
                           by a Boca Raton attorney for child custody who has helped more than 10,000 clients navigate the complexities 
                           of divorce. We also pursue justified post-divorce modifications and address custody/parenting time challenges 
                           for unmarried parents.</p>
                        <h2>Targeting Fair, Reasonable Outcomes</h2>
                        <p>When you work with our law firm, you will understand your rights and all viable options. You will benefit 
                           from compassionate yet realistic guidance on what is achievable. The following are important considerations 
                           when determining custody and time sharing matters:</p>
                        <ul>
                            <li>Orders will be entered for both <em>residential custody</em>, determining where children will live, and 
                                <em>legal custody</em>, stipulating whether both parents are entitled to input on key decisions regarding 
                                children's education, medical care and more.</li>
                            <li>Under all but extremely adversarial circumstances, <strong>negotiating a custody agreement, visitation 
                                arrangement parenting plan that does justice to both parents' roles is far preferable to costly, stressful 
                                litigation</strong> that puts these critical decisions in the hands of a judge.</li>
                            <li>Mothers' and fathers' rights are equal under Florida law, but children's ages, whether one parent has been 
                                primary caregiver, and many other factors must be evaluated in forming a custody strategy.</li>
                        </ul>
                        <h2>Contact Florida Lawyers Who Understand What's at Stake</h2>
                        <p>We will respect how important your children are to you and focus on helping you make the best possible decisions. 
                           You can count on clear, accurate guidance on issues ranging from whether you should expect to be awarded primary 
                           residential custody to what your rights are regarding legal custody.</p>
                        <p>Our work together can begin with a free consultation. In recognition of all the pressures you face, we offer evening 
                           and weekend appointments and manageable payment plans. For personal attention and deeply experienced legal representation, 
                           please call <strong>800-992-1277</strong> or email our lawyers at any of our seven offices, including locations in Orlando 
                           and Boca Raton.</p>
                    </article>   
                </div>
                <!--Sidebar-->
                @include("inc/divorce-sidebar")
            </div>
        </div>
    </section>
    
    <!-- NEWS MODULE -->
    @include("inc.news-module")

    <!-- TESTIMONIALS MODULE -->
    @include("inc.testimonials-module")
@endsection