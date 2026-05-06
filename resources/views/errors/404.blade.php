
@include('front.includes.header-links')


<section class="coming-soon-wrapper d-flex align-items-center justify-content-center text-center">
    <div class="overlay"></div>
    
    <div class="container position-relative z-3">
        <div class="content-box">
            <h1 class="main-heading">
                <span class="text-white d-block">We Are Almost</span>
                <span class="text-cyan d-block italic-bold">Ready to Launch!</span>
            </h1>
            
            <div class="mt-5">
                <a href="{{ route('home') }}" class="cta1 btn-notched">Back to Home</a>
            </div>
        </div>

        <div class="footer-bottom mt-5">
            <p class="copyright-text">© 2026 Kricketers-space. All rights reserved.</p>
        </div>
    </div>
</section>

<style>
/* CSS Implementation using your theme variables */
:root {
    --p: #00bcd4;
    --f1: 'SportStars', sans-serif; /* Recommended for the heading */
    --f2: 'SpaceGrotesk', sans-serif;
}

.coming-soon-wrapper {
    min-height: 100vh;
    background: url('stadium-bg.jpg') no-repeat center center;
    background-size: cover;
    position: relative;
    overflow: hidden;


        background-image: url(../../../assets/frontend/img/home-ban.webp);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    /* padding: 100px 0; */
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: rgb(0 0 0 / 36%) 0 0 0 1000px inset;
    box-shadow: rgb(0 0 0 / 46%) 0 0 0 1000px inset;
}

/* Darkened overlay to match reference image */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.85) 100%);
    z-index: 1;
}

.z-3 { z-index: 3; }

/* Typography */
.main-heading {
    text-align: center;
    font-size: 60px;
    font-family: 'SportStars';
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
}

.text-cyan {
    color: var(--p);
}

.italic-bold {
    font-style: italic;
    letter-spacing: -2px;
}

.copyright-text {
    color: #94a3b8;
    font-size: 0.9rem;
    font-family: var(--f2);
    margin-top: 100px;
}

.cta1:hover {
    background-color: #fff;
    transform: translateY(-3px);
    color: #000;
}

@media (max-width: 768px) {
    .main-heading {
        font-size: 2.5rem;
    }
}
</style>


