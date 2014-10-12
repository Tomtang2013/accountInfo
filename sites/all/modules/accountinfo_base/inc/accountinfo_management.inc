<?php


function accountinfo_management_config_call_back() {
    $config = theme('accountinfo_config');
    $pageContent = theme('right_content',array('page_content' => $config,'is_html'=>true));
    return $pageContent;
}

