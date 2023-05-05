<div class="getquote-nav-section">
  <a class="getquote-nav-btn" href="https://biz4commerce.com/getQuote.php">
    GET A QUOTE
  </a>
</div>

<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="logo-section">
              <div class="logo">
                <img src="<?php echo CDN ?>images/Biz4Commerce_W.png" alt="footer-logo" />
                <p>
                 With a wide clientele worldwide and 10+ years of experience, Biz4Commerce is a celebrated name in the eCommerce industry delivering top-notch services.
                </p>
              </div>
			  			  <div><a href="https://www.softwaresuggest.com/services/biz4commerce-llc/write-review" target="_blank"><img src="http://www.softwaresuggest.com/assets2/img/review_new.svg" width="130"></a> </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 ">
            <div class="services">
              <h4 class="left-text-underline">Products</h4>
              <p class="mb-0 mw-100"><a href="<?php echo CDN ?>products">Biz4Commerce Enterprise</a></p>
              <p class="mb-0 mw-100"><a href="<?php echo CDN ?>products">Biz4Commerce Cloud</a></p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6" >
            <div class="quickView">
              <h4 class="left-text-underline">Quick View</h4>
              <p class="mb-0 mw-100"><a href="<?php echo CDN ?>about-us">About</a></p>
              <p class="mb-0 mw-100"><a href="<?php echo CDN ?>features">Features</a></p>
              <p class="mb-0 mw-100"><a href="<?php echo CDN ?>pricing">Pricing</a></p>
              <p class="mb-0 mw-100"><a href="<?php echo CDN ?>blog/">Blog</a></p> 
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="subscribe">
              <h4 class="left-text-underline">Subscribe to Newsletter</h4>
			   <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="https://biz4commerce.us2.list-manage.com/subscribe/post?u=4bbd1359422b8dad7fc15efad&amp;id=dcf272aef9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" style="  display: flex ;
    width: 100%;">
  <label for="mce-EMAIL"></label>
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email Address" required style="    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    background: transparent;
    text-indent: 10px;
    color: #fff;    height: 40px;
">
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4bbd1359422b8dad7fc15efad_dcf272aef9" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background: #ff9630;    height: 40px;border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
              <!--<div class="input-group-append">
                <div class="input-group mb-3">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Your Email Address"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2"
                  />
                  <div class="input-group-append">
                    <button class="btn button button--subscribe" type="button">
                      <span> Subscribe</span> <i class="fa fa-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>-->
            </div>
            <div class="contact">
              <h4 class="left-text-underline">Contact</h4>
               <strong>Email : </strong>  <a href="mailto:info@biz4group.com">
              info@biz4group.com
              </a>
              <p></p>
            <strong>Phone : </strong>   <a href="tel:+16143296463" itemprop="telephone"
                > +1(614) 329-6463

              </a>
            </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="copyright py-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <p>Copyright &copy;2023 Biz4Group. All Rights Reserved</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-flex justify-content-xl-end">
              <div class="privacy-policy">
                <ul class="text-right">
                  <li><a href="https://www.biz4commerce.com/terms-and-conditions" >Terms and conditions</a></li>
                  <li><a href="https://www.biz4commerce.com/privacy-policy">Privacy policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
	
	<!--Snow script start-->
<script>
       // snow effect
  (function () {
  
  var canvas, ctx;
  var points = [];
  var maxDist = 100;
  
  function init() {
     //Add on load scripts
     canvas = document.getElementById("snow");
     ctx = canvas.getContext("2d");
     resizeCanvas();
     pointFun();
     setInterval(pointFun, 20);
     window.addEventListener('resize', resizeCanvas, false);
  }
  //Particle constructor
  function point() {
     this.x = Math.random() * (canvas.width + maxDist) - (maxDist / 2);
     this.y = Math.random() * (canvas.height + maxDist) - (maxDist / 2);
     this.z = (Math.random() * 0.5) + 0.5;
     this.vx = ((Math.random() * 2) - 0.5) * this.z;
     this.vy = ((Math.random() * 1.5) + 1.5) * this.z;
     this.fill = "rgba(234,234,234," + ((0.4 * Math.random()) + 0.5) + ")";
     this.dia = ((Math.random() * 2.5) + 1.5) * this.z;
     points.push(this);
  }
  //Point generator
  function generatePoints(amount) {
     var temp;
     for (var i = 0; i < amount; i++) {
        temp = new point();
     };
     // console.log(points);
  }
  //Point drawer
  function draw(obj) {
     ctx.beginPath();
     ctx.strokeStyle = "transparent";
     ctx.fillStyle = obj.fill;
     ctx.arc(obj.x, obj.y, obj.dia, 0, 2 * Math.PI);
     ctx.closePath();
     ctx.stroke();
     ctx.fill();
  }
  //Updates point position values
  function update(obj) {
     obj.x += obj.vx;
     obj.y += obj.vy;
     if (obj.x > canvas.width + (maxDist / 2)) {
        obj.x = -(maxDist / 2);
     }
     else if (obj.xpos < -(maxDist / 2)) {
        obj.x = canvas.width + (maxDist / 2);
     }
     if (obj.y > canvas.height + (maxDist / 2)) {
        obj.y = -(maxDist / 2);
     }
     else if (obj.y < -(maxDist / 2)) {
        obj.y = canvas.height + (maxDist / 2);
     }
  }
  //
  function pointFun() {
     ctx.clearRect(0, 0, canvas.width, canvas.height);
     for (var i = 0; i < points.length; i++) {
        draw(points[i]);
        update(points[i]);
     };
  }
  
  function resizeCanvas() {
     canvas.width = window.innerWidth;
     canvas.height = window.innerHeight;
     points = [];
     generatePoints(window.innerWidth / 3);
     pointFun();
  }
  
  //Execute when DOM has loaded
  document.addEventListener('DOMContentLoaded', init, false);
  })();

    </script>
<!--Snow script end-->
	
	
	
	
