<?php
function accountinfo_account_update_call_back() {
    $action_name = theme('accountinfo_account_update');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

function account_auto_complete_call_back(){
    $data = array(generat_account('Tom'),
        generat_account('Tracy'),
        generat_account('Tony'),
        generat_account('Jimmy'),
        generat_account('Jenny'),
        generat_account('Bo'),
        generat_account('Bob'));
    echo drupal_json_output(array('accounts'=>$data));
}

function generat_account($account_name){
    $account = new stdClass();
    $account->account = $account_name;
    $account->password ='password_'.$account_name;
    $account->email =$account_name.'@accountInfo.com';
    $account->comment = 'This is comment for '.$account_name;
    return $account;
}

function account_update_submit_call_back(){
    $account = $_POST['account'];
    echo drupal_json_output(array('status'=>'success'));
}