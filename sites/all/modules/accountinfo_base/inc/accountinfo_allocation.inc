<?php


function accountinfo_allocation_call_back() {
    $action_name = theme('accountinfo_allocation');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

