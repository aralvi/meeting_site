     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false"
    data-stripe-publishable-key="{{ $specialist->stripe_public_key }}" id="payment-form">
    @csrf
    <input type="hidden" name="stripe_public_key" value="{{ $specialist->stripe_public_key }}">
    <div class=' row'>
        <div class='col-md-12 form-group required'>
            <label class='control-label'>Name on Card</label> <input class='form-control border-bottom' size='4' type='text' placeholder="ex. ewdtech">
        </div>
    </div>

    <div class=' row'>
        <div class='col-md-6 form-group  required'>
            <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control border-bottom card-number'
                size='20' type='text' placeholder="ex. 4242424242424242">
        </div>
        <div class='col-md-6 form-group  required'>
            <label class='control-label'>Amount</label> <input autocomplete='off' class='form-control border-bottom ' name="amount"
                type='number' value="{{ $amount }}" placeholder="ex. $100 (USD)">
        </div>
    </div>

    <div class=' row'>
        <div class='col-sm-12 col-md-4 form-group cvc required'>
            <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control border-bottom card-cvc'
                placeholder='ex. 311' size='4' type='text'>
        </div>
        <div class='col-sm-12 col-md-4 form-group expiration required'>
            <label class='control-label'>Expiration Month</label> <input class='form-control border-bottom card-expiry-month'
                placeholder='MM' size='2' type='text'>
        </div>
        <div class='col-sm-12 col-md-4 form-group expiration required'>
            <label class='control-label'>Expiration Year</label> <input class='form-control border-bottom card-expiry-year'
                placeholder='YYYY' size='4' type='text'>
        </div>
    </div>

    <div class=' row'>
        <div class='col-md-12 error form-group d-none'>
            <div class='alert-danger alert'></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success btn-lg btn-block submit_payment">Pay Now</button>
        </div>
    </div>

</form>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function (e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=number]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
                $inputs.removeClass('border border-danger');
            $errorMessage.addClass('d-none');

            $('.text-danger').removeClass('text-danger');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.addClass('border border-danger');
                    $input.parent().addClass('text-danger');
                    $errorMessage.removeClass('d-none');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('d-none')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $.ajax({
                    type: 'post',
                    url: "{{ route('stripe.post') }}",
                    data: $form.serialize(),
                    success: function (data) {
                        swal({
                            icon: "success",
                            text: "{{ __('Payment submit successfully') }}",
                            icon: 'success'
                        });
                    }, 

                })
                // $form.get(0).submit();
            }
        }

    });


</script>
