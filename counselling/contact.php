<?php include "require/header.php"; ?>

  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: inner-header Start -->
    <section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg7.jpg">
      <div class="container pt-90 pb-90">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Contact</h2>
              <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                <div class="breadcrumbs">
                  <span class="trail-item trail-begin">
                    <a href="index.php"><span>Home</span></a>
                  </span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="trail-item trail-end text-theme-colored1">Contact</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: inner-header End -->

    <!-- Divider: Contact -->

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-100 pb-100">
        <div class="row pt-30">
          <div class="col-md-5 col-lg-4">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Phone</h5>
                  <div class="content"><a href="tel:+123.456.7890">+91 6369 822 384</a></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-043-email-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Email</h5>
                  <div class="content"><a href="mailto:info@braintalescounseling.com">info@braintalescounseling.com</a></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
           <!--  <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-025-world"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Address</h5>
                  <div class="content">info@braintalescounseling.com</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div> -->
          <!--   <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-047-location"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">UK Address</h5>
                  <div class="content">66 Broklyn Street USA</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div> -->
          </div>
          <div class="col-md-7 col-lg-8">
            <h2 class="mt-0 mb-0">Interested in discussing?</h2>
            <br>
            <p class="font-size-20">If you're in Tamilnadu and seeking professional counseling and therapy services, we invite you to reach out to [Your Name]'s Counseling and Psychotherapy Services. Together, we can embark on a journey towards improved mental health and well-being.<br><br>

Please feel free to contact us at [Your Phone Number] or [Your Email Address] to schedule an appointment or to inquire further about our services. We look forward to supporting you on your path to a happier and healthier life.
</p>
            <!-- Contact Form -->
            <form  name="contact_form" action="" method="POST" id="reg_form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
              </div>

               <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label>Captcha <small>*</small></label>
                    <input  class="form-control required" type="text"  name="captcha1" id="captcha1" value="<?php echo rand(0000,9999); ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label>Captcha<small>*</small></label>
                    <input  class="form-control required" type="text" name="captcha2" id="captcha2" required placeholder="Enter Captcha">
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script>
              (function($) {
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              })(jQuery);




               $(document).ready(function(){
                    $("#reg_form").submit(function(){
                    var g = $("#captcha1").val();
                    var e = $("#captcha2").val();
                    if(e!=g)
                    {
                    alert("Invalid Captcha...!");
                    return false;
                    }
                    else
                    {
                     return true;
                   }
                });
              });


            </script>
          </div>
        </div>
      </div>
    </section>

    <style type="text/css">
          .form-control{
            color: red;
          }

    </style>
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <!-- Google Map HTML Codes -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd" data-tm-width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php include "require/footer.php"; ?>