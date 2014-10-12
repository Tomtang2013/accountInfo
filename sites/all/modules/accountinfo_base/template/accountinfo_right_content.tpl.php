<div class="region region-sidebar-first well" style='min-height:460px;'>
    <?php
    if ($is_html) {
        print $page_content;
    } else {
        echo drupal_render($page_content);
    }
    ?>
</div>