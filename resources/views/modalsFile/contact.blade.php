{!! Theme::asset()->add('project.js', 'assets/js/project.js') !!}
<div id="contactModal" class="contact-modal">
    <div id="loader"><img src="../../assets/img/loader.gif"/></div>
    <div class="modal-content">
        <header class="header-contact">
            <div class="container">
                <div class="greetings">
                    <h1>Get in touch</h1>
                    <p>I'll be glad to hear from you.</p>
                </div>
            </div>
        </header>
        <section id="contactMe">
            <div class="container">
                <div class="contact-container">
                    <div class="row">
                        <div class="col-lg-4 left-div">
                            <h3>Contact Information</h3>
                            <ul class="contact-info">
                                <li><i class="fa fa-map-marker"></i><span>#0164 Mendoza St. Lolomboy, Bocaue, Bulacan</span></li>
                                <li><i class="fa fa-mobile"></i>(+63) 915-150-1883</li>
                                <li><i class="fa fa-at"></i>rafraf.dc@gmail.com</li>
                            </ul>
                            <div class="social">
                                <div class="social-icons">
                                    <a href="#"><img src="../../assets/img/fb.svg"></a>
                                </div>
                                <div class="social-icons">
                                    <a href="#"><img src="../../assets/img/ig.svg"></a>
                                </div>
                                <div class="social-icons">
                                    <a href="#"><img src="../../assets/img/in.svg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 right-div">
                            <form id="contactForm">
                                {{ csrf_field() }}
                                <h3 class="text-center">Contact Me</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>first name</label><span> *</span>
                                            <input id="firstname" name="firstname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>last name</label><span> *</span>
                                            <input id="lastname" name="lastname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>email address</label><span> *</span>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>message</label>
                                            <textarea id="message" name="message" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-right">
                                    <div class="col-lg-12">
                                        <button id="send" type="button" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="close-contactModal" style="cursor:pointer">Back</a>
                </div>
        </section>
    </div>
</div>