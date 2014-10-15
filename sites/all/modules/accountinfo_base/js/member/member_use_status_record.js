jQuery(function() {
    jQuery('#member-use-status-submit-btn').click(function() {
        var use_status = [];
        var use_status_row = {};
        var idx = 1;
        jQuery('#memeber_use_status_tbody').find('tr').each(function(){
            var identfy = jQuery(this).find('.memeber_status_identfy').val();
            var account_name = jQuery(this).find('.memeber_status_account_name').text();
            var status = jQuery(this).find('input[name=optionsRadios'+idx+']:radio:checked').val();
            var cost = jQuery(this).find('.allocation-cost-number').val();
            
            use_status_row = {
                identfy:identfy,
                account_name:account_name,
                status:status,
                cost:cost
            };
            use_status.push(use_status_row);
            idx++;
        });
        var url = jQuery('#member-use-status-submit-url').val();
        jQuery.post(url,{use_status:use_status},
            function(rst){
                console.log(rst.status);
            }
        );
    });
    
    jQuery('#member-use-status-reset-btn').click(function() {
        console.log('member-use-status-reset-btn');
        jQuery('.allocation-cost-number').each(function(){
            jQuery(this).val('');
        });
        jQuery('.member_use_status_radio').each(function(){
             jQuery(this).attr('checked', false);
        });
    }); 
});
