<a class="whats-app pulse" href="https://api.whatsapp.com/send?phone=919948502053&text=" target="_blank">
    <!-- <i class="fa fa-whatsapp"></i> -->
    <i class="fa-brands fa-whatsapp my-float"></i>
</a>
<style>
     .pulse i {
        color: #fff;
        font-size: 2rem;
    }

    .pulse {
        background: #31f314;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .pulse::before {
        content: "";
        position: absolute;
        width: calc(100% + 40px);
        height: calc(100% + 40px);
        border: 2px solid #31f314;
        border-radius: 50%;
        animation: animate 1.5s linear infinite;
    }

    .pulse::after {
        content: "";
        position: absolute;
        width: calc(100% + 40px);
        height: calc(100% + 40px);
        border: 2px solid #31f314;
        border-radius: 50%;
        animation: animate 1.5s linear infinite;
        animation-delay: 0.4s;
    }

    @keyframes animate {
        0% {
            transform: scale(0.5);
            opacity: 0;
        }

        50% {
            transform: scale(1);
            opacity: 1;
        }

        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }


    .whats-app {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 15px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }
</style>
<footer class="custom-footer pt-5 pb-4">



  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-4 col-md-12 mb-4">
        <img src="{{ asset('assets/frontend/img/logo/logo.webp') }}" alt="Logo" class="footer-logo mb-3" style="max-height: 60px;">
        <p class="footer-desc">
          India’s premier inter-corporate cricket platform. Connecting companies through sport since 2022.
        </p>
      </div>

      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <h5 class="footer-heading">Platform</h5>
        <ul class="list-unstyled">
          <li><a href="#">Tournaments</a></li>
          <li><a href="#">Live Scores</a></li>
          <li><a href="#">Leaderboard</a></li>
          <li><a href="#">Ground Booking</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <h5 class="footer-heading">Community</h5>
        <ul class="list-unstyled">
          <li><a href="#">Teams</a></li>
          <li><a href="#">Players</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-4 col-12 mb-4">
        <h5 class="footer-heading">Company</h5>
        <ul class="list-unstyled">
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
        </ul>
      </div>
    </div>

    <div class="row mt-4 pt-4 border-top border-secondary">
      <div class="col-12 text-center">
        <p class="copyright-text">© 2026 Hexaark. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
    <script>
  new PureCounter();
</script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
</body>
</html>

