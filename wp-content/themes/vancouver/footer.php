

 <footer class="web-site-footer">
   <div class="container">
      <div class="row">
        <div class="col-xs-6 col-lg-2">
           <div class="footer-logo">
             <a target="_blank" href="<?php the_field('xeva_logo_link', 13); ?>"><img src="<?php the_field('xeva_logo', 13); ?>" alt="logo" /></a>
             
           </div> 
        </div> <!--col-lg-6-->
        <div class="col-xs-6 col-lg-2 col-lg-offset-1 pul-right">
           <div class="footer-logo">
              <a target="_blank" href="<?php the_field('verico_logo_link', 13); ?>"><img src="<?php the_field('verico_logo', 13); ?>" alt="logo" /></a>
           </div> 
        </div> <!--col-lg-6-->
        <div class="col-xs-12 col-lg-6 col-lg-offset-1">
          <div class="table-section">
         
             
                 <div class="wrap-block"><div class="headding"><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Address:</div>
                  <div class="addres-field"><?php the_field('address', 13); ?></div></div>
                  
                 <div class="wrap-block"><div class="headding"><i class="fa fa-mobile" aria-hidden="true"></i>Phone:</div>
                  <div class="addres-field"><a href="tel:<?php the_field('phone', 13); ?>"><?php the_field('phone', 13); ?></a></div></div>
                  
                 <div class="wrap-block"><div class="headding"><i class="fa fa-envelope-o" aria-hidden="true"></i>Email:</div>
                 <div class="addres-field"><a href="mailto:<?php the_field('email', 13); ?>"><?php the_field('email', 13); ?></a></div></div>
                    

          </div>          
        </div> <!--col-xs-12 col-lg-8-->
      </div> <!--row-->
   </div> <!--container-->
   <div class="copy-right">
    <p>© <?php echo date("Y"); ?>  All Rights Reserved  |  Powered by <a target="_blank" href="<?php the_field('reas_logo_link', 13); ?>"><img src="<?php the_field('reas_logo', 13) ?>" alt="logo" /></a></p>
   </div>
 </footer> 

<div class="se-pre-con"></div>   

<?php wp_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/my-script.js"></script>
    


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.validate.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>

<script type="text/javascript">

/*jQuery(document).ready(function() {

    // initialize the plugin on DOM ready
    jQuery("#msgForm").validate({ 
        // all rules and options,
      rules: {
        city: {
          valueNotEquals: "default"
          //required: true
        }
      },

      messages: {
        city: {
          valueNotEquals: "Please select city"
          //required: "Please select city"
        }
      }

    });
});*/
</script>

<script>
jQuery(function($) {
  jQuery('#msgForm').validate({

    rules: {

      name1: {
        required: true
      },

      phone: {
        required: true,
        maxlength: 20
      },

      email: {
        required: true,
        email: true
      },

      city: {
        required: true
      }
    },

    messages: {

      name1: {
        required: "Enter Name",
      },

      phone: {
        required: "Enter Phone Number",
        maxlength: ""
      },

      email: {
        required: "Enter Email",
      },

      city: {
        required: "Please select city"
      }
    },

    submitHandler: function(form) {
      var intlNumber = jQuery("#phone").val();
      //alert(intlNumber);
          jQuery(form).ajaxSubmit({
              url: '<?php bloginfo('template_directory'); ?>/ajax/form_ajax.php', 
              //url: 'http://localhost/vancouver/wp-content/themes/vancouver/ajax/form_ajax.php', 
              type: 'post',
              data: jQuery(form).serialize(),
              //data: {data1: intlNumber},
              async: false,
              beforeSend: function() {
                jQuery("#loading_sec").show();
              },
              success: function(data) {
                jQuery("#loading_sec").hide();
                  if (data == '1')
                  {
                      jQuery("#step9").hide();
                      jQuery("#step10").show();
                      //console.log(data);
                  }
                 //alert(data);
              },
              error: function() {
                  alert('There has been an error, please alert us immediately');
              }
          });
      }
  });
});

</script>
</body>
</html>
