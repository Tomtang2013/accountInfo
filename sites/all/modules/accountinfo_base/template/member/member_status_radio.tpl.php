<div>
<?php $index=0; foreach($items as $item): ?>
<span class="radio" style="display:inline;padding-left:5px;">
  <label>
    <input type="radio" name="optionsRadios<?php print $idx;?>" 
           class="member_use_status_radio"
           <?php if($index == 0):?>
            checked ="checked"
           <?php endif;?>
           value="<?php print $item;?>" >
    <?php print $item;?> 
  </label>
</span>

<?php  $index++; endforeach; ?>
</div>