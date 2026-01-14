$(document).ready(function(){
    // Link generator form validation start
    $("#linkForm").validate({
        rules: {
            amount: "required",
            currency: "required",
            item: "required",
            site: "required",
            gateway: "required",
            semail: {
                required: true,
                email: true
            },
            cemail: {
                required: true,
                email: true
            },
            tw: "required",
            'package[]': { required: true, minlength: 1 },
            du_sales_email: "required"
        }
    });
    // Link generator form validation end

    // Link generator form validation start
    $("#wiretransfer-form").validate({
        rules: {
            fname: "required",
            lname: "required",
            address: "required",
            city: "required",
            country: "required",
            state: "required",
            email: {
                required: true,
                email: true
            },
            phone: "required",
            zip: "required",
            bank_name: "required",
            currency: "required",
            item: "required",
            site: "required",
            gateway: "required",
            pt: "required",
            semail: {
                required: true,
                email: true
            }
        }
    });
    // Link generator form validation end
});