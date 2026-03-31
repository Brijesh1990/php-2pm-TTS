<script src="https://js.stripe.com/v3/"></script>

<form  method="post" id="payment-form">
@csrf  
<div id="payment-element"></div>
  <button id="submit">Pay Now</button>
</form>

<script>
const stripe = Stripe("{{ env('STRIPE_KEY') }}");

fetch('/create-payment-intent')
.then(res => res.json())
.then(data => {
    const elements = stripe.elements({ clientSecret: data.clientSecret });
    const paymentElement = elements.create("payment");
    paymentElement.mount("#payment-element");

    document.getElementById("payment-form").addEventListener("submit", async (e) => {
        e.preventDefault();

        const {error} = await stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: "/success"
            }
        });

        if (error) {
            alert(error.message);
        }
    });
});
</script>