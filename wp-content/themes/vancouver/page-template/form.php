<?php 
/*
Template Name: Form Template
*/
?>

    <?php get_header(); ?>

<form id="msgForm" action="" method="post">
  <section class="step-block" id="step">
    <div class="container"> 
      <h1>Purchase or refinance</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img00.jpg" alt="img00" />
          <div class="bottom-strpe">Purchase</div> 
          <input type="radio" name="p_or_r" value="Purchase" onclick="next1();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          
            <img src="<?php echo get_template_directory_uri(); ?>/images/img01.jpg" alt="img01" />
            <div class="bottom-strpe">Refinance</div> 
            
            <input type="radio" name="p_or_r" value="Refinance" onclick="next1();">
          
        </div>
        </label>
      </div>
    </div>
    <!--<a class="previos-icon" href=""><i aria-hidden="true" class="fa fa-angle-left"></i></a>-->
     <a class="next-icon" onclick="next1();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>

<!-- **************************************** Step1 START ***************** -->
  <section class="step-block" style="display:none" id="step1">
    <div class="container"> 
      <h1>The property will be used for ?</h1>
     <div class="row"> 
      <div class="col-xs-4">
        <label class="btn">
          <div class="boxes">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img02.jpg" alt="img02" />
            <div class="bottom-strpe">Primary Residence</div> 
            <input type="radio" name="piv" value="Primary Residence" onclick="next2();">
          </div>
        </label>
      </div>
      
      <div class="col-xs-4">
        <label class="btn">
          <div class="boxes">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img03.jpg" alt="img03" />
            <div class="bottom-strpe">Investment Property</div> 
            <input type="radio" name="piv" value="Investment Property" onclick="next2();">
          </div>
      </label>
      </div>
      
      <div class="col-xs-4">
        <label class="btn">
          <div class="boxes">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img04.jpg" alt="img04" />
            <div class="bottom-strpe">Vacation Property</div> 
            <input type="radio" name="piv" value="Vacation Property" onclick="next2();">
          </div>
      </label>
      </div>
    </div>
     <a class="previos-icon" onclick="next2back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next2();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>

  <!-- ********************* Step1 END ***************** -->

<!-- *********************** Step2 START *************** -->
  <section class="step-block" style="display:none" id="step2">
    <div class="container"> 
      <h1>How is your credit score ?</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img05.jpg" alt="img05" />
          <div class="bottom-strpe">Amazing 720 +</div> 
          <input type="radio" name="credit_score" value="Amazing 720 +" onclick="next3();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img06.jpg" alt="img06" />
          <div class="bottom-strpe">Good 680-720</div> 
          <input type="radio" name="credit_score" value="Good 680-720" onclick="next3();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img07.jpg" alt="img07" />
          <div class="bottom-strpe">Fair 640-680</div> 
          <input type="radio" name="credit_score" value="Fair 640-680" onclick="next3();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img08.jpg" alt="img08" />
          <div class="bottom-strpe">Need a bit of fixing -640</div> 
          <input type="radio" name="credit_score" value="Need a bit of fixing -640" onclick="next3();">
        </div>
        </label>
      </div>
      
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img09.jpg" alt="img09" />
          <div class="bottom-strpe">Unsure</div> 
          <input type="radio" name="credit_score" value="Unsure" onclick="next3();">
        </div>
        </label>
      </div>
      
    </div>
     <a class="previos-icon" onclick="next3back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next3();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>
<!-- *********************** Step2 END ***************** -->

<!-- ********************** Step3 START **************** -->
  <section class="step-block" style="display:none" id="step3">
    <div class="container"> 
      <h1>First time home buyer ?</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg" alt="img10" />
          <div class="bottom-strpe">Yes</div> 
          <input type="radio" name="first_time" value="Yes" onclick="next4();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img11.jpg" alt="img11" />
          <div class="bottom-strpe">No</div> 
          <input type="radio" name="first_time" value="No" onclick="next4();">
        </div>
        </label>
      </div>
      
    </div>
     <a class="previos-icon" onclick="next4back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next4();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>
