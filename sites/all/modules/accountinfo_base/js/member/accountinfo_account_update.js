jQuery(function() {
    jQuery('#account_update_submit').click(function() {
        var url = jQuery('#account-update-submit-url').val();
        var account = {
            account:jQuery('#account_input_box').val(),
            pass:jQuery('#account_update_pass').val(),
            email:jQuery('#account_update_email').val(),
            comment:jQuery('#account_update_comment').val()
        };
        jQuery.post(url,{account:account},
            function(rst){
                if(rst.status == 'success'){
                    jQuery('#account-update-msg-box').addClass('bs-callout-success');
                    jQuery('#account-update-msg-box').text('修改成功');
                    jQuery('#account-update-msg-box').css('visibility','visible');
                }
            }
        );
    });
    
    jQuery('#account_update_reset').click(function() {
        jQuery('#account_input_box').val('');
        jQuery('#account_update_pass').val('');
        jQuery('#account_update_email').val('');
        jQuery('#account_update_comment').val('');
    });
    
    var accounts = [];
    jQuery('#account_input_box').typeahead({
        source: function(query, process) {
            var url = jQuery('#account-auto-complete-url').val();
            var input = jQuery('#account_input_box').val();
            var data = {key: input};
            jQuery.post(url, data, function(data) {
                accounts = prepare_account_array(data.accounts);
                var account_name_arr = [];
                for(var idx in data.accounts){
                    account_name_arr.push(data.accounts[idx]['account']);
                }
                process(account_name_arr);
            });
        },
         updater: function(item_name) {
             var account =  accounts[item_name];
             set_form_value_by_account(account);
             return account['account'];
         }
    });
    
    function set_form_value_by_account(account){
        jQuery('#account_update_pass').val(account['password']);
        jQuery('#account_update_email').val(account['email']);
        jQuery('#account_update_comment').val(account['comment']);
    }
    
    function prepare_account_array(accounts) {
        var account_arry = {};
        for (var idx in accounts) {
            account_arry[accounts[idx]['account']] = accounts[idx];
        }
        return account_arry;
    }
});
