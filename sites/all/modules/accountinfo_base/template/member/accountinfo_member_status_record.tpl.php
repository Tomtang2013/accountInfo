<?php 
    drupal_add_js(drupal_get_path('module','accountinfo_base').'/js/member/member_use_status_record.js');
   
    $rows = array(
        array('idx'=>'1','account_name'=>'AliBabaTestAccount1'),
        array('idx'=>'2','account_name'=>'AliBabaTestAccount2'),
        array('idx'=>'3','account_name'=>'AliBabaTestAccount3'),
        array('idx'=>'4','account_name'=>'AliBabaTestAccount4'),
        array('idx'=>'5','account_name'=>'AliBabaTestAccount5'),
        array('idx'=>'6','account_name'=>'AliBabaTestAccount6'),
        
    );
    global $base_url;
    $member_use_status_submit_url =  $base_url .'/accountinfo/member_status_record_submit';
?>
<div class="row" >
    <input type="hidden" id="member-use-status-submit-url" 
       value="<?php print $member_use_status_submit_url;?>"/>
    <div class="col-lg-11" >
        <div class="panel panel-success" style="margin-top: 5px;">
            <div class="panel-heading">
                <h3 class="panel-title">当日账号一览 : <?php print date('Y-m-d', time()); ?></h3>
            </div>
            <div class="panel-body" >
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>账号名</th>
                            <th>使用状态</th>
                            <th>金额(元)</th>
                        </tr>
                    </thead>
                    <tbody id="memeber_use_status_tbody">
                        <?php 
                            foreach ( $rows as $row){
                                print render_member_status_tr($row);
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <span class="col-md-offset-10 ">
            <button class="btn btn-primary" type="button" id="member-use-status-submit-btn">提交</button>
            <button class="btn btn-primary" type="button" id="member-use-status-reset-btn">清空</button>
         </span>   
    </div>
</div>
