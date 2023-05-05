
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9Z33DP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<style>

.header .navbar .dropdown-item.active{
	background-color: #ff9630;
}

canvas.snow {
    background-image: #fff;
    position: fixed;
    width: 100%;
    z-index: 9999999;
    height: 100vh;
    pointer-events: none;
}

.shake {
    -webkit-animation-name:              shake;    
    -webkit-animation-duration:          0.8s;
    -webkit-animation-iteration-count:   infinite;
    -webkit-animation-timing-function:   linear;
    -webkit-transform-origin:            50% 100%;
}

@-webkit-keyframes shake {
  0%  { -webkit-transform:     translate(2px, 1px) rotate(0deg); }
  10% { -webkit-transform:     translate(-1px, -2px) rotate(-2deg); }
  20% { -webkit-transform:     translate(-3px, 0px) rotate(3deg); }
  30% { -webkit-transform:     translate(0px, 2px) rotate(0deg); }
  40% { -webkit-transform:     translate(1px, -1px) rotate(1deg); }
  50% { -webkit-transform:     translate(-1px, 2px) rotate(-1deg); }
  60% { -webkit-transform:     translate(-3px, 1px) rotate(0deg); }
  70% { -webkit-transform:     translate(2px, 1px) rotate(-2deg); }
  80% { -webkit-transform:     translate(-1px, -1px) rotate(4deg); }
  90% { -webkit-transform:     translate(2px, 2px) rotate(0deg); }
  100%{ -webkit-transform:     translate(1px, -2px) rotate(-1deg); }
 }

</style>

<!--<canvas class="snow" id="snow"></canvas>-->

<!-- header section -->
<header class="ecom-header-service fixed-top">
  <div class="sub-header">
    <div class="container">
      <div class="sub-header-desc">
        <p>
        <img src="./images/landing-page/mail-black.svg" alt="icon" />
        <a href="mailto:info@biz4group.com">info@biz4group.com</a>
        </p>
        <p>
        <img src="./images/landing-page/tel-black.svg" alt="icon" class="shake" />
        <a href="tel:+1 (614) 329-6463">+1 (614) 329-6463</a>
        </p>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg">
  <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="https://biz4group.com/">
  <img src="./images/landing-page/logo-white.png" alt="logo" />
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon" id="top-navbar-toggle-id">
    <i class="fa fa-bars" aria-hidden="true"></i>
    </span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#about" onclick="toggleNavbarById()">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonials" onclick="toggleNavbarById()">TESTIMONIALS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio" onclick="toggleNavbarById()">PORTFOLIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#achievements" onclick="toggleNavbarById()">ACHIEVEMENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#features" onclick="toggleNavbarById()">FEATURES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#clients" onclick="toggleNavbarById()">CLIENTS</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<script>
function toggleNavbarById() {
$("#top-navbar-toggle-id").trigger("click")
}
</script>

</header>

