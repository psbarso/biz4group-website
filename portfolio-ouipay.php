<?php include_once("includes/header-service.php");
 ?>

<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<style>
  
  .theme-color{
    color: #64b197 
  }
  .theme-bg{
    /*background-color:#F83459;*/
    background: transparent linear-gradient(180deg, #64b197 0%, #64b197 100%) 0% 0% no-repeat padding-box;
   }
  .theme-border{
    border:2px solid #64b197;
    background: #FFFFFF;
      border-radius: 20px;
    padding:15px;
  }
  .subject-matter::after{
     background-color: #64b197;
  }
  .tech-stack:hover {
    background-color:#64b197;
    color:#ffffff;
  }
  
  .tech-stack:hover h3::after{
    background-color:#ffffff;
  }
  .why-us:hover{
    background-color:#64b197;
    color:#ffffff;
  }
  .why-us:hover h3::after{
    background-color:#ffffff;
  }
  
  .portfolio-banner{
    background-image: url("https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/oui-pay-bg.webp");
  }

  .testomonial-outer{
    border: 10px solid #64b197;
  }

  div#owl-demo-portfolio .owl-dots{
    display:none;
  }

  .portfolio-banner img {
      max-width: 650px;
      margin-top: 40px;
  }

  .horizontal-line.bg-glow-app::after {
      background-color: #64b197;
  }
  
  .why-us .horizontal-line::after{
	left: 50%;
    margin-left: -35px;
  }

  img{
    height: auto;
    width: 100%;
  }

</style>



<div class="app-portfolio-page">
  
  <section>
    <div class="portfolio-banner ">
      <div class="container">
        <div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
          <div class="col-md-8 col-sm-12  alt-order">
            <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/oui-pay-hero.webp" alt="aqua-star-hero"
            loading="lazy" width="640" height="320"/>
          </div>
          <div class="col-md-4 col-sm-12 center-al">
            <h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
            <h2>Versatile buy-now-pay-later Application</h2>
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
              <img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/challenge.webp" alt="challenge"
              loading="lazy" width="640" height="320"/>
            </div>
            <div class="challenge-left">
              <div class="challenge-left-heading ">
                
                <h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
              </div>
              <div class="challenge-content">
                <p>
                 Isn't it challenging to make credit purchases?  
                </p>      
                <p>But ever thought of buying something and paying its amount later on? Ouipay challenged us to develop a secure <b>buy-now-pay-later application</b> for varied products and services. We <b>conceptualized and developed</b> the application through brainstorming sessions, using the <b>power and potential of tech stacks and effective technical architecture.</b> Through this, users can <b>create their profile</b>, verify it by <b>uploading identification documents, register their due bills with details, create schedules for payments</b> and pay from the application. It will also allow them to <b>enhance their credit score</b> by making payments using the application and get <b>financial literacy benefits</b> by reading trendy news, blogs and articles on finance through the knowledge section.</p>      
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
          <div class="challenge-card">
            <div class="challenge-img">
              <img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/project-highlights.webp" 
              alt="project-highlights" loading="lazy" width="640" height="320"/>
            </div>
            <div class="challenge-left">
              <div class="challenge-left-heading ">
                <h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
              </div>
              <div class="challenge-content">
                <ul>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Create profile</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Identification Document Verification</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>26 days pay Opportunities </p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Add bill details for making payment</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Calendar Scheduling </p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Graphical Representation of Expenses</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Custom Bill Option</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Credit Score </p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Push Notifications</p></div></li>
                  <li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Financial Knowledge Category</p></div></li>
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
            <p>OuiPay is a pay-later application that allows users to <b>pay their due bills</b> on time by creating their verified profile and <b>registering their due bill details</b> through search or <b>adding custom bill information.</b> It assists in <b>creating a schedule to get themselves notified</b> before their due billing date. Moreover, this application provides a <b>credit score</b>, into which a certain limit has been set as per the financial history of the user, which can be increased by making continuous payments using the application. To <b>track the monthly expenses</b>, users can track the expenses details and get a graphical representation. The application has a <b>separate section categorizing trendy and financial topics</b> to boost <b>financial literacy.</b></p>      
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section-insights end -->

  <!-- section-screens start -->
  <section class="section-screens">
    <div class="container">
      <h2 class="heading-section margin-b-3 text-center">Platform UI/UX design</h2>
      <div class="screens-inner">
        <div class="row">
          <!-- Item -->
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="screens-img">
              <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/screens-01.webp" alt="screens-01" 
              loading="lazy" width="640" height="320"/>
            </div>
          </div>
          <!-- Item -->
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="screens-img">
              <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/screens-02.webp" alt="screens-02" 
              loading="lazy" width="640" height="320"/>
            </div>
          </div>
          <!-- Item -->
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="screens-img">
              <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/screens-03.webp" alt="screens-03" 
              loading="lazy" width="640" height="320"/>
            </div>
          </div>
          <!-- Item -->
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="screens-img">
              <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/screens-04.webp" alt="screens-04" 
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
            <img class="fix-img margin-end-5 bd-50" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sme-img.webp" alt="sme-img" 
            loading="lazy" width="640" height="320"/>
            <div>
              <h4 class="theme-color horizontal-line bg-glow-app">Sanjeev Verma</h4><p><b>Exp: 20+ Years</b></p>
            </div>
          </div>
          <h3 class="">Subject Matter Expert</h3>
          <p class="content">
            Sanjeev Verma has been actively conceptualizing and creating software solutions for the past 20 years in the IT domain. He has worked on technical leadership positions with Marriott Vacations, Disney, MasterCard, Statefarm, and Oracle. He has been a key player in developing, implementing, and monitoring Digital Solutions ranging from IoT solutions & products, Mobile and Web Development, and Digital Marketing to Full Stack Development and CMS solutions.       
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
                        Businesses can get more customers as they provide them leverage ensuring guarantee to pay the due amount later on. 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        It can assist businesses to spread financial literacy among users to ensure effective responses and aids in client engagement for further investments. 
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Encourages customers to purchase higher value goods, therefore increases sales by 20-30% on an average.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="flex-disp">
                      <i class="fa fa-angle-double-right"></i> 
                      <p class="content">
                        Tracking can assist businesses to analyze the major expenditure done by customers for collecting expense data.  
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
                <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ReactJS.webp" alt="React with IONIC" 
                loading="lazy" width="640" height="320"
                />
              </div>
              <h3 class="horizontal-line bg-glow-app">React with IONIC</h3>
              <p>
                Ionic with React is called to be a native React version of Ionic Framework, free, secure and open-source SDK powering millions of development of critical applications.     
              </p>
            </div>
          </div>
          <div class="item">
            <div class="tech-stack margin-b-3">
              <div class="tech-box">
                <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/nodejs_logo.webp" alt="nodejs_logo"
                loading="lazy" width="640" height="320"
                />
              </div>
              <h3 class="horizontal-line bg-glow-app">Node JS</h3>
              <p>
                Node.js is based on Google’s V8 JavaScript engine that compiles the code directly into the machine code, improving the speed and performance of the platform. In addition, it delivers better efficiency and overall developer productivity through code sharing and reusability.     
              </p>
            </div>
          </div>

        </div>
      </div>
  </section>
  <!--teck-stack-ends-->
    <img class="w-100" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ouipay/demo-banner.webp" alt="demo-banner"
     loading="lazy" width="640" height="320"
     />
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