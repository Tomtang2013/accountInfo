<div>
<?php $idx=0; foreach($items as $item): ?>
<span class="radio" style="display:inline;padding-left:5px;">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios<?php print $idx;?>" 
           value="<?php print $item;?>" >
    <?php print $item;?> 
  </label>
</span>

<?php  $idx++; endforeach; ?>
</div>