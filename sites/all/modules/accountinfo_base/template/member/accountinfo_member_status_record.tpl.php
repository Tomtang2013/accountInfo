<?php ?>
<div class="row" >
    <div class="col-lg-11" >
        <div class="panel panel-success" style="margin-top: 5px;">
            <div class="panel-heading">
                <h3 class="panel-title">当日账号一览 : <?php print date('Y-m-d', time()); ?></h3>
            </div>
            <div class="panel-body" >
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>账号名</th>
                            <th>使用状态</th>
                            <th>金额(元)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  style="padding:5px 0 5px 0;">
                            <td style=" vertical-align:middle;">1</td>
                            <td style=" vertical-align:middle;">AliBabaTestAccount1</td>
                            <td style=" vertical-align:middle;"> <?php print render_status_radio();?></td>
                            <td > <?php print render_status_cost_input();?></td>
                        </tr >
                        <tr  style="padding:5px 0 5px 0;" >
                            <td style=" vertical-align:middle;">2</td>
                            <td style=" vertical-align:middle;">AliBabaTestAccount2</td>
                            <td style=" vertical-align:middle;"> <?php print render_status_radio();?></td>
                             <td > <?php print render_status_cost_input();?></td>
                        </tr>
                        <tr   style="padding:5px 0 5px 0;">
                            <td style=" vertical-align:middle;">3</td>
                            <td style=" vertical-align:middle;" >AliBabaTestAccount3</td>
                            <td style=" vertical-align:middle;"> <?php print render_status_radio();?></td>
                            <td > <?php print render_status_cost_input();?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>