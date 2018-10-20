@extends('index')

@section('content')

<!-- BEGIN HOME -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" style="width:100%;" src="{{asset('images/mentorship-logo.jpg')}}" alt="First slide">
        </div>
    </div>
</div>
<!-- END HOME -->


<!-- BEGIN ABOUT -->
<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h6>
                    <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">The World’s Best Education in
                        Our University</h2>
                    <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime
                        praesentium sunt udiandae!</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit
                        expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis
                        voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea
                        vitae maiores.</p>
                </div>
                <div class="col-md-6">
                    <img alt="" src="{{asset('images/group-image1.jpg')}}" class="img-responsive img-fullwidth">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- END ABOUT -->

<!-- BEGIN GALLARY -->
<section id="gallery" class="bg-lighter">
    <div class="container">
        <div class="section-title mb-10">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">Our<span class="text-theme-color-2 font-weight-400">
                            Gllery</span></h2>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-4 gutter clearfix" style="position: relative; height: 486.423px;">
                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select1" style="position: absolute; left: 0px; top: 0px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image1.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/1.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/1.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select1" style="position: absolute; left: 285px; top: 0px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image2.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/2.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/2.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select2" style="position: absolute; left: 570px; top: 0px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image3.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/3.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/3.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select3" style="position: absolute; left: 855px; top: 0px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image4.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/4.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/4.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select1" style="position: absolute; left: 0px; top: 162px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image5.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/5.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/5.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select3" style="position: absolute; left: 285px; top: 162px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image6.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/6.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/6.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select2" style="position: absolute; left: 570px; top: 162px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/group-image7.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/7.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/7.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item select3" style="position: absolute; left: 855px; top: 162px;">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset('images/pic1.jpg')}}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a data-lightbox="image" href="images/gallery/8.jpg"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="images/gallery/8.jpg">View more</a>
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END GALLARY -->

<!-- BEGIN WHY CHOOSE -->
<section id="event" class="">
    <div class="container pb-50">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="line-bottom mt-0 line-height-1">Why <span class="text-theme-color-2">Choose Us?</span></h3>
                    <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation
                        throughout Texas.The largest professional property.</p>
                    <div id="accordion1" class="panel-group accordion">
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12"
                                    class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is
                                    Best?</a> </div>
                            <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                        repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea
                                        laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12"
                                    class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is
                                    Best?</a> </div>
                            <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                        repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea
                                        laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13"
                                    class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is
                                    Best?</a> </div>
                            <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                        repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea
                                        laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14"
                                    class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is
                                    Best?</a> </div>
                            <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                        repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea
                                        laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15"
                                    class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is
                                    Best?</a> </div>
                            <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae
                                        repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea
                                        laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END WHY CHOOSE -->

<!-- BEGIN NEWS -->
<section id="blog" class="bg-lighter">
    <div class="container">
        <div class="section-title mb-10">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Latest <span class="text-theme-color-2 font-weight-400">News</span></h2>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                    <article class="post clearfix mb-sm-30">
                        <div class="entry-header">
                            <div class="post-thumb thumb">
                                <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth">
                            </div>
                        </div>
                        <div class="entry-content p-20 pr-10 bg-white">
                            <div class="entry-meta media mt-0 no-bg no-border">
                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                    <ul>
                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                    </ul>
                                </div>
                                <div class="media-body pl-15">
                                    <div class="event-content pull-left flip">
                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post
                                                title here</a></h4>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius
                                illum libero dolor nobis deleniti, sint assumenda Pariatur iste.</p>
                            <a href="#" class="btn-read-more">Read more</a>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s;">
                    <article class="post clearfix mb-sm-30">
                        <div class="entry-header">
                            <div class="post-thumb thumb">
                                <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth">
                            </div>
                        </div>
                        <div class="entry-content p-20 pr-10 bg-white">
                            <div class="entry-meta media mt-0 no-bg no-border">
                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                    <ul>
                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                    </ul>
                                </div>
                                <div class="media-body pl-15">
                                    <div class="event-content pull-left flip">
                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post
                                                title here</a></h4>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius
                                illum libero dolor nobis deleniti, sint assumenda Pariatur iste.</p>
                            <a href="#" class="btn-read-more">Read more</a>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s;">
                    <article class="post clearfix">
                        <div class="entry-header">
                            <div class="post-thumb thumb">
                                <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth">
                            </div>
                        </div>
                        <div class="entry-content p-20 pr-10 bg-white">
                            <div class="entry-meta media mt-0 no-bg no-border">
                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                    <ul>
                                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                                        <li class="font-12 text-white text-uppercase">Feb</li>
                                    </ul>
                                </div>
                                <div class="media-body pl-15">
                                    <div class="event-content pull-left flip">
                                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post
                                                title here</a></h4>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius
                                illum libero dolor nobis deleniti, sint assumenda Pariatur iste.</p>
                            <a href="#" class="btn-read-more">Read more</a>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LATEST NEWS -->

@endsection

@section('scripts')

<script>
    $('.carousel').carousel()

</script>

@endsection
