<?php
function accountinfo_member_status_record_call_back() {
    $action_name = theme('accountinfo_member_status_record');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

function render_status_radio(){
    return  theme('member_status_radio',array('items' => array('正常使用','登录异常','支付宝异常')));
}

function render_status_cost_input(){
    return '<input type="text" class="form-control" id="allocationCostNumber" placeholder="金额,例:421元"/>';
                            
}
