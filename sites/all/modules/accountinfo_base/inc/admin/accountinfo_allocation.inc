<?php
require_once dirname(__FILE__) . '/../../lib/PHPExcel/PHPExcel/IOFactory.php';

function accountinfo_allocation_call_back() {
    $action_name = theme('accountinfo_allocation');
    $pageContent = theme('right_content',array('page_content' => $action_name,'is_html'=>true));
    return $pageContent;
}

function accountinfo_task_upload_form() {
    $form = array();
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
        '#suffix' => '</span></div>',
    );

    return $form;
}

function accountinfo_task_upload_form_validate($form, &$form_state) {
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

function accountinfo_task_upload_form_submit($form, &$form_state) {
    $file = $form_state['storage']['file'];
    unset($form_state['storage']['file']);
    $file->status = FILE_STATUS_PERMANENT;
    $file_path = drupal_realpath($file->uri);
    upload_account_task($file_path);
    file_delete($file);
}

function upload_account_task($file_path) {
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
    dd($rows);
}
