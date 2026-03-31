<!DOCTYPE html>
<html>
<head>
    <title>All Payment Methods (UPI, Cards, Net Banking)</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<h2 style="text-align:center;">Pay ₹100</h2>

<div style="text-align:center;">
    <button id="payBtn" style="padding:10px 20px;font-size:18px;">
        Pay Now
    </button>
</div>

<script>
document.getElementById('payBtn').onclick = function () {

    fetch('/create-order', {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            "Content-Type": "application/json"
        }
    })
    .then(res => res.json())
    .then(order => {

        var options = {
            "key": "{{ env('RAZORPAY_KEY') }}",
            "amount": order.amount,
            "currency": "INR",
            "name": "Demo Company",
            "description": "Payment Test",
            "order_id": order.id,

            "handler": function (response) {
                fetch('/payment-success', {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(response)
                })
                .then(res => res.json())
                .then(data => {
                    alert("Payment Successful!");
                    console.log(data);
                });
            },

            "prefill": {
                "name": "Test User",
                "email": "test@example.com",
                "contact": "9999999999"
            },

            "theme": {
                "color": "#3399cc"
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    });
};
</script>

</body>
</html>