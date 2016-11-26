<?php

function hf_required_hf_plugin_admin_notice(){
?>    
    <div class="error">
        <p>Hubsine Marketplace is enabled but not effective. It requires Hubsine Framework in order to work.</p>
    </div>
<?php

    return;
}


function hf_required_wc_admin_notice(){
?>
<div class="error">
    <p><?php echo HM_PLUGIN_NAME; ?> is enabled but not effective. It requires Woocommerce in order to work.</p>
</div>
<?php

    return;
}