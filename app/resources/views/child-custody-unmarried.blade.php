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
                    <li class="active">Child Custody For Unmarried Parents</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section id="insideContent">
        <div class="container">
            <h1>Child Custody For Unmarried Parents</h1>
            <div class="row">
                <!--Main Content-->
                <div class="col-md-8">
                    <article id="serviceInsideContent">
                        <p>At The Law Offices of Elkins & Freedman, we help unmarried mothers and fathers protect their 
                           parental rights. Our lawyers are dedicated to helping you ensure a strong and continuing parental 
                           relationship with your child.</p>
                        <p>These cases can be complicated, but with decades of experience on our side, you can be confident 
                           in our ability to guide you through the process. The process starts in most cases by establishing 
                           paternity. Once paternity is established, we will help you create a child custody plan or parenting 
                           plan that is in your child's best interest.</p>
                        <h2>The Rights of Unwed Fathers</h2>
                        <p>Unmarried fathers often feel that their parental rights are being neglected. Our custody attorneys 
                           work hard to make certain that is not the case and that fathers are treated equally. The reality is 
                           that courts want to see both parents involved in the child's life. We strive to see that this ideal 
                           is put into practice in parenting plans.</p>
                        <h2>The Rights of Unwed Mothers</h2>
                        <p>Unmarried mothers often worry that their rights are going to be undermined, particularly in cases in 
                           which the child is a little older and the father has not been involved up until this point. While 
                           parenting plans that allow the child to spend time with both parents are ideal, the court takes into 
                           account the existing parental relationships. Furthermore, any history or behavior that may put the 
                           child in danger is taken very seriously. Our family law attorneys will not let the bond you have built 
                           with your child be broken.</p>
                        <h2>Contact a Trusted Lawyer</h2>
                        <p>Unmarried parents: When you contact our Boca Raton law office, Orlando law office or one of our many 
                           other Florida law offices, you will get attentive and immediate service from a lawyer who is trusted 
                           in the community. The process starts with a free consultation, which you can schedule by calling us at 
                           <strong>800-992-1277</strong> or <a href="contact">contacting us</a> via email.</p>
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