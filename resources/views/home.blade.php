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
                    <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">University Mentoring Program</h2>
                    <h4 class="text-theme-colored">هو إحدى البرامج التي تقام بواسطة المركز الإرشادي السوداني (Sudan
                        mentoring center) سنويا للطلاب في المرحلة الجامعية. أًقيمت النسخة الأولى للبرنامج في ‏الفترة من
                        شهر يوليو إلى ديسمبر 2018 حيثُ كانت تمثل نسخة تقييمية تجريبية للفكرة وتيسعى المركز إلى ‏إقامته
                        بصورة دائمة بعد تشكل البرنامج في صيغته النهائية. ثم محاولة تنفيذه للطلاب في المرحلة الثانوية
                        فيما بعد. ‏يستهدف البرنامج الطلاب في المرحلة الجامعية والطلاب حديثي التخرج .‏
                        ‏- يقوم الخريج(المتدرب) بالإنضمام إلى مجتمع المركز الإرشادي ومواصلة مسار حياته في وسط مجتمع
                        تخصصي محفز ‏ومساعد للطلاب من مختلف الجامعات ومن ثم تدريبهم على أداء عملية الإرشاد بصورة فعالة
                        وتمليكهم المهارات والمعارف ‏اللازمة لذلك</h4>
                    <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="{{route('home.more')}}">تعرف أكثر →</a>
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
                    <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">معرضنا</h2>
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
                                            <a data-lightbox="image" href="{{asset('images/group-image1.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/group-image1.jpg')}}">View more</a>
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
                                            <a data-lightbox="image" href="{{asset('images/group-image2.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/group-image2.jpg')}}">View more</a>
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
                                            <a data-lightbox="image" href="{{asset('images/group-image3.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/group-image3.jpg')}}">View more</a>
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
                                            <a data-lightbox="image" href="{{asset('images/group-image4.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/group-image4.jpg')}}">View more</a>
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
                                            <a data-lightbox="image" href="{{asset('images/group-image5.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/group-image5.jpg')}}">View more</a>
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
                                            <a data-lightbox="image" href="{{asset('images/group-image6.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/group-image6.jpg')}}">View more</a>
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
                                            <a data-lightbox="image" href="{{asset('images/pic1.jpg')}}"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{asset('images/pic1.jpg')}}">View more</a>
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
                    <h3 class="line-bottom mt-0 line-height-1">لماذا أخترتنا ؟</h3>
                    <div id="accordion1" class="panel-group accordion">
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12"
                                    class="" aria-expanded="true">
                                    <span class="open-sub"></span>هل المركز السوداني الإرشادي مؤسسة ربحية؟ ?</a> </div>
                            <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>لا, يعد المركز مبادرة مجتمعية تقوم على توفير خدمات الإرشاد المختلفة للمجتمع دون
                                        الحصول على عائد ربحي يعود على المسؤولين عن المركز. وفي حالة فرض رسوم على
                                        الراغبين فإنها تُعد
                                        رسوم تسييرية للبرامج المختلفة وليست بصورة ربحية بأي صورة كانت. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13"
                                    class="" aria-expanded="true">
                                    <span class="open-sub"></span>هل جميع هذه البرامج مُفعلة حاليا؟</a> </div>
                            <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>لا , البرنامج الوحيد الذي يقوم عليه المركز في الوقت الحالي هو برنامج
                                        الإرشاد الجامعي. حيث يُقام في الفترة من نوفمبر 2018 إلى أبريل 2019</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14"
                                    class="" aria-expanded="true">
                                    <span class="open-sub"></span>من القائمين على المركز ؟</a> </div>
                            <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>يُدار المركز بواسطة مجموعة من المتطوعين في مختلف التخصصات والمراحل العمرية
                                        المختلفة. لرؤية القائمين والمساهمين في المركز
                                        الرجاء الذهاب إلى القائمة الرئيسية ثم ضغط عن المركز > فريق المركز. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15"
                                    class="" aria-expanded="true">
                                    <span class="open-sub"></span>هل للمركز شراكات؟</a> </div>
                            <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>نعم , يقوم المركز بتكوين شراكات سيتم الإعلان عنها لاحقا.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16"
                                    class="" aria-expanded="true">
                                    <span class="open-sub"></span>هل من الممكن المساهمة في المركز بأي صورة كانت؟</a> </div>
                            <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>نعم , ما عليك سوى الإتصال بأي أعضاء المركز أو مراسلتنا عبر بريدنا الإلكتروني أو صفحتنا الرئيسية وسوف يتم التواصل معك في أقل وقت ممكن.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion17"
                                    class="" aria-expanded="true">
                                    <span class="open-sub"></span>هل يتقبل المركز شراكات جديدة؟</a> </div>
                            <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                    <p>نعم , بكل تأكيد فالمركز يستعد بدوره لتقبل جميع الشراكات في مختلف التخصصات.</p>
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
