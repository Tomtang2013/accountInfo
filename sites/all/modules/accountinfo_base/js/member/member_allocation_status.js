jQuery(function() {
     jQuery('#member-allocation-status-export-btn').click(function() {
        var link = jQuery('#member-allocation-status-export-url').val();
        location.href = link;
    });
});