<!-- ******************** Step3 END *************** -->

<!-- ********* Step4 START *********** -->
  <section class="step-block" style="display:none" id="step4">
    <div class="container"> 
      <h1>Estimated purchase price</h1>
     <div class="row"> 
       <div class="col-md-8 col-md-offset-2">
        <select id="basic" class="custom-select-box selectpicker form-control" name="estimated">

              <option value="$100,000 - $149,000">$100,000 - $149,000</option>
              <option value="$150,000 - $199,000">$150,000 - $199,000</option>
              <option value="$200,000 - $249,000">$200,000 - $249,000</option>
              <option value="$250,000 - $299,000">$250,000 - $299,000</option>
              <option value="$300,000 - $349,000">$300,000 - $349,000</option>
              <option value="$350,000 - $399,000">$350,000 - $399,000</option>
              <option value="$400,000 - $449,000">$400,000 - $449,000</option>
              <option value="$450,000 - $499,000">$450,000 - $499,000</option>
              <option value="$500,000 - $549,000">$500,000 - $549,000</option>
              <option value="$550,000 - $599,000">$550,000 - $599,000</option>
              <option value="$600,000 - $699,000">$600,000 - $699,000</option>
              <option value="$700,000 - $799,000">$700,000 - $799,000</option>
              <option value="$800,000 - $899,000">$800,000 - $899,000</option>
              <option value="$900,000 - $999,000">$900,000 - $999,000</option>
              <option value="$1,000,000 - $1,199,000">$1,000,000 - $1,199,000</option>
              <option value="$1,200,000 - $1,299,000">$1,200,000 - $1,299,000</option>
              <option value="$1,300,000 - $1,399,000">$1,300,000 - $1,399,000</option>
              <option value="$1,400,000 - $1,499,000">$1,400,000 - $1,499,000</option>
              <option value="$1,500,000 - $1,599,000">$1,500,000 - $1,599,000</option>
              <option value="$1,600,000 - $1,699,000">$1,600,000 - $1,699,000</option>
              <option value="$1,700,000 - $1,799,000">$1,700,000 - $1,799,000</option>
              <option value="$1,800,000 - $1,899,000">$1,800,000 - $1,899,000</option>
              <option value="$1,900,000 - $1,999,000">$1,900,000 - $1,999,000</option>
              <option value="Over $2,000,000">Over $2,000,000</option>                
            
        </select>
        
        <a class="btn btn-default btn-continue" onclick="next5();">continue</a>
        
      </div>
      
    </div>
     <a class="previos-icon" onclick="next5back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next5();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>

<!-- ********* Step4 END ************* -->

<!-- ********* Step5 START *********** -->
  <section class="step-block" style="display:none" id="step5">
    <div class="container"> 
      <h1>Down payment size ?</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img12.jpg" alt="img12" />
          <div class="bottom-strpe">5%</div> 
          <input type="radio" name="down_pay" value="5%" onclick="next6();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img13.jpg" alt="img13" />
          <div class="bottom-strpe">10%-15%</div> 
          <input type="radio" name="down_pay" value="10%-15%" onclick="next6();">
        </div>
        </label>
      </div>
      
       <div class="col-xs-4">
       <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img14.jpg" alt="img14" />
          <div class="bottom-strpe">20%-25%</div> 
          <input type="radio" name="down_pay" value="20%-25%" onclick="next6();">
        </div>
        </label>
      </div>
      
       <div class="col-xs-4">
       <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img15.jpg" alt="img15" />
          <div class="bottom-strpe">30%-35%</div> 
          <input type="radio" name="down_pay" value="30%-35%" onclick="next6();">
        </div>
        </label>
      </div>
      
    </div>
     <a class="previos-icon" onclick="next6back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next6();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>
<!-- ********* Step5 END *********** -->

