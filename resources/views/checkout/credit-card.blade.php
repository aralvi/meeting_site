<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@php
$stripe_key = $specialist->stripe_public_key;
@endphp
{{-- <form action="{{route('checkout.credit-card')}}" method="post" id="payment-form">
@csrf
--}}

<div class="form-group">
    <div class="card-header">
        <label for="card-element">
            Enter your credit card information
        </label>
    </div>
    <div class="card-body">
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
        <input type="hidden" name="plan" value="" />
    </div>
</div>
<div class="card-footer">
    <button id="card-button" class="btn btn-dark" type="submit" data-secret="{{ $intent }}"> Pay </button>
</div>
</form>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    var stripe = Stripe('{{ $stripe_key }}', {
        locale: 'en'
    }); // Create a Stripe client.
    var elements = stripe.elements(); // Create an instance of Elements.
    var cardElement = elements.create('card', {
        style: style
    }); // Create an instance of the card Element.
    var cardButton = document.getElementById('card-button');
    var clientSecret = cardButton.dataset.secret;

    cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

    // Handle real-time validation errors from the card Element.
    cardElement.addEventListener('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
            .then(function (result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    swal({
                        icon: "success",
                        text: "{{ __('Payment submit successfully') }}",
                        type: 'success'
                    });
                    // console.log(result);
                    // form.submit();
                }
            });
    });

</script>
