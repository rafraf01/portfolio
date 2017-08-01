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
                    <h1 class="text-center wow lightSpeedIn" id="projectTitle">{{ $getProject->project_title}}</h1>
                    <p class="desc text-center wow lightSpeedIn">{{ $getProject->sub_project_desc }}</p>
                    <figure>
                        <img src="{{$getProject->file}}" class="img-responsive img-centered">
                    </figure>
                    <p class="details wow lightSpeedIn">
                       {{ $getProject->description }}
                    </p>
                    <p class="text-center wow lightSpeedIn" style="margin-top:30px;">
                       Visit {{$getProject->project_title}} <a href="">here</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>