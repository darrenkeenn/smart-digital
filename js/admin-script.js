jQuery(document).ready(function () {

  if (jQuery('body').hasClass('post-type-service')) {
    console.log('Running scripts for: post-type-service');
    var selectedIcon = jQuery('#_cmb_icon').val();

    jQuery('#_cmb_icon').closest('.rwmb-select-wrapper').before('<div class="rwmb-field rwmb-icon-preview"><div class="rwmb-label">&nbsp;</div><div class="rwmb-input"><i class="fa-4x fa ' + selectedIcon + '"></i></div></div>');

    jQuery('#_cmb_icon').change(function (e) {
      jQuery('.rwmb-icon-preview i').removeClass();
      jQuery('.rwmb-icon-preview i').addClass('fa fa-4x ' + e.target.value);
    });

  }
});
