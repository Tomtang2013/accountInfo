<?php
function accountinfo_member_allocation_status_call_back() {
    $action_name = theme('accountinfo_member_allocation_status');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

