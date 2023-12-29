<section class="">
  <div class="container position-relative p-0 mt-90" style="max-width: 700px;">
    <h3 class="bg-theme-colored1 p-15 mb-0 text-white">Appointment Form</h3>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <!-- Reservation Form Start-->
          <form id="appointment_form_popup1" name="appointment_form" class="appointment-form" method="POST">
            <h3 class="mt-0">Get A Free Service<span class="text-theme-colored1 font-weight-600"> Now!</span></h3>
            <p class="">Lorem ipsum dolor sit amet, consectetur elit.</p>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                  <input placeholder="Enter Name" type="text" name="form_name" class="form-control required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                  <input placeholder="Email" type="text" name="form_email" class="form-control required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                  <input placeholder="Phone" type="text" name="form_phone" class="form-control required">
                </div>
              </div>
              <div class="col-sm-6">
                <select name="form_service" class="form-select required mb-sm-30">
                  <option value=""> --- Choose Service --- </option>
                  <!-- <option value="Career Counseling / Guidance">Career Counseling / Guidance</option> -->
                  <option value="Relationship and marriage Counseling">Relationship and marriage Counseling</option>
                  <option value="Stress Counseling">Stress Counseling</option>
                  <option value="Depression Counseling Gestalt Theraphy">Depression Counseling Gestalt Theraphy</option>
                  <option value="Life Coaching Counseling ">Life Coaching Counseling </option>
                  <option value=">General Counseling">General Counseling</option>
                  <option value="Grief Counseling">Grief Counseling</option>
                  <option value="Bullying/Ragging and School Refusal Counseling">Bullying/Ragging and School Refusal Counseling</option>
                </select>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                  <input name="form_date" class="form-control required date-picker" type="text" placeholder="Date">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                  <input name="form_time" class="form-control required time-picker" type="text" placeholder="Time">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="mb-3">
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                   <label>Captcha <small>*</small></label>
                  <input  type="text" name="captcha1" id="captcha1" class="form-control required" value="<?php echo rand(0000,9999); ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3 mb-30">
                   <label>Captcha <small>*</small></label>
                  <input placeholder="Enter Captcha" type="text"  name="captcha2" id="captcha2" class="form-control required">
                </div>
              </div>

              
                
              <div class="col-sm-12">
                <div class="mb-3 mb-0 mt-0">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-theme-colored1 btn-round" data-loading-text="Please wait...">Submit Now</button>
                </div>
              </div>
            </div>
          </form>
          <!-- Reservation Form End-->

          <!-- Reservation Form Validation Start-->
          <script>
            (function($) {
              $("#appointment_form_popup").validate({
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
                    $("#appointment_form_popup1").submit(function(){
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
          <!-- Reservation Form Validation Start -->
        </div>
      </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close mt-10">×</button>
  </div>
</section>



<!-- Footer Scripts -->
<script>
  //reload date and time picker
  THEMEMASCOT.initialize.TM_datePicker();
</script>