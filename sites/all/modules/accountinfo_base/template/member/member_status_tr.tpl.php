<?php 
    $idx = $row['idx'];
    $account_name = $row['account_name'];
    $identfy = time();
?> 
<tr  style="padding:5px 0 5px 0;" class="member-status-tr">
    <input class="memeber_status_identfy"  type="hidden" value="<?php print $identfy;?>">
    <td class="memeber_status_idx" style=" vertical-align:middle;"><?php print $idx;?></td>
    <td class="memeber_status_account_name" style=" vertical-align:middle;"><?php print $account_name;?></td>
    <td class="memeber_status_status" style=" vertical-align:middle;"> <?php print render_member_status_radio($idx);?></td>
    <td class="memeber_status_cost" > <?php print render_member_status_cost_input();?></td>
</tr >