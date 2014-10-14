<?php

require_once dirname(__FILE__) . '/../../lib/PHPExcel/PHPExcel/IOFactory.php';

function accountinfo_management_config_call_back() {
    $action_name = theme('accountinfo_config');
    $pageContent = theme('right_content', array('page_content' => $action_name, 'is_html' => true));
    return $pageContent;
}

function accountinfo_account_upload_form() {
    $form = array();
    // If this #attribute is not present, upload will fail on submit
    $form['#attributes']['enctype'] = 'multipart/form-data';

    $form['file_upload'] = array(
        '#type' => 'file',
        '#prefix' => '<div class="input-group">',
    );

    $form['submit_upload'] = array(
        '#type' => 'submit',
        '#value' => '上传',
        '#prefix' => '<span class="input-group-btn">',
        '#attributes' => array(
            'class' => array(
                'btn btn-primary',
            ),
        ),
    );

    $form['submit_reset'] = array(
        '#type' => 'button',
        '#value' => '清空',
    );

    $form['submit_export'] = array(
        '#type' => 'button',
        '#value' => '导出所有',
        '#attributes' => array(
            'class' => array(
                'btn btn-success',
            ),
        ),
        '#suffix' => '</span></div>',
    );
    return $form;
}

function accountinfo_account_upload_form_validate($form, &$form_state) {
    $file = file_save_upload('file_upload', array(
        'file_validate_is_excel' => array(),
        'file_validate_extensions' => array('CSV XLSX XLS'),
    ));

    if ($file) {
        if ($file = file_move($file, 'public://')) {
            $form_state['storage']['file'] = $file;
        } else {
            form_set_error('file', t("Failed to write the uploaded file to the site's file folder."));
        }
    } else {
        form_set_error('file', t('No file was uploaded.'));
    }
}

function accountinfo_account_upload_form_submit($form, &$form_state) {
    $file = $form_state['storage']['file'];
    unset($form_state['storage']['file']);
    $file->status = FILE_STATUS_PERMANENT;
    $file_path = drupal_realpath($file->uri);
    upload_account_file($file_path);
    file_delete($file);
}

function upload_account_file($file_path) {
    $objPHPExcel = PHPExcel_IOFactory::load($file_path);
    $currentSheet = $objPHPExcel->getActiveSheet();
    $allRow = $currentSheet->getHighestRow();
    $allColumn = $currentSheet->getHighestColumn();

    $rows = array();
    for ($currentRow = 2; $currentRow <= $allRow; $currentRow++) {
        $row = new stdClass();
        for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
            $address = $currentColumn . $currentRow;
            $value = $currentSheet->getCell($address)->getValue();
            $row->$currentColumn = $value . '';
        }
        $rows[] = $row;
    }
}

function prepare_data(){
    $file_path = drupal_get_path('module','accountinfo_base').'/lib/PHPExcel/example.xlsx';
    $objPHPExcel = PHPExcel_IOFactory::load($file_path);
    $currentSheet = $objPHPExcel->getActiveSheet();
    $allRow = $currentSheet->getHighestRow();
    $allColumn = $currentSheet->getHighestColumn();

    $rows = array();
    for ($currentRow = 2; $currentRow <= $allRow; $currentRow++) {
        $row = new stdClass();
        for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
            $address = $currentColumn . $currentRow;
            $value = $currentSheet->getCell($address)->getValue();
            $row->$currentColumn = $value . '';
        }
        $rows[] = $row;
    }
    return  $rows;
}

function export_account_file(){
    $fileName = 'account_info';
    $date = date("Y_m_d",time());
    $fileName .= "_{$date}.xls";
    $data = prepare_data();
    
    $headArr = array("account","password","email","comment");
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
//    $fileName = iconv("utf-8", "gb2312", $fileName);
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$fileName.'"');
    header('Cache-Control: max-age=0');

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
}

function save_account_config_ajax(){
    $allocationTotalNumber = $_POST['allocationTotalNumber'];
    variable_set('allocationTotalNumber', trim($allocationTotalNumber));
    echo drupal_json_output(array('status'=>'success'));
}