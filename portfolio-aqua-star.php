<?php include_once("includes/header-service.php");
 ?>

<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<style>
  
  .theme-color{
    color: #004788 
  }
  .theme-bg{
    /*background-color:#F83459;*/
    background: transparent linear-gradient(180deg, #004788 0%, #0661B4 100%) 0% 0% no-repeat padding-box;
   }
  .theme-border{
    border:2px solid #004788;
    background: #FFFFFF;
      border-radius: 20px;
    padding:15px;
  }
  .subject-matter::after{
     background-color: #004788;
  }
  .tech-stack:hover {
    background-color:#004788;
    color:#ffffff;
  }
  
  .tech-stack:hover h3::after{
    background-color:#ffffff;
  }
  .why-us:hover{
    background-color:#004788;
    color:#ffffff;
  }
  .why-us:hover h3::after{
    background-color:#ffffff;
  }
  
  .portfolio-banner{
    background-image: url("https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aqua-star/aqua-star-bg.webp");
  }

  .testomonial-outer{
    border: 10px solid #004788;
  }

  div#owl-demo-portfolio .owl-dots{
    display:none;
  }

  .portfolio-banner img {
      max-width: 650px;
      margin-top: 40px;
  }

  .horizontal-line.bg-glow-app::after {
      background-color: #004788;
  }

  img{
    height: auto;
    width: 100%;
  }
	
.why-us .horizontal-line::after{
	left: 50%;
    margin-left: -35px;
 }

</style>



