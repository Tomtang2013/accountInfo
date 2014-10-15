<?php
require_once dirname(__FILE__) . '/../../lib/PHPExcel/PHPExcel/IOFactory.php';

function accountinfo_member_allocation_status_call_back() {
    $action_name = theme('accountinfo_member_allocation_status');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

function render_member_allocation_status_tr($row){
    return  theme('member_allocation_status_tr',array('row' => $row));
}

function export_member_allocation_file(){
    $fileName = 'member_allocation';
    $date = date("Y_m_d",time());
    $fileName .= "_{$date}.xls";
    $data = fake_row_data();
    
    $headArr = array("account","password","company_name","company_key_word","page_number");
    $objPHPExcel = new PHPExcel();
    $objProps = $objPHPExcel->getProperties();
    $key = ord("A");
    foreach($headArr as $v){
        $colum = chr($key);
        $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
        $key += 1;
    }
    
    $column = 2;
    $objActSheet = $objPHPExcel->getActiveSheet();
    foreach($data as $key => $rows){ 
        $span = ord("A");
        foreach($rows as $keyName=>$value){
            $j = chr($span);
            $objActSheet->setCellValue($j.$column, $value);
            $span++;
        }
        $column++;
    }
    accountinfo_base_export_file($fileName,$objPHPExcel);
}

function fake_row_data(){
    $rows = array(
        array('account_name'=>'AliBabaTestAccount1',
            'password'=>'admin123','company_name'=>'雅诗兰黛',
            'company_key_word'=>'雅诗兰黛眼霜','page_number'=>5),
        array('account_name'=>'AliBabaTestAccount2',
            'password'=>'admin123','company_name'=>'贝因美',
            'company_key_word'=>'贝因美3岁以下','page_number'=>3),
        array('account_name'=>'AliBabaTestAccount3',
            'password'=>'admin123','company_name'=>'康恩贝',
            'company_key_word'=>'康恩贝8～5岁','page_number'=>6),
        array('account_name'=>'AliBabaTestAccount4',
            'password'=>'admin123','company_name'=>'健力宝',
            'company_key_word'=>'健力宝橙味饮料','page_number'=>2),
    );
    return $rows;
}