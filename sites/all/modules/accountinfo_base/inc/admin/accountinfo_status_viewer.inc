<?php
function accountinfo_status_viewer_call_back() {
    $action_name = theme('accountinfo_status_viewer');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

