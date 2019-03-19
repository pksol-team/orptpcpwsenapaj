;(function($, acf_relationship_edit, acf_relationship_edit_pro_iframe, undefined) {

    $(document).ready(function() {
        if( typeof acf_relationship_edit_pro_iframe.post_saved === 'undefined' || acf_relationship_edit_pro_iframe.post_saved != "1")
            return;

        // Get the ACF field identifier from the parent window
        var parent_acf_field_identifier = acf_relationship_edit.get_parent_acf_field_identifier();
        if( !parent_acf_field_identifier ) return;

        var $parent_jquery = acf_relationship_edit.get_parent_jQuery();
        if( !$parent_jquery ) return;

        // Get current post ID and trigger an event to the parent window
        var $post_id_input = $('form#post input[name="post_ID"]');
        if( $post_id_input.length === 1 && $post_id_input.val() != '') {
            $parent_jquery('body').trigger(
                'acf-relationship-edit/edited',
                [
                    parent_acf_field_identifier, // the original ACF field identifier
                    {
                        post_id: parseInt( $post_id_input.val() ),
                        post_type: $('form#post input[name="post_type"]').val(),
                        post_title: $('form#post input[name="post_title"]').val()
                    }
                ]
            );
        }
    });
})(jQuery, window.acf_relationship_edit || {}, window.acf_relationship_edit_pro_iframe || {});
