<div id="experienceModal" class="exp-modal">
    <div class="modal-content">
       <section id="work">
           <div class="container">
               <div class="proj">
                   <a class="view-prjct">projects<br></a><i id="arrow" class="fa fa-hand-o-down"></i>
               </div>
               <div class="row">
                   <section id="closeMe">
                       <aside class="close-experienceModal">
                           <img src="../../assets/img/close.png">
                           <img>
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
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
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
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                                       </p>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <div class="company-image heartbeat">
                                  <h4>Hire<br>me<br>now!</h4>
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
                            <a class="thumbnail-hover" href="#projectModal">
                                <div class="to-hover">
                                    <div class="search-icon">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                                <img src="../../assets/img/bgs.jpg" data-img-id="{{$project->id}}"/>
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
</div>
@include('modalsFile.projects')