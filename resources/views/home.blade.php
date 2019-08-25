@extends('layout.homelayout')

@section('title', 'Korntatan Home')

@section('homeNav')
<li class="nav-item active">
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span> </a>
</li>
@endsection


@section('showcase')
<li class="nav-item">
    <a class="nav-link" href="/showcase">Show Case</a>
</li>
@endsection

@section('logo')
<img class="d-block mx-auto mb-4" src="{{ url('/public/storage/images/cover.png') }}" alt="Korntatan Kulkirti">
<h3>"Everything I do, I do it with all my best."</h3>
@endsection
@section('beginIntro')
<h1>Hi there, My name is Tik. </h1>
<h4>I'm a hardworking guy who give my utmost effort to get the job done!!</h4>
</div>
<div>
    <p>It is almost a decade since I has been on journey to searching for a career that right for me.
        Many skill I've been aquired, such as IT support, web developer with HTML, CSS, PHP and also Android (JAVA)
        an ERP Implementer and also other field like sale, Marketing, Electronic Technician, Teacher and finally found
        what I'm looking for,
        And now the career caught my attention is
        <span class="text-primary text-center"> Solution architech.</span> This is what am I currently working on
        improve my self to be capable of.</p>
    <p>I've been working as an ERP Implementer for 2 years. What I do is Implementation the ERP software that developed by
        company I'm currently working on.</p>
    <span class="bg-danger">Here Is I do</span><BR>
    - ERP Implementer
    <BR> - Software Pre-Sale & Presentation
    <BR> - Analyze and Problems solving
    <BR> - Onsite Customer training
    <BR> - Analyze customer requirement for implement software to meet customer need
    <BR> - Basic Accounting
    <BR> - IT Technical Support & Maintenance
    <BR> - Client System Upgrades Counsel
    <BR> - Basic Android Development
    <BR> - Operating System Installation Support and Software Application Installation and Upgrades
    <BR> - Basic of Lan & Wireless Network Installation
    <BR>
    <p></p>
    @endsection
    @section('alllogo')
    <div class="text-center">
        <img class="alllogo_img" src="{{ url('/public/storage/images/github.svg') }}" height="151" width="151" alt="Result image of Github" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/laravel.png') }}" height="151" width="151" alt="Result image of Laravel" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/php.svg') }}" height="151" width="151" alt="Result image of  PHP" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/htmlcss.png') }}" height="151" width="151" alt="Result image of HTML & CSS" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/mysql.png') }}" height="151" width="302" alt="Result image of Android" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/android.png') }}" height="151" width="151" alt="Result image of Android" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/photoshop.png') }}" height="151" width="151" alt="Result image of Android" data-atf="1">
        <img class="alllogo_img" src="{{ url('/public/storage/images/ai.png') }}" height="151" width="151" alt="Result image of Android" data-atf="1">
    </div>
    @endsection
    @section('beginIntro2')
    <p> I do some Web Programming with framework like Codeignite and Laravel, including Android Developement (JAVA).<BR>
        With all these IT skill combine with analytical skill, problem-solving skill and knowledge on business and
        accounting, I think, It's make me fit to this job perfectly.
        Although that my programming skill is still on some where between Junior and Senior, but I'm on perpetually
        working on improving it,
        as I made this website to show you my improvement. <BR>(It's Laravel. You can see my Github on the left of this
        screen)</p>
    <p>I'm quietly confident, naturally curious , ambitious and a very straight forward person.
        Pay attention to any information of new technology is a major part of my life and so I spend most of time after
        work for reading and searching
        new skill.<BR></p>
    <p> If you think I'm the right person and want to have a conversation with me, please contact me from email or
        mobile phone found on the link <span class="bg-primary">Linkedin</span> from the left of this screen
        I'll response your in shortly (I apologize for not put my email link on directly. It incrediblely hard to avoid
        spam these days. I'll find the better way soon.)
    </p>
    @endsection
@section('footer')
<div class="text-center">Here I am, Still working on improving myself in 2019, Continue on and on</div>
@endsection