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
                    <li class="active">Relocation of Minor Children</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Relocation of Minor Children</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <h2>Are You up for Long-Distance Parenting?</h2>
                        <p>Life after a Florida divorce with children can present many challenges and tough decisions. Among the 
                           most complex is a custodial parent's desire to move away with a child, far enough that this move may 
                           disrupt the other parent's rights to time sharing and sustained contact. Whether you are considering 
                           moving with children or seeking to prevent the other parent from making such a move, you need dependable 
                           legal information and guidance from a Boca Raton attorney for child relocation to help defend your rights.</p>
                        <h2>Resolving Conflicts Amicably if Possible, Aggressively if Needed</h2>
                        <p>At Elkins & Freedman, a child relocation lawyer with experience handling all types of parental disputes 
                           in Boca Raton, Orlando, and surrounding communities will thoroughly analyze your situation. We understand 
                           the pressures our clients face and dedicate our efforts to resolving divorce and family law problems as 
                           amicably and affordably as possible. However, we are also dedicated to skilled, aggressive protection of 
                           your most important relationships by whatever legal means necessary.</p>
                        <h2>Weighing the Consequences of a Move</h2>
                        <p>It is critical to recognize that judges in Florida family courts focus primarily on serving children's best 
                           interests in relocation and removal proceedings. A parent's desire to move for his or her own convenience or 
                           other personal goals is not sufficient if the other objects. <strong>There is a specific, detailed Florida 
                           statute covering parent and child relocation when court orders are in place.</strong> Key considerations in 
                           your case may include:</p>
                        <ul>
                            <li>Whether the proposed move-away — often for purposes of employment, education or proximity to other family 
                                members — is supported by sound reasons and likely to be beneficial for children</li>
                            <li>Whether the mother and father can communicate effectively and come to an agreement on a plan that keeps 
                                both of them involved in children's lives</li>
                            <li>What modifications to other orders are appropriate and justified if distance from children will make time 
                                sharing more challenging and costly</li>
                        </ul>
                        <h2>Seek Court Approval Before a Move. Contact Us Today to Discuss Your Options.</h2>
                        <p>Moving children without the appropriate court's approval can lead to the parent being held in contempt and 
                           ordered to return. Criminal charges are also possible. On the other hand, the decision to contest a relocation 
                           petition must be made in a timely fashion and with solid grounds. To discuss your specific circumstances and 
                           the best strategy for you, schedule a free consultation with an attorney in Orlando or at one of our five other 
                           South or Central Florida offices today.</p>
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