<!-- ********** Step6 START ******** -->
  <section class="step-block" style="display:none" id="step6">
    <div class="container"> 
      <h1>Home buying stage</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img16.jpg" alt="img16" />
          <div class="bottom-strpe">Start looking</div> 
          <input type="radio" name="buying_stage" value="Start" onclick="next7();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img17.jpg" alt="img17" />
          <div class="bottom-strpe">Found a property</div> 
          <input type="radio" name="buying_stage" value="Found" onclick="next7();">
        </div>
        </label>
      </div>
      
       <div class="col-xs-4">
       <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img18.jpg" alt="img18" />
          <div class="bottom-strpe">Have an accepted offer</div> 
          <input type="radio" name="buying_stage" value="accepted" onclick="next7();">
        </div>
        </label>
      </div>
      
    </div>
     <a class="previos-icon" onclick="next7back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next7();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>
<!-- ********** Step6 END *********** -->

<!-- ********** Step7 START *********** -->
  <section class="step-block" style="display:none" id="step7">
    <div class="container"> 
      <h1>Time frame for purchase</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img19.jpg" alt="img16" />
          <div class="bottom-strpe">0 – 30 days</div> 
          <input type="radio" name="time_frame" value=">0 – 30 days" onclick="next8();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img20.jpg" alt="img17" />
          <div class="bottom-strpe">30-90 DAYS</div> 
          <input type="radio" name="time_frame" value="30-90 DAYS" onclick="next8();">
        </div>
        </label>
      </div>
      
       <div class="col-xs-4">
       <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img21.jpg" alt="img18" />
          <div class="bottom-strpe">90-180 DAYS</div> 
          <input type="radio" name="time_frame" value="90-180 DAYS" onclick="next8();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img22.jpg" alt="img18" />
          <div class="bottom-strpe">No sure</div> 
          <input type="radio" name="time_frame" value="No sure" onclick="next8();">
        </div>
        </label>
      </div>
      
    </div>
     <a class="previos-icon" onclick="next8back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next8();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>
