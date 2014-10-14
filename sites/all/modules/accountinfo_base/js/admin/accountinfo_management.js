jQuery(function() {
    jQuery('#edit-submit-reset').click(function() {
        jQuery('#edit-file-upload').val('');
    });

    jQuery('#edit-submit-export').click(function() {
        var link = jQuery('#account-export-url').val();
        location.href = link;
    });
    
    jQuery('#submit-allocation-total-number').click(function() {
        var input = jQuery('#allocation-total-number');
        var input_div = jQuery('#allocation-total-number-box');
        var url = jQuery('#account-submit-total-number-url').val();
        var allocationTotalNumber = jQuery.trim(input.val());
        
        if(verify_total_number(allocationTotalNumber)){
            jQuery.post(url,{'allocationTotalNumber':allocationTotalNumber},
            function(rst){
                if(rst.status == 'success'){
                    input_div.removeClass('has-error');
                    input_div.addClass('has-success');
//                    jQuery('#submit-status').removeClass('icon_error');
//                    jQuery('#submit-status').addClass('icon_ok');
//                    jQuery('#submit-status').css({visibility:"visible"});
                }
            });
        } else {
            input_div.removeClass('has-success');
            input_div.addClass('has-error');
//            jQuery('#submit-status').removeClass('icon_ok');
//            jQuery('#submit-status').addClass('icon_error');
//            jQuery('#submit-status').css({visibility:"visible"});
        }
    });
});

function verify_total_number(value) {
    var reg1 = /^\d+$/;
    if (value.match(reg1) == null)
        return false;
    else
        return true;
}
