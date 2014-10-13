<?php ?>
<div class="row">
    <div class="col-lg-8">
        <h4>导入账号</h4>
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
        <span class="label label-success">EXCEL</span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-lg-8">
        <h4>参数设置</h4>
         <div class="input-group">
             <input type="text" class="form-control" id="allocationTotalNumber" placeholder="每次分配账号个数,列:100"/>
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">提交</button>
            </span>
        </div><!-- /input-group -->
        <div  style='padding: 5px 0 5px 0;'> <span class="label label-success">每次从账号池中启用的账号个数。</span> </div>
       
    </div>
</div>

    