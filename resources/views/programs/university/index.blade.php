@extends('index')

@section('content')
<!-- BEGIN SECTION -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5">
        <div class="container pt-70 pb-20">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title text-white">University Mentoreship programe</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- END SECTION -->

    <!-- BEGIN UNIVERSITY -->
    <section>
            <div class="container">
              <div class="row">
                <div class="col-md-8 blog-pull-right">
                  <div class="single-service">
                    <img src="http://placehold.it/750x500" alt="">
                    <h3 class="text-theme-colored line-bottom text-theme-colored">Accounting Technologies</h3>
                    <h5><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde, <span class="text-theme-color-2">accounting technologies</span> corporis dolorum blanditiis ullam officia <span class="text-theme-color-2">our university </span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>

                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="sidebar sidebar-left mt-sm-30 ml-40">
                    <div class="widget">
                      <h4 class="widget-title line-bottom">Quick <span class="text-theme-color-2">Contact</span></h4>
                      <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post" novalidate="novalidate">
                        <div class="form-group">
                          <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email" aria-required="true">
                        </div>
                        <div class="form-group">
                          <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3" aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                          <input name="form_botcheck" class="form-control" type="hidden" value="">
                          <button type="submit" class="btn btn-theme-colored btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- END UNIVERSITY -->
@endsection
