{!! Theme::asset()->add('main.css', 'assets/css/main.css') !!}
{!! Theme::asset()->add('animate.css', 'assets/css/plugins/animate.min.css') !!}
{!! Theme::asset()->add('app.js', 'assets/js/main.js') !!}
{!! Theme::asset()->add('animatedmodal.js', 'assets/js/plugins/animatedModal.js') !!}

<div id="projectModal" class="prj-modal">
    <section id="closeMe" class="back-to-home">
        <a href="/portfolio">
            <aside class="close-portfolio">
                <img src="../../assets/img/close.png">
            </aside>
        </a>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="modal-body">
                    <h1 class="text-center" id="projectTitle">{{ $getProject->project_title}}</h1>
                    <p class="desc text-center">Web Application + Mobile View Application</p>
                    <figure>
                        <img src="{{$getProject->file}}" class="img-responsive img-centered">
                    </figure>
                    <p class="details">
                        PapersLLC is an online boarding for asylum and illegal immigrant in US particularly in California. The main focus of the development is to create an automated workflow process manager that will help the client to
                        reduce the administrative work done by a manual and/or disparate intake process for CARACEN and its affiliated agencies.
                        To lower the time spent in scheduling appointments, answering case status from clients and assisting clients in
                        gathering supporting documents before the initial consultation appointment is conducted.
                    </p>
                    <p class="text-center" style="margin-top:30px;">
                        Visit PapersLLC <a href="">here.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>