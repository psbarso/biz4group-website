<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank you for contacting us ! biz4commerce</title>

    <?php 
       include_once("includes/commoncss.php");
    ?>
    <style>
      .wrapper {
        padding-top:200px;
        
      }
      h1 {
        font-size: 3rem;
      }
      p {
        font-size: 1.3rem;
      }
      .social-media-links-t {
        text-align: center;
      }
      .social-media-links-t a {
        color: #000000;
        padding-right: 10px;
        cursor: pointer;
      }
      .social-media-links-t a i:hover {
        color: #ff9630;
      }
      .footer{
        padding-top:3rem;
      }
    </style>
  </head>
  <body>
  <?php 
       include_once("includes/header.php");
      ?> 
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="wrapper">
            <h1 class="text-center">Thank you!!!</h1>
            <p class="text-center">
            We've received your inquiry.
            We truly appreciate the chance to offer you our high-quality services & solutions.
            Shortly, our experts will contact you.       
            </p>
            <p class="text-center">
            Meanwhile, you can explore more of our eCommerce offering and use cases on our LinkedIn page. <br>
           <a href="https://www.linkedin.com/company/biz4commerce-llc">https://www.linkedin.com/company/biz4commerce-llc</a> 
            </p>
            <div class="social-media-links-t mb-5">
              <h2 class="mt-5">Follow us</h2>
              <a
                href="https://www.facebook.com/Biz4Commerce-105281877989284"
                target="_blank"
                ><i class="fab fa-facebook-f fa-3x"></i
              ></a>
              <a href="https://twitter.com/biz4commerce" target="_blank"
                ><i class="fab fa-twitter fa-3x"></i
              ></a>
              <a
                href="https://www.linkedin.com/company/biz4commerce-llc"
                target="_blank"
                ><i class="fab fa-linkedin fa-3x"></i
              ></a>
			   <a href="https://in.pinterest.com/biz4commerce/" target="_blank"><i class="fab fa-pinterest fa-3x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      include_once("includes/footer.php");
    ?> 
	
  </body>
</html>
