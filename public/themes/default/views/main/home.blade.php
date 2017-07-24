{!! Theme::asset()->add('main.css', 'assets/css/main.css') !!}
{!! Theme::asset()->add('animate.css', 'assets/css/plugins/animate.min.css') !!}
{!! Theme::asset()->add('app.js', 'assets/js/main.js') !!}
{!! Theme::asset()->add('animatedmodal.js', 'assets/js/plugins/animatedModal.js') !!}

<div class="wrapper">
    <section class="intro">
        <div class="quotes">
            <p>while (!($succeed = try()));</p>
            <a href="#" class="view-project">view projects</a>
        </div>
    </section>

    <nav class="main-nav">
        <ul class="nav-content">
            <li class="about"><a id="aboutPage" href="#animatedModal">About</a></li>
            <li><a id="skillss" href="#skillModal">Projects</a></li>
            <li><a>Contact</a></li>
        </ul>
    </nav>

    <div id="animatedModal" class="about-modal">
        <div class="modal-content">
            <div class="body-content">
                <section id="closeAbout">
                    <aside class="close-animatedModal">
                        <img src="../../assets/img/close.png">
                    </aside>
                </section>
                <section id="aboutMe">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 about-me">
                            <article>
                                <h1>about me</h1>
                                <p class="about-intro">Hello, I'm John Doe a Web Developer and Frontend Developer</p>
                                <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </article>
                            <a href="#" class="cv">Download CV</a>
                            <a id="skills" href="#skillModal" class="cv">What i do</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="me">
                                <img src="../../assets/img/bg.jpeg">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--DEMO01-->
    <div id="skillModal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
        <div class="close-skillModal">
            back
        </div>

        <div class="modal-content">
            <!--Your modal content goes here-->
        </div>
    </div>
</div>


