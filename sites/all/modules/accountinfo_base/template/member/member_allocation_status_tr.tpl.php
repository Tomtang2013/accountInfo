<?php
    $idx = $row['idx'];
    $account_name = $row['account_name'];
    $password = $row['password'];
    $company_name = $row['company_name'];
    $company_key_word = $row['company_key_word'];
    $page_number = $row['page_number'];
?> 
<tr  style="padding:5px 0 5px 0;">
    <td > <?php print $idx; ?></td>
    <td > <?php print $account_name; ?></td>
    <td > <?php print $password; ?></td>
    <td > <?php print $company_name; ?></td>
    <td > <?php print $company_key_word; ?></td>
    <td > <?php print $page_number; ?> </td>
</tr >