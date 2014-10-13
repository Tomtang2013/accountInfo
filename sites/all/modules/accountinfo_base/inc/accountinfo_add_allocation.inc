<?php


function accountinfo_add_allocation_call_back() {
    $action_name = theme('accountinfo_add_allocation');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

