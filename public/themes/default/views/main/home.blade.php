{!! Theme::asset()->add('hover.css', 'assets/css/plugins/hover.css') !!}
{!! Theme::asset()->add('main.css', 'assets/css/main.css') !!}
{!! Theme::asset()->add('animate.css', 'assets/css/plugins/animate.min.css') !!}
{!! Theme::asset()->add('app.js', 'assets/js/main.js') !!}
{!! Theme::asset()->add('animatedmodal.js', 'assets/js/plugins/animatedModal.js') !!}

<div class="wrapper">
    <section class="intro">
        <div class="quotes">
            <p>while (!($succeed = try()));</p>
        </div>
    </section>

    <nav class="main-nav">
        <ul class="nav-content">
            <li class="about"><a id="aboutPage"  href="#animatedModal">About</a></li>
            <li><a id="workPage" href="#experienceModal">Work</a></li>
            <li><a>Contact</a></li>
        </ul>
    </nav>
@include('modalsFile.about')
@include('modalsFile.skills')
@include('modalsFile.experience')
</div>


