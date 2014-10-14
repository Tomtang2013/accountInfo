<?php 
    drupal_add_js(drupal_get_path('module','accountinfo_base').'/js/admin/accountinfo_management.js');
    global $base_url;
    
    $account_export_url = $base_url .'/export_account_file';
    $account_submit_total_number_url = $base_url .'/accountinfo/save_account_config';
?>
<input id="account-export-url" type="hidden" value="<?php print $account_export_url;?>"/>
<input id="account-submit-total-number-url" type="hidden" value="<?php print $account_submit_total_number_url;?>"/>
<div class="row">
    <div class="col-lg-8">
        <label>账号导入</label>
        <?php print drupal_render(drupal_get_form('accountinfo_account_upload_form')) ;?>
    </div>
    <div class="col-lg-8" style='padding-top: 5px;'>
        <span class="label label-warning">请选择导入的文本文件为以下类型：</span>
        <span class="label label-success">CSV</span>
        <span class="label label-success">XSL</span>
        <span class="label label-success">XLSX</span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-lg-8">
        <label>参数设置</label>
         <div class="input-group" id="allocation-total-number-box">
             <input type="text" class="form-control" id="allocation-total-number" 
                    value=" <?php  print variable_get('allocationTotalNumber');?>"
                    placeholder="每次分配账号个数,列:100"></input>
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button" id="submit-allocation-total-number">提交</button>
            </span>
        </div><!-- /input-group -->
        <div  style='padding: 5px 0 5px 0;'> <span class="label label-success">每次从账号池中启用的账号个数(正整数),列:100。</span> </div>
       
    </div>
</div>

    