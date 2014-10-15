<?php
function accountinfo_member_status_record_call_back() {
    $action_name = theme('accountinfo_member_status_record');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

function accountinfo_member_status_record_submit(){
    $use_status = $_POST['use_status'];
    echo drupal_json_output(array('status'=>'success'));
}

function render_member_status_radio($idx){
    return  theme('member_status_radio',array('idx'=>$idx ,'items' => array('正常使用','登录异常','支付宝异常')));
}

function render_member_status_cost_input(){
    return '<input type="text" class="form-control allocation-cost-number" placeholder="金额,例:421元"/>';
                            
}

function render_member_status_tr($row){
    return  theme('member_status_tr',array('row' => $row));
}
