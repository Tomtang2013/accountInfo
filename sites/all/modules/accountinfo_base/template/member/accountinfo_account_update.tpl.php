<?php 
    drupal_add_js(drupal_get_path('module','accountinfo_base').'/js/common/bootstrap-typeahead.js');
    drupal_add_js(drupal_get_path('module','accountinfo_base').'/js/member/accountinfo_account_update.js');
    drupal_add_css(drupal_get_path('theme','accountInfo').'/css/docs.min.css');
    
    global $base_url;
    $account_auto_complete_url =  $base_url .'/accountinfo/account_auto_complete';
    $account_update_submit_url =  $base_url .'/accountinfo/account_update_submit';

?> 
<input type="hidden" id="account-auto-complete-url" 
       value="<?php print $account_auto_complete_url;?>"/>
<input type="hidden" id="account-update-submit-url" 
       value="<?php print $account_update_submit_url;?>"/>
<div class="row" >
    <div class="col-lg-10 col-lg-offset-1" >
        <div class="form-horizontal">
            <fieldset>
                <!-- Form Name -->
                <legend><strong>账户信息修改</strong></legend>
                <div  class="input-group account-form-item ">
                    <span class="input-group-addon">账号:</span>
                    <input id="account_input_box" type="text" class="form-control"
                          autocomplete="off" placeholder="账号" data-provide="typeahead">
                </div>
                <div class="input-group account-form-item">
                    <span class="input-group-addon">密码:</span>
                    <input id="account_update_pass" type="text" class="form-control" placeholder="密码">
                </div>

                <div class="input-group account-form-item">
                    <span class="input-group-addon">邮箱:</span>
                    <input id="account_update_email"  type="text" class="form-control" placeholder="邮箱@">
                </div>

                <div class="input-group account-form-item">
                    <span class="input-group-addon">备注:</span>
                    <textarea id="account_update_comment"  type="text" class="form-control" placeholder="备注"></textarea>
                </div>

                <!-- Button (Double) -->
                <div class="control-group account-form-item">
                    <div class="controls col-lg-3" style="margin-top: 10px;padding-left:0px;">
                        <button id="account_update_submit"class="btn btn-success">提交</button>
                        <button id="account_update_reset"  class="btn btn-primary">取消</button>
                    </div>
                    <div id="account-update-msg-box" class="bs-callout col-lg-9" 
                         style="height:34px;padding-top: 5px; visibility:hidden;">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>