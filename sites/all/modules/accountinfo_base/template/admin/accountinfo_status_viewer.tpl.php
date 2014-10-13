<?php ?>

<div class="row" >
    <div class="col-lg-6" >
        <div class="input-group" >
            <input type="text" class="form-control" id="allocationTotalNumber" placeholder="请输入日期,例:2014-10-10"/>
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">查询</button>
            </span>
        </div><!-- /input-group -->
    </div>
    <div class="col-lg-10" >
        <div class="panel panel-success" style="margin-top: 5px;">
            <div class="panel-heading">
                <h3 class="panel-title">账号一览 : <?php print date('Y-m-d', time()); ?></h3>
            </div>
            <div class="panel-body" >
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>账号名</th>
                            <th>使用状态</th>
                            <th>金额</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  style="padding:5px 0 5px 0;">
                            <td style=" vertical-align:middle;">1</td>
                            <td style=" vertical-align:middle;">AliBabaTestAccount1</td>
                            <td style=" vertical-align:middle;" class="bg-success">正常使用</td>
                            <td> 33656(元)</td>
                        </tr >
                        <tr  style="padding:5px 0 5px 0;" >
                            <td style=" vertical-align:middle;">2</td>
                            <td style=" vertical-align:middle;">AliBabaTestAccount2</td>
                            <td style=" vertical-align:middle;" class="bg-danger">支付宝异常</td>
                            <td> 3356(元)</td>
                        </tr>
                        <tr   style="padding:5px 0 5px 0;">
                            <td style=" vertical-align:middle;">3</td>
                            <td style=" vertical-align:middle;" >AliBabaTestAccount3</td>
                            <td style=" vertical-align:middle;" class="bg-danger">登录异常</td>
                            <td> 13656(元)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>