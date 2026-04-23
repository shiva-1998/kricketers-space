<button id="rzp-button" class="btn btn-success">Pay ₹{{ $tournament->entry_fee }}</button>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    var options = {
        "key": "{{ config('services.razorpay.key') }}", // put your key
        "amount": "{{ $tournament->entry_fee * 100 }}", // in paise
        "currency": "INR",
        "name": "Tournament Registration",
        "description": "{{ $tournament->name }}",
        "handler": function(response) {
            alert("Payment Successful: " + response.razorpay_payment_id);
            window.location.href = "{{ route('home') }}";
        }
    };

    var rzp = new Razorpay(options);

    document.getElementById('rzp-button').onclick = function(e) {
        rzp.open();
        e.preventDefault();
    }
</script>
<script>
    var options = {
        "key": "{{ config('services.razorpay.key') }}",
        "amount": "{{ $tournament->entry_fee * 100 }}",
        "currency": "INR",
        "name": "Tournament Registration",
        "description": "{{ $tournament->name }}",
        "order_id": "{{ $order['id'] }}", // ✅ VERY IMPORTANT

        "handler": function (response) {

            // ✅ Send data to backend for verification
            fetch("{{ route('payment.verify') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert("Payment Verified Successfully ✅");
                    window.location.href = "{{ route('home') }}";
                } else {
                    alert("Payment verification failed ❌");
                }
            });
        }
    };

    var rzp = new Razorpay(options);

    document.getElementById('rzp-button').onclick = function(e) {
        rzp.open();
        e.preventDefault();
    }
</script>
