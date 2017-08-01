{!! Theme::asset()->add('main.css', 'assets/css/main.css') !!}
{!! Theme::asset()->add('animate.css', 'assets/css/plugins/animate.min.css') !!}
{!! Theme::asset()->add('projec.js', 'assets/js/project.js') !!}
{!! Theme::asset()->add('animatedmodal.js', 'assets/js/plugins/animatedModal.js') !!}

<div id="myPortfolio">
    <section id="work">
        <div class="container">
            <div class="projct">
                <a class="view-prjct">projects<br></a><i id="arrow" class="fa fa-hand-o-down"></i>
            </div>
            <div class="row">
                <section id="closeMe" class="back-to-home">
                    <aside class="close-portfolio">
                        <img src="../../assets/img/close.png">
                    </aside>
                </section>
                <br>
                <div class="text-center heading">
                    <span class="heading-text">Experience</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="company-image">
                                <img src="../../assets/img/repub.png" class="img-responsive">
                            </div>
                            <div class="company-panel">
                                <div class="company-heading">
                                    <h4>2016 - 2017</h4>
                                    <h4>Republisys Inc.</h4>
                                </div>
                                <div class="company-body">
                                    <p class="text-muted">
                                        Junior Software Developer<br><br>
                                        Perform duties as a frontend and backend developer in selected projects. Develop web-based applications using PHP with Laravel Framewok. Plan, coordinate and execute front-end and back-end requirements
                                        given by the client.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="company-reverse">
                            <div class="company-image">
                                <img src="../../assets/img/repub.png" class="img-responsive">
                            </div>
                            <div class="company-panel">
                                <div class="company-heading">
                                    <h4>2014 - 2016</h4>
                                    <h4>Republisys Inc.</h4>
                                </div>
                                <div class="company-body">
                                    <p class="text-muted">
                                        Computer Programmer<br><br>
                                        Official member of company's website committee. Performed system level testing to verify software quality and modified existing application to correct errors and adapt to new software to improve performance. Provided backend support for one of the project given.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="company-image heartbeat">
                                <a id="hireMe" href="#contactModal">
                                    <h4>Hire<br>me<br>now!</h4>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="parallax">
        <div class="parallax">
            <p class="quote text-center">Success is the result of perfection, hard work, learning from failure, loyalty and persistence.</p>
            <p class="writer text-center">- Colin Powell</p>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <div class="row text-center">
                <span class="heading-text" style="margin-top:10px;">Project</span>
            </div><br>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a class="thumbnail-hover" href="/project/{{$project->id}}" data-img-id="{{$project->id}}">
                            <div class="to-hover">
                                <div class="search-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            @if ($project->id == 1)
                            <img src="../../assets/img/papers/papersllc.jpg">
                            @elseif ($project->id == 2)
                            <img src="../../assets/img/papers/lc-main.jpg"/>
                            @else
                            <img src="../../assets/img/comingsoon.jpg"/>
                            @endif
                        </a>
                        <div class="caption text-center">
                            <h3>{{ $project->project_title }}</h3>
                            <p>{{ $project->sub_title }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@include('modalsFile.contact')