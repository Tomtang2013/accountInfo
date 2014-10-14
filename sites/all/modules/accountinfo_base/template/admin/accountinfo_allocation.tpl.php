<?php
?>
<div class="row">
    <div class="col-lg-8">
        <label>任务导入</label>
        <div class="input-group">
            <input id="file-1" type="file" multiple='false'class="form-control" data-preview-file-type="csv,excel">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">上传</button>
                <button class="btn btn-default" type="button">清空</button>
            </span>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-8" style='padding-top: 5px;'>
        <span class="label label-warning">请选择导入的文本文件为以下类型：</span>
        <span class="label label-success">CSV</span>
        <span class="label label-success">XSL</span>
        <span class="label label-success">XLSX</span>
    </div>
</div>
<hr/>
<div class="row" >
    <div class="col-lg-10" >
        <button class="btn btn-primary" type="button">小号分配</button>
        <div class="panel panel-success" style="margin-top: 5px;">
            <div class="panel-heading">
                <h3 class="panel-title">分配结果 : <?php print date('Y-m-d',time());?></h3>
            </div>
            <div class="panel-body" >
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>员工账号</th>
                            <th>分配小号数量</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>