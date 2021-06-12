Stripe.setPublishableKey('pk_test_51IwAV3DCfpIT9YMsghfK6th7rQ4G0xHR5jzY1AM4qmTD2ZfYe8b1In73e0upiUM1i90M2pMjghCVQEc8tcN2n0o500ym7wsJGx');
$(document).ready(function() {
    $("#payment_form").submit(function(event) {
        $('#payment_confirm').attr("disabled", "disabled");
        Stripe.createToken({ 
            number: $('#card_number').val(),
            cvc: $('#card_cvc').val(),
            exp_month: $('#exp_month').val(),
            exp_year: $('#exp_year').val()
        }, handleStripeResponse);
        return false;
    });
});

function handleStripeResponse(status, response) {
    console.log(JSON.stringify(response));
    if(response.error) {
        $('#payment_confirm').removeAttr("disabled");
        $(".payment_errors").html(response.error.message);
    } else {
        var pay_form = $("#payment_form");
        var stripeToken = response['id'];
        pay_form.append("<input type='hidden' name='stripeToken' value='" + stripeToken + "' />");
        pay_form.get(0).submit();
    }
}