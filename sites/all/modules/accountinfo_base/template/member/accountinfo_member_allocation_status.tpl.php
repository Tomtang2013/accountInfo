<?php 
    drupal_add_js(drupal_get_path('module','accountinfo_base').'/js/member/member_allocation_status.js');
   
    $rows = array(
        array('idx'=>1,'account_name'=>'AliBabaTestAccount1',
            'password'=>'admin123','company_name'=>'雅诗兰黛',
            'company_key_word'=>'雅诗兰黛眼霜','page_number'=>5),
        array('idx'=>2,'account_name'=>'AliBabaTestAccount2',
            'password'=>'admin123','company_name'=>'贝因美',
            'company_key_word'=>'贝因美3岁以下','page_number'=>3),
        array('idx'=>3,'account_name'=>'AliBabaTestAccount3',
            'password'=>'admin123','company_name'=>'康恩贝',
            'company_key_word'=>'康恩贝8～5岁','page_number'=>6),
        array('idx'=>4,'account_name'=>'AliBabaTestAccount4',
            'password'=>'admin123','company_name'=>'健力宝',
            'company_key_word'=>'健力宝橙味饮料','page_number'=>2),
    );
    global $base_url;
    $member_allocation_status_export_url =  $base_url .'/accountinfo/export_member_allocation_file';
?>
<input type="hidden" id="member-allocation-status-export-url" 
       value="<?php print $member_allocation_status_export_url;?>"/>
<div class="row" >
    <div class="col-lg-11" >
        <button class="btn btn-primary" type="button" id="member-allocation-status-export-btn">账号导出</button>
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
                            <th>密码</th>
                            <th>商品名</th>
                            <th>关键字</th>
                            <th>检索页</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ( $rows as $row){
                                print render_member_allocation_status_tr($row);
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>