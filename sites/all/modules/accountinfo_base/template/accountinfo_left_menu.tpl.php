<?php 
$get_q = $_GET['q'];
global $user; if($user->uid > 0):?>
<div>
    <h4>管理员</h4>
    <ul class="nav nav-pills nav-stacked" role="tablist" style="max-width: 300px;">
        <?php print rend_left_menu_li($get_q,'账号管理','accountinfo/config')?>
        <?php print rend_left_menu_li($get_q,'账号分配','accountinfo/allocation')?>
        <?php print rend_left_menu_li($get_q,'账号分配(追加)','accountinfo/add_allocation')?>
        <?php print rend_left_menu_li($get_q,'账号(状态)查看','accountinfo/status_viewer')?>
    </ul>
</div>
<div style="padding-top: 10px;">
    <h4>成员</h4>
    <ul class="nav nav-pills nav-stacked" role="tablist" style="max-width: 300px;">
        <li role="presentation"><a href="#">分配情况</a></li>
         <li role="presentation"><a href="#">使用状态录入</a></li>
        <li role="presentation"><a href="#">账号导出</a></li>
        <li role="presentation"><a href="#">账号修改</a></li>
    </ul>
</div>
<?php endif ?>