<div class="app-portfolio-page">
  
  <section>
    <div class="portfolio-banner ">
      <div class="container">
        <div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
          <div class="col-md-8 col-sm-12  alt-order">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aqua-star/aqua-star-hero.webp" alt="aqua-star-hero"
            loading="lazy" width="640" height="320"/>
          </div>
          <div class="col-md-4 col-sm-12 center-al">
            <h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
            <h2>IoT based high efficient pool pumps</h2>
            <!--<a href="https://boatbutler.app/" target="_blank" class="visit">Visit Website</a>-->
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner-->

  <!-- work-section start -->
  <section class="challenge-section">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
      <h2 class="heading-section margin-b-3 text-center">Our Smart, Efficient & Productive Approach</h2>
      </div>
        <div class="col-md-5 col-lg-5 col-sm-12 margin-b-3">
          <div class="challenge-card">
            <div class="challenge-img">
              <img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aqua-star/challenge.webp" alt="challenge"
              loading="lazy" width="640" height="320"/>
            </div>
            <div class="challenge-left">
              <div class="challenge-left-heading ">
                
                <h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
              </div>
              <div class="challenge-content">
                <p>
                  With <b>Internet of Things (IoT)</b> being one of the cornerstones of Industrial growth, a leading <b>Pool Products company, AquaStar</b> reached out to us to take their business to new heights through IoTization of its products. While this step was extremely important for the company, it was equally challenging. One of the biggest challenges was to coordinate with the Company’s Device Manufacturers and Firmware Developers to meet the project deadline. However, with years of expertise in developing some of the most <b>complex IoT solutions</b>, use of <b>advanced Tech-stacks</b> and <b>AWS Services like AWS IoT, Cloud Watch, DynamoDB</b> we delivered the project as per the client’s expectations and well-within the given timeline.    
                </p>            
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
          <div class="challenge-card">
            <div class="challenge-img">
              <img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aqua-star/project-highlights.webp" 
              alt="project-highlights" loading="lazy" width="640" height="320"/>
            </div>
            <div class="challenge-left">
              <div class="challenge-left-heading ">
                <h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
              </div>
              <div class="challenge-content">
                <ul>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Separate Users and Admin Panel</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>User <b>Support Ticket Generation and Resolution</b></p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p><b>Real- time Pump Logs and Manoeuvrability</b></p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p><b>AWS, DynamoDB</b> usage for enhanced <b>Performance, Security, Scalability</b></p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p><b>Speedy Backup and Storage of Pump logs</b> and User Data</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Scope for <b>Integration of Pool Lightings</b> as well with the System</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Incorporates <b>Device Management Features</b> such as <b>Switching the Pumps On/Off, Track Running History, Creating Schedules, Setting Default Speeds</b>, and many more.</p></div></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- work-section end -->

  <!-- section-insights start -->
  <section class="section-insights">
    <div class="container">
      <div class="inner-insights theme-bg padding-3">
        <div class="row">
          <div class="col-md-12">
            <div class="insights-heading">
              <h2 class="horizontal-line bg-white">Insights</h2>
            </div>
          </div>
          <div class="col-md-12 col-lg-12">
            <div style="margin-bottom:30px;">
            <p>Along with setting up the AWS infrastructure, we also built a Mobile Application and a Web Platform that allows both the user and the company officials to <b>Manage Functioning of Pumps, Create Schedules</b> with different speeds and time intervals, and <b>Track Pump Logs.</b> The platform also permits the user to <b>raise Customer Support Tickets.</b> Similarly, the Admin Panel enables the company officials to respond to those tickets. Moreover, the Admin can also see details of specific users, check running history of their pumps, make a particular user Active/Inactive, and many more.</p>      
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-insights end -->

  <!-- section-screens start -->
  <section class="section-screens">
    <div class="container">
      <h2 class="heading-section margin-b-3 text-center">Creative Designs</h2>
      <div class="screens-inner">
        <div class="row">
          <!-- Item -->
          <div class="col-md-12">
            <div class="screens-img">
              <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aqua-star/aqua-star-screen.webp" alt="aqua-star-screen" 
              loading="lazy" width="640" height="320"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-screens end -->
  <!-- section-architecture start -->
  <section>
    <div class="container">
      <div class="architecture">
        <h2 class="heading-section margin-b-3 text-center">Technical Architecture</h2>
        <div class="screens-inner">
          <div class="screens-web-img flex-disp flex-justify-center">
            <img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-architecture.webp" alt="subsciety-architecture" 
            loading="lazy" width="640" height="320"/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-architecture end -->
    <!-- section-leader-start -->
  <section>
    <div class="container">
      <h2 class="heading-section margin-b-3 text-center">Leader Of The Effort</h2>
      <div class="subject-matter">
        <div class="">
          <div class="flex-disp">
            <img class="fix-img margin-end-5 bd-50" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sme-akash.webp" alt="sme-img" 
            loading="lazy" width="640" height="320"/>
            <div>
              <h4 class="theme-color horizontal-line bg-glow-app">Akash Uday</h4><p><b>Exp: 20+ Years</b></p>
            </div>
          </div>
          <h3 class="">Subject Matter Expert</h3>
          <p class="content">
            Akash has over 23 years of experience in developing and managing large-scale enterprise applications for Fortune 500 companies. His expertise includes system integration and development, software development process enhancement, and coordinating with clients, teams, and activities. In addition, he is proficient in setting up procedural guidelines to establish successful delivery processes and implementing various databases, tools, design patterns, and frameworks.     
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- section-architecture end -->
  <!-- section-why-biz4group-start -->
  <section>
    <div class="container">
      <h2 class="heading-section margin-b-3 text-center">Why Biz4Group</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="why-us theme-border margin-b-3 text-center">
            <h3 class="horizontal-line bg-black">Trusted Advisors</h3>
            <p>Skilled Developers for Deployment</p>
            <p>Collaborative efforts of Subject matter Experts</p>
            <p>On time delivery ensuring Desirable Outputs</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-us theme-border margin-b-3 text-center">
            <h3 class="horizontal-line bg-black">Distinctive Quality</h3>
            <p>Offering exemplary code quality</p>
            <p>User-friendly UI/UX</p>
            <p>Prioritize client expectation</p>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-us theme-border margin-b-3 text-center">
            <h3 class="horizontal-line bg-black">Supportability</h3>
            <p>24/7 Technical Support</p>
            <p>Post Delivery Consultation</p>
            <p>Continuous Server Monitoring</p>
            <p>DB Clean Up</p>
            <p>Cost Effective Customer Support Plans </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-why-biz4group-end -->
    <!-- section-above-and-beyond-start-->
  <section class="section-screens">
    <div class="business-benefits">
      <div class="container">
        <h2 class="heading-section margin-b-3 text-center">Going Above & Beyond</h2>
        <div class="row flex-disp flex-align-center flex-wrap">
          <div class="col-md-6 col-xs-12 padding-0 col-sm-12">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/boat-butler/business-benefits.webp" alt="business-benefits"
            loading="lazy" width="640" height="320"/>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="challenge-left">
              <div class="challenge-left-heading ">
                <h3 class="theme-color horizontal-line bg-glow-app">Business Benefits</h3>
              </div>
              <div class="challenge-content">
                <ul>  
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        The user-friendly interface makes it <b>effective to use for the Users and for Admin.</b> 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        <b>Real time pump logs</b> assist Admin and the users to keep a track on the devices. 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        <b>Multiple Pump Maneuvering Feature</b> significantly reduces the hassles of users as well as company officials, thus it fosters company;s revenue growth. 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        <b>Robust customer Support System</b> ensures that admin remains at the top of Support Requests. 
                      </p>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row flex-disp flex-align-center flex-wrap">
          <div class="col-md-6 col-xs-12 col-sm-12 alt-order">
            <div class="challenge-left">
              <div class="challenge-left-heading">
                <h3 class="theme-color bg-glow-app horizontal-line">Why We Use Reusable Technical Components</h3>
              </div>
              <div class="challenge-content">
                <ul>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        <span class="theme-color content">Efficiency:</span> 
                        Reusable components help us save development efforts and deploy the application faster and for less cost. 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        <span class="theme-color content">Consistency:</span> 
                        With the primary functions being consistent, we get greater control and scalability of the app.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        <span class="theme-color content">Proven Codebase:</span> 
                        Various developers have used the code many times, making the functionality already proven in the field.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12 padding-0">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/boat-butler/technical-components.webp" alt="technical-components" 
            loading="lazy" width="640" height="320"/>
          </div>
        </div>
        <div class="row flex-disp flex-align-center flex-wrap">
          <div class="col-md-6 padding-0">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/boat-butler/trustedadviser.webp" alt="trustedadviser" 
            loading="lazy" width="640" height="320"/>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="challenge-left">
              <div class="challenge-left-heading ">
                <h3 class="theme-color horizontal-line bg-glow-app">Role As Trusted Advisors</h3>
              </div>
              <div class="challenge-content">
                <ul>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Facilitating value-added artifacts like Architecture diagrams
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Design Guidelines
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Regular Status reports
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Review calls 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Best Coding practices and test cases
                      </p>
                    </div>
                  </li><li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Advance Deliveries 
                      </p>
                    </div>
                  </li><li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Regular inputs for Product Enhancement
                      </p>
                    </div>
                  </li><li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Post-deployment technical support 
                      </p>
                    </div>
                  </li><li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Consultation 
                      </p>
                    </div>
                  </li>
                </ul>           
              </div>
            </div>
          </div>
        </div>
        <div class="row flex-disp flex-align-center flex-wrap">
          <div class="col-md-6 col-xs-12 col-sm-12 alt-order ">
            <div class="challenge-left ">
              <div class="challenge-left-heading">
                <h3 class="theme-color horizontal-line bg-glow-app">Cost Low</h3>
              </div>
              <div class="challenge-content">
                <ul>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        With plug and play components and reusable technical modules, we bring down the overall development cost by substantial margins.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 padding-0 col-sm-12">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/boat-butler/suggestion.webp" alt="suggestion" 
            loading="lazy" width="640" height="320"/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-above-end -->
  
  <section class="">
    <div class="container">
      <div class="architecture">
        <h2 class="heading-section margin-b-3 text-center">Development Life Cycle</h2>
        <div class="screens-inner">
          <div class="screens-web-img flex-disp flex-justify-center">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-development-lifecycle.webp" alt="subsciety-development-lifecycle" 
            loading="lazy" width="640" height="320"/>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--tech-stack-->
  <section>
    <div class="container">
      <h2 class="heading-section margin-b-3 text-center">Tech Stack</h2>
        <div id="owl-demo2" class="owl-carousel owl-theme">
           <div class="item">
            <div class="tech-stack margin-b-3">
              <div class="tech-box">
                <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/mern.webp" alt="mern" 
                loading="lazy" width="640" height="320"
                />
              </div>
              <h3 class="horizontal-line bg-glow-app">MERN</h3>
              <p>
                Unlike traditional database systems that offer data management through tables and rows, MERN allows data management fields with the help of NoSQL. Resulting in no lag while handling more massive datasets.   
              </p>
            </div>
          </div>
          <div class="item">
            <div class="tech-stack margin-b-3">
              <div class="tech-box">
                <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aws.webp" alt="aws"
                loading="lazy" width="640" height="320"
                />
              </div>
              <h3 class="horizontal-line bg-glow-app">Ionic 5</h3>
              <p>
                Amazon Web Services is a subsidiary of Amazon providing on-demand cloud computing platforms and APIs on a metered pay-as-you-go basis. It provides a fast, flexible, secure, and budget-friendly solution for businesses.
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--teck-stack-ends-->
    <!-- <img class="w-100" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/boat-butler/demo-banner.webp" alt="demo-banner"
     loading="lazy" width="640" height="320"
     />-->
  <!--similar-projects-->
  <section>
    <div class="container">
      <h2 class="heading-section margin-b-3 text-center">Similar Projects</h2>
      <div id="owl-demo-portfolio" class="owl-carousel owl-theme">
        <div class="item">
          <a href="https://www.biz4group.com/portfolio-subsciety" target="_blank">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-main.webp" 
      alt="subsciety-main" loading="lazy" width="640" height="320"
      />
            <p>Subscription-based multi-vendor marketplace</p>
          </a>
        </div>
        <div class="item">
          <a href="https://www.biz4group.com/portfolio-zzabs" target="_blank">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-zzabs-2.webp" 
      alt="portfolio-desc-zzabs-2" loading="lazy" width="640" height="320"
      />
            <p>eCommerce marketplace app for Android and iOS users.</p>
          </a>
        </div>
        <div class="item">
          <a href="https://www.biz4group.com/portfolio-tank-broker" target="_blank">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-tank-broker.webp" 
      alt="portfolio-desc-tank-broker" loading="lazy" width="640" height="320"
      />
            <p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p>
          </a>
        </div>
        <div class="item">
          <a href="https://www.biz4group.com/portfolio-post-heritage" target="_blank">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/post-heritage-main.webp" 
      alt="post-heritage-main" loading="lazy" width="640" height="320"
      />
            <p>An eCommerce platform to buy customized business cards and accessories</p>
          </a>
        </div>
        <div class="item">
          <a href="https://www.biz4group.com/portfolio-goldleaf" target="_blank">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/goldleaf-main.webp" 
      alt="goldleaf-main" loading="lazy" width="640" height="320"
      />
            <p>eCommerce Platforms For Medical Products</p>
          </a>
        </div>
        <div class="item">
          <a href="https://www.biz4group.com/portfolio-accugenedx" target="_blank">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/accugenedx-main.webp" 
      alt="accugenedx-main" loading="lazy" width="640" height="320"
      />
            <p>An eCommerce platform to provide convenient health checkups at home</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--similar-projects-ends-->
  