<!-- ********** Step7 END *********** -->

    <!-- ********** Step8 START *********** --> 
  <section class="step-block" style="display:none" id="step8">
    <div class="container"> 
      <h1>Do you have an agent ?</h1>
     <div class="row"> 
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img23.jpg" alt="img16" />
          <div class="bottom-strpe">Yes</div> 
          <input type="radio" name="agent" value="Yes" onclick="next8new();">
        </div>
      </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img24.jpg" alt="img17" />
          <div class="bottom-strpe">No</div> 
          <input type="radio" name="agent" value="No" onclick="next8new();">
        </div>
        </label>
      </div>
 
    </div>
     <a class="previos-icon" onclick="next8newback();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next8new();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>

    <!-- ********** Step8 END *********** --> 

    <!-- ********** Step8 New START *********** --> 
    
  <section class="step-block" style="display:none" id="step8new">
    <div class="container"> 
      <h1>Do you want us to recommend someone ?</h1>
     <div class="row"> 

       <div class="col-xs-4">
       <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img25.jpg" alt="img18" />
          <div class="bottom-strpe">Yes</div> 
          <input type="radio" name="recommend" value="Yes" onclick="next9();">
        </div>
        </label>
      </div>
      
      <div class="col-xs-4">
      <label class="btn">
        <div class="boxes">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img26.jpg" alt="img18" />
          <div class="bottom-strpe">No</div> 
          <input type="radio" name="recommend" value="No" onclick="next9();">
        </div>
        </label>
      </div>
      
    </div>
     <a class="previos-icon" onclick="next9back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <a class="next-icon" onclick="next9();"><i aria-hidden="true" class="fa fa-angle-right"></i></a>
   </div> 
  </section>

    <!-- ********** Step8 New END *********** --> 

    <!-- ********** Step9 START *********** --> 
  <section class="step-block" id="step9" style="display:none">
    <div class="container"> 
     
      <h1>Where do you want us to send you the pre approval ?</h1>
     <div class="row"> 
       <div class="col-lg-8 col-lg-offset-2">
        <div class="form-info"> 
         <div class="row">
           <div class="col-xs-12 col-sm-6">
            <span class="icon user"></span> 
             <input type="text" class="form-control" placeholder="Name" id="name" name="name1">
           </div> <!--col-xs-12 col-sm-6-->
           <div class="col-xs-12 col-sm-6">
            <span class="icon fa fa-mobile"></span> 
             <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
           </div> <!--col-xs-12 col-sm-6-->
            <div class="col-xs-12">
            <span class="icon fa fa-envelope-o"></span> 
             <input type="text" class="form-control" placeholder="Email" id="email" name="email">
           </div> <!--col-xs-12-->
            <div class="col-xs-12">
            <span class="icon campas"></span> 
             <!--select id="basic" class="custom-select-box selectpicker form-control" name="city"-->
             <select id="basic" class="custom-select-box form-control selectpicker" name="city">
              <option value="">City where property you wish to purchase?</option>
              <option value="AB">Alberta</option>
              <option value="BC">British Columbia</option>
              <option value="MB">Manitoba</option>
              <option value="NB">New Brunswick</option>
              <option value="NL">Newfoundland and Labrador</option>
              <option value="NT">Northwest Territories</option>
              <option value="NS">Nova Scotia</option>
              <option value="NU">Nunavut</option>
              <option value="ON">Ontario</option>
              <option value="PE">Prince Edward Island</option>
              <option value="QC">Quebec</option>
              <option value="SK">Saskatchewan</option>
              <option value="YT">Yukon</option>
             
            </select>
           </div> <!--col-xs-12-->
           <input type="submit" value="Continue" class="btn btn-default btn-continue">
      <div id="loading_sec" align="center" style="display:none">
          <img src="<?php echo get_template_directory_uri(); ?>/images/gif-1.gif" id="loader" style="height: 20px;"> 
        </div>
         </div> <!--row-->
        </div> <!--fomr-intro--> 
       </div> <!--col-lg-8-->   
      
     </div>
     <a class="previos-icon" onclick="next10back();"><i aria-hidden="true" class="fa fa-angle-left"></i></a>
     <!--a class="next-icon" onclick="next10();"><i aria-hidden="true" class="fa fa-angle-right"></i></a-->
   </div> 
  </section>

    <!-- ********** Step9 END *********** --> 
</form>


     
    <!-- ********** Step10 START *********** --> 
  <section class="step-block thank-you" id="step10" style="display:none">
    <div class="container"> 
     <div class="thank-you-block"> 
     
      <h1>Thank you !!</h1>
     
       <p>We received your application and it is currently under review.  Please allow 24 hours for one of our mortgage brokers to call you for more information.  Feel free to call us if you need an immediate response.</p>
     
      <a class="btn btn-default btn-continue" target="_blank" href="http://vancouverhousefinders.com/">Search Your Dream Home</a>
     
      <!--<a class="previos-icon" href="steps9.html"><i aria-hidden="true" class="fa fa-angle-left"></i></a>-->
      <!--<a class="next-icon" href="steps10.html"><i aria-hidden="true" class="fa fa-angle-right"></i></a>-->
    </div> <!--thank-you-->
   </div>
    
  </section>

    <!-- ********** Step10 END *********** --> 

    
<script type="text/javascript">

