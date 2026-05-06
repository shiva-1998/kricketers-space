@include('front.includes.header-links')

@include('front.includes.header')

<main class="inner_pages_main bg-black">

  
<div class=" booking-container">
    <!-- Header Image -->
    <img src="https://images.unsplash.com/photo-1540747913346-19e32dc3e97e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ambedkar Stadium" class="stadium-img">
    

    <div class="container">

    <div class="px-4 py-3">
        <!-- Title & Location -->
        <h3 class="text-white fw-bold mb-1">Ambedkar Stadium</h3>
        <div class="d-flex align-items-center text-location mb-4">
            <i class="bi bi-record-circle text-danger me-2"></i> ITO, New Delhi
        </div>

        <!-- Amenities -->
        <div class="d-flex flex-wrap gap-4 text-amenities mb-4">
            <span>Floodlights</span>
            <span>Dressing Room</span>
            <span>Pavilion</span>
            <span>Parking</span>
        </div>
    </div>

    <hr class="custom-divider m-0">

    <div class="px-4 py-4">
        <!-- Date Selection -->
        <h6 class="text-white mb-3 fs-6">Select date</h6>
        <div class="d-flex gap-2 overflow-auto pb-2 hide-scrollbar">
            <button class="btn custom-btn-date active">Mon, Mar 24</button>
            <button class="btn custom-btn-date">Tue, Mar 25</button>
            <button class="btn custom-btn-date">Wed, Mar 26</button>
            <button class="btn custom-btn-date">Thu, Mar 27</button>
            <button class="btn custom-btn-date">Fri, Mar 28</button>
        </div>

        <!-- Time Selection -->
        <h6 class="text-white mb-3 mt-4 fs-6">Select time slot</h6>
        <div class="d-flex gap-3 overflow-auto pb-2 hide-scrollbar">
            <button class="btn custom-btn-time active text-start">
                <div class="time">9 - 11 AM</div>
                <div class="price">₹800/hr</div>
            </button>
            <button class="btn custom-btn-time text-start">
                <div class="time">11 AM - 1 PM</div>
                <div class="price">₹800/hr</div>
            </button>
            <button class="btn custom-btn-time disabled text-start" disabled>
                <div class="time">1 - 3 PM</div>
                <div class="price">Booked</div>
            </button>
            <button class="btn custom-btn-time text-start">
                <div class="time">3 - 5 PM</div>
                <div class="price">₹900/hr</div>
            </button>
        </div>
    </div>

    <hr class="custom-divider m-0">

    <div class="px-4 py-4">
        <!-- Payment Summary -->
        <h6 class="text-white mb-4 fs-6">Payment summary</h6>
        
        <div class="d-flex justify-content-between text-white mb-3">
            <span>3 - 5 PM (2 hrs)</span>
            <span>₹1,800</span>
        </div>
        <div class="d-flex justify-content-between text-white mb-3">
            <span>Booking fee</span>
            <span>₹50</span>
        </div>
        <div class="d-flex justify-content-between text-white mb-4">
            <span>GST (18%)</span>
            <span>₹333</span>
        </div>
    </div>

    <hr class="custom-divider m-0">

    <div class="px-4 py-4">
        <!-- Total -->
        <div class="d-flex justify-content-between text-white fw-bold fs-5 mb-5">
            <span>Total</span>
            <span>₹2,183</span>
        </div>

        <!-- Checkout Button -->
        <button class="btn w-100 mw-50 mx-auto confirm-btn fw-medium fs-6">Confirm & Pay ₹2,183</button>
    </div>
</div>
</div>



  <script>
    document.addEventListener("DOMContentLoaded", function() {
    
    // Handle Date Selection
    const dateButtons = document.querySelectorAll('.custom-btn-date');
    dateButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all dates
            dateButtons.forEach(b => b.classList.remove('active'));
            // Add active class to clicked date
            this.classList.add('active');
        });
    });

    // Handle Time Slot Selection
    const timeButtons = document.querySelectorAll('.custom-btn-time:not(.disabled)');
    timeButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all time slots
            timeButtons.forEach(b => b.classList.remove('active'));
            // Add active class to clicked time slot
            this.classList.add('active');
        });
    });

});
  </script>

</main>

@include('front.includes.footer')