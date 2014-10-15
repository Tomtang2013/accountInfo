<?php
function accountinfo_account_update_call_back() {
    $action_name = theme('accountinfo_account_update');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}