function next1() {
        if($('input[name=p_or_r]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        { 
          jQuery('.selected_radio').addClass('active-box');
          jQuery("#step").hide();
          jQuery("#step1").show(); 
        }
      }

function next2back() {
        
          jQuery("#step1").hide();
          jQuery("#step").show(); 
        }

function next2() {
        if($('input[name=piv]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        { 
          jQuery("#step1").hide();
          jQuery("#step2").show(); 
        }
}

function next3back() {
        
          jQuery("#step2").hide();
          jQuery("#step1").show(); 
        }

function next3() {
        if($('input[name=credit_score]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        { 
          jQuery("#step2").hide();
          jQuery("#step3").show(); 
        }
}

function next4back() {
        
          jQuery("#step3").hide();
          jQuery("#step2").show(); 
        }

function next4() {
        if($('input[name=first_time]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        { 
          jQuery("#step3").hide();
          jQuery("#step4").show(); 
        }
}

function next5back() {
        
          jQuery("#step4").hide();
          jQuery("#step3").show(); 
        }

function next5() {
       
          jQuery("#step4").hide();
          jQuery("#step5").show(); 
        
}

function next6back() {
        
          jQuery("#step5").hide();
          jQuery("#step4").show(); 
        
    }

function next6() {
       if($('input[name=down_pay]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        {
          jQuery("#step5").hide();
          jQuery("#step6").show(); 
        }
}

function next7back() {
        
          jQuery("#step6").hide();
          jQuery("#step5").show(); 
        
    }

function next7() {
       if($('input[name=buying_stage]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        {
          jQuery("#step6").hide();
          jQuery("#step7").show(); 
        }
}

function next8back() {
        
          jQuery("#step7").hide();
          jQuery("#step6").show(); 
        
    }

function next8() {
       if($('input[name=time_frame]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        {
          jQuery("#step7").hide();
          jQuery("#step8").show(); 
        }
}


function next8newback() {
        
          jQuery("#step8").hide();
          jQuery("#step7").show(); 
        
    }

function next8new() {
       if($('input[name=agent]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        {
          jQuery("#step8").hide();
          jQuery("#step8new").show(); 
        }
}


function next9back() {
        
          jQuery("#step8new").hide();
          jQuery("#step8").show(); 
        
    }

function next9() {
       if($('input[name=recommend]:checked').length<=0)
        {
         alert("Please Make a selection")
        }
        else
        {
          jQuery("#step8new").hide();
          jQuery("#step9").show(); 
        }
}

function next10back() {
        
          jQuery("#step9").hide();
          jQuery("#step8new").show(); 
        
    }
</script>

<section class="testimonial">
  <div class="container">
     <h3>What Our Clients Said</h3>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

  <?php query_posts('post_type=testimonial'); ?>
  				<?php $count = 1; ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="item <?php if ($count == 1) { echo "active"; } ?>">
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                     <img src="<?php echo $feat_image; ?>" alt="client-image">
				     <p><?php the_content(); ?></p>
				         <span><?php the_title(); ?></span>
				         <p><?php the_field('designation'); ?></p> 
                    </div>
                    <?php $count++; ?>
                    <?php endwhile;  
       			 wp_reset_query(); ?>

  </div>

  <!-- Controls -->
   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
    </a>
   </div>
  </div>
</section>
 
<section class="sponser-log grey">
   <div class="container"> 
    <div class="sposer"> 
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo1_link'); ?>"><img src="<?php the_field('logo1'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo2_link'); ?>"><img src="<?php the_field('logo2'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo3_link'); ?>"><img src="<?php the_field('logo3'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo4_link'); ?>"><img src="<?php the_field('logo4'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo5_link'); ?>"><img src="<?php the_field('logo5'); ?>" alt="logo00" /></a></div>
    </div> 
   </div> 
</section>      
<section class="sponser-logo white">
  <div class="container">
     <div class="sposer">
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo6_link'); ?>"><img src="<?php the_field('logo6'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo7_link'); ?>"><img src="<?php the_field('logo7'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo8_link'); ?>"><img src="<?php the_field('logo8'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo9_link'); ?>"><img src="<?php the_field('logo9'); ?>" alt="logo00" /></a></div>
      <div class="item-logo"><a target="_blank" href="<?php the_field('logo10_link'); ?>"><img src="<?php the_field('logo10'); ?>" alt="logo00" /></a></div>
     </div>
  </div>
</section>  
        <?php get_footer(); ?>
