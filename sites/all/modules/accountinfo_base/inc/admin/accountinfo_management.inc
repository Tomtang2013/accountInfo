<?php
function accountinfo_management_config_call_back() {
    $action_name = theme('accountinfo_config');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