<script>

 jQuery().ready(function() {
  jQuery("#contactForm").validate({  
    submitHandler: function(form) {
      var response = grecaptcha.getResponse();
       
        if (response.length === 0) { 
        
          alert("Invalid Captcha!!! , please try again later.");
        
        } 
        else {
          /*data_form = jQuery("#contactForm").serializeArray();
          jQuery.ajax({
          url: "<?php echo $_SERVER['REQUEST_URI'];?>",
          type: "POST",   
          data: data_form,
          success: function (html) {
            var obj = jQuery.parseJSON(html);
              if(obj.restype=="success")
              {
                window.location="<?php echo SITE_URL;?>thankyou";
              }
              else
              {
                alert(obj.error);
              }
            }
          });*/
          form.submit();
        }
      return false; 
    }
  });
});


$(document).ready(function() {
 
  $("#owl-demo-portfolio").owlCarousel({
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
    loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        500:{
            items:2,
            nav:false,
      loop:false
        },
        768:{
            items:4,
            nav:true,
            loop:false
        }
    }
  });
 
});

$(document).ready(function() {
 
  $("#owl-demo2").owlCarousel({
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
    loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        500:{
            items:2,
            nav:false,
      loop:false
        },
        768:{
            items:3,
            nav:true,
            loop:false
        },
    991:{
            items:4,
            nav:true,
            loop:false
        }
    
    }
  });
 
});
</script>

<?php
require_once('includes/footer-service.php');
?>