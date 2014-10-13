<?php
?>

<div class="row" >
    <div class="col-lg-10" >
        <button class="btn btn-primary" type="button">追加分配</button>
        <div class="panel panel-success" style="margin-top: 5px;">
            <div class="panel-heading">
                <h3 class="panel-title">账号分配结果 : <?php print date('Y-m-d',time());?></h3>
            </div>
            <div class="panel-body" >
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>员工账号</th>
                            <th>已分配账号数量</th>
                            <th>追加账号数量</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  >
                            <td style=" vertical-align:middle;">1</td>
                            <td style=" vertical-align:middle;">Tom.tang</td>
                            <td style=" vertical-align:middle;">15</td>
                            <td> 
                                <input type="text" class="form-control" id="allocationAddNumber" placeholder="追加账号数量"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>