<?php include 'header.php'; ?>

    <!--slider main-->
    <section class="main-slider">
        <div id="carousel-main" class="carousel slide gbg" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="img-wrap" style="background-image: url(images/slide-1.jpg)">
                               <!-- <img src="images/slide-1.jpg" class="img-responsive" alt="...">-->

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <div class="slider-caption">
                                <div class="valigncenter">
                                    <h2>Struggling with your essays, assignments or dissertation?</h2>
                                    <a href="" class="btn btn-pclr waves-effect ripple">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="img-wrap" style="background-image: url(images/slide-1.jpg)">
                                <!--<img src="images/slide-1.jpg" class="img-responsive" alt="...">-->

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="slider-caption">
                                <div class="valigncenter">
                                    <h2>Struggling with your essays, assignments or dissertation?</h2>
                                    <a href="" class="btn btn-pclr waves-effect ripple">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <div class="custom-carousel-nav">
                <a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>

                </a>
            </div>
        </div>
    </section>
    <!--slider main end-->

    <div class="clearfix"></div>
    <!--about home -->
    <section class="about-home text-center m30bottom">
        <div class="container">
            <div class="lg-head-before icon icon-1"></div>
            <h2 class="main-head pclr">Essay and Dissertation Writing Service</h2>
            <p class="regular">For over 10 years we’ve helped thousands of students improve their grades and boost their
                careers. <br>
                Your order will be completed to your requirements by an expert writer with a UK Degree.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="sm-head-before icon icon-2"></div>
                    <h3 class="main-head small">Fully confidential</h3>
                    <p class="light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text</p>
                </div>
                <div class="col-md-4">
                    <div class="sm-head-before icon icon-3"></div>
                    <h3 class="main-head small">Highest quality standards</h3>
                    <p class="light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text</p>
                </div>
                <div class="col-md-4">
                    <div class="sm-head-before icon icon-4"></div>
                    <h3 class="main-head small">Dedicated client support</h3>
                    <p class="light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text</p>
                </div>
            </div>
        </div>
    </section>
    <!--about home end-->

    <div class="clearfix"></div>
    <!--Statistical Facts-->
    <section class="counters grad-angled">
        <div class="man-bg"><img src="images/man.png" alt=""></div>
        <div class="container">
            <div class="rox">
                <div class="col-md-6"><img src="images/laptop.png" alt="" class="img-responsive"></div>
                <div class="col-md-6">

                    <div class="facts-wrap">
                        <h3 class="main-head large">Some Statistical Facts</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s</p>
                        <div class="row">
                            <div class="col-xs-4">
                                <h3 class="main-head large">25K</h3>
                                <p class="text-uppercase regular">Happy Customers</p></div>
                            <div class="col-xs-4">
                                <h3 class="main-head large">9083</h3>
                                <p class="text-uppercase regular">Essay Writtened</p>
                            </div>
                            <div class="col-xs-4">
                                <h3 class="main-head large">9/10</h3>
                                <p class="text-uppercase regular">Average Ratings</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Statistical Facts end-->
    <div class="clearfix"></div>

    <!--writers -->
    <section class="writers">
        <div class="container">
            <div class="text-center">
                <h2 class="main-head pclr">Our Professional Writers</h2>
                <p class="regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the <br>
                    industry's standard dummy text ever since the 1500s, when an unknown printer took</p>
            </div>
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-img z-depth-2"><img src="images/writer-<?php echo $i; ?>.jpg" alt=""
                                                             class="img-responsive radius">

                        </div>
                        <?php if ($i == 2): ?>
                            <div class="available btn btn-pclr">Avaliable</div><?php endif ?>
                        <div class="card-content">
                            <h3 class="main-head tclr">John Doe</h3>
                            <h5 class="main-head small">Specialist in Dissertation </h5>
                            <p class="light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </section>
    <!--writers end-->
    <div class="clearfix"></div>
    <!--Request a call back + FAQ-->
    <section class="rfaq gbg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="request-call">
                        <h3 class="main-head">Request Call Back</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text </p>
                        <form action="">
                            <p><input type="text" class="form-control" placeholder="How can we help?"></p>
                            <p><input type="text" class="form-control" placeholder="Your name"></p>
                            <p><input type="text" class="form-control" placeholder="Your email"></p>
                            <p>
                                <button class="btn btn-pclr waves-effect ripple">Submit</button>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="faq">


                        <h3 class="main-head pclr regular">Frequently Asked Question?</h3>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How can we help your Essay or Assignment?
                                            <span class="plus-minus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            Can I upgrade to my plan after purchase?
                                            <span class="plus-minus"></span>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            How many essays can I get from Quality Dissertation?
                                            <span class="plus-minus"></span>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Request a call back + FAQ End-->
    <!--Services-->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 glide-before-content">
                    <h4 class="main-head small">Make Quality Dissertation <br>
                        Your Dissertation Writing Service</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in</p>
                    <a href="" class="btn btn-pclr waves-effect ripple">Get Started Now</a>
                </div>
                <div class="col-md-6">

                    <div class="glide-wrap">
                        <div id="Carousel" class="glide">

                            <div class="glide__arrows">
                                <button class="glide__arrow prev" data-glide-dir="<"><i
                                            class="fa fa-long-arrow-left"></i></button>
                                <button class="glide__arrow next" data-glide-dir=">"><i
                                            class="fa fa-long-arrow-right"></i></button>
                            </div>


                            <div class="glide__wrapper">
                                <ul class="glide__track">
                                    <li class="glide__slide">
                                        <div class="box">
                                            <div class="service--icon-wrap">
                                                <div class="service-icon"><img src="images/service-icon.png" alt="">
                                                </div>
                                                <div class="services-icon-text">

                                                    <p>Begins with
                                                        <b> a strong idea</b>
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </li>
                                    <li class="glide__slide">
                                        <div class="box">

                                            <div class="service--icon-wrap">
                                                <div class="service-icon"><img src="images/service-icon.png" alt="">
                                                </div>
                                                <div class="services-icon-text">

                                                    <p>Begins with
                                                        <b> a strong idea</b>
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </li>
                                    <li class="glide__slide">
                                        <div class="box">

                                            <div class="service--icon-wrap">
                                                <div class="service-icon"><img src="images/service-icon.png" alt="">
                                                </div>
                                                <div class="services-icon-text">

                                                    <p>Begins with
                                                        <b> a strong idea</b>
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="glide__bullets"></div>

                    </div>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="about-writer-content">
                <h3 class="main-head pclr nm-top">Our Professional Writers</h3>
                <p><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        <br> industry's standard dummy text ever since the 1500s, when an unknown printer took</b>

                </p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum Letraset sheets
                    containing Lorem Ipsum passages.</p>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop </p>
            </div>
        </div>
    </section>
    <!--Services end-->

<?php include 'footer.php'; ?>