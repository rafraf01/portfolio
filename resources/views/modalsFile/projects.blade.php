{!! Theme::asset()->add('swiper.css', 'assets/css/plugins/swiper.min.css') !!}
{!! Theme::asset()->add('swiper.js', 'assets/js/plugins/swiper.min.js') !!}
<div id="projectModal" class="prj-modal">
    <div class="modal-content">
        <div class="container">
            <aside class="close-projectModal">
                x
            </aside>
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="project-thumbnail">
                            <img src="../../assets/img/bgs.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>
            <!--<div id="project-slider" class="owl-carousel owl-theme">
                      <div class="col-lg-6">
                          <div class="thumbnail project-thumbnail">
                              <div class="thumbnail-img">
                                  <img src="../../assets/img/thumbnail.svg" class="img-responsive"/>
                              </div>
                              <div class="caption text-center">
                                  <h3>asdasdsa</h3>
                                  <p>asdasdsad</p>
                              </div>
                          </div>
                      </div>
                  <div class="item"> Your Content 2</div>
                  <div class="item"> Your Content 3</div>
                  <div class="item"> Your Content 4</div>
                  <div class="item"> Your Content 5</div>
                  <div class="item"> Your Content 6</div>
                  <div class="item"> Your Content 7</div>
                </div>
        </div>-->
    </div>
</div>