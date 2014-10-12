<?php 
$get_q = $_GET['q'];
global $user; if($user->uid > 0):?>
<div>
    <h4>管理员</h4>
    <ul class="nav nav-pills nav-stacked" role="tablist" style="max-width: 300px;">
        <?php print rend_left_menu_li($get_q,'小号管理','accountinfo/config')?>
        <li role="presentation"><a href="#">小号分配</a></li>
        <li role="presentation"><a href="#">小号分配(追加)</a></li>
        <li role="presentation"><a href="#">小号(状态)查看</a></li>
    </ul>
</div>
<div style="padding-top: 10px;">
    <h4>成员</h4>
    <ul class="nav nav-pills nav-stacked" role="tablist" style="max-width: 300px;">
        <li role="presentation"><a href="#">分配情况</a></li>
         <li role="presentation"><a href="#">使用状态录入</a></li>
        <li role="presentation"><a href="#">小号导出</a></li>
        <li role="presentation"><a href="#">小号修改</a></li>
    </ul>
</div>
<?php endif ?>