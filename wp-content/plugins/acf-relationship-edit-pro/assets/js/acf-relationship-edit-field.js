;(function($, acf_relationship_edit, acf_relationship_edit_field, undefined) {

    // Bail here if acf is not defined
    if( typeof acf === 'undefined' ) return;

    /**
     * Common function to open lightbox on Relationship fields
     *
     * @param e: Event
     */
    var open_lightbox = function(e) {
        var $link = $(e.target);
        var post_id = $link.closest('span.acf-rel-item').attr('data-id');
        console.log(post_id);
        var $ACF_field = $link.closest('div[data-acf-re-uniqid]');
        var acf_field_uniqid = '';
        if( $ACF_field.length === 1 )
            acf_field_uniqid = $ACF_field.attr('data-acf-re-uniqid');

        var url = acf_relationship_edit_field.admin_edit_url + '?post=' + post_id + '&action=edit';
        url+= '&acf_re_original_field_uniqid=' + acf_field_uniqid;
        url+= '&acf_re_from_content_type=__acf_re_from_content_type__';
        url+= '&acf_re_from_content_ID=__acf_re_from_content_ID__';
        url+= '&TB_iframe=1';

        // Check whether we are in a media modal
        var $media_modal = $link.parents('.media-modal:first');
        if( $media_modal.length == 1 ) { // Yes we are!
            url = url.replace(
                '__acf_re_from_content_type__',
                'attachment'
            );
            url = url.replace(
                '__acf_re_from_content_ID__',
                $media_modal.find('div.media-frame-content div.attachment-details').attr('data-id')
            );
        } else {
            url = url.replace(
                '__acf_re_from_content_type__',
                $('form#post input[name="post_type"]').val()
            );
            url = url.replace(
                '__acf_re_from_content_ID__',
                $('form#post input[name="post_ID"]').val()
            );
        }

        tb_show( acf_relationship_edit_field.i18n.edit_post, url );
    };

    /**
     * Listen to the event triggered from the `edit-on-the-fly` iframe
     */
    $(document).on('acf-relationship-edit/edited', function(e, field_uniq_id, post_data ) {
        // Update post title
        if( typeof post_data === 'object' && typeof post_data.post_id !== 'undefined' && typeof post_data.post_title !== 'undefined') {
            $('span.acf-rel-item[data-id="'+ parseInt( post_data.post_id ) +'"]').contents().filter(function() {
                if (this.nodeType === Node.TEXT_NODE) {
                    this.nodeValue = post_data.post_title;
                }
            });
        }

        // Close lightbox
        tb_remove();
    });



    $(document).ready(function() {
        /**
         * Hide admin bar and admin menu if we're in an iframe
         */
        if( acf_relationship_edit.get_parent_iframe() !== false ) {
            acf_relationship_edit.hide_admin_bar();
            acf_relationship_edit.hide_admin_menu();
        }

        $(document).on( 'click', 'a.acf-relationship-edit', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            open_lightbox(e);
        });

        /**
         * Perform some stuff on relationship field
         * as soon as they are created
         */
        function on_acf_relationship_field_ready($el, field_type) {
            // Add a class (just for CSS purpose)
            $el.attr('data-acf-relationship-edit-enabled', true);

            // Add a unique ID for the field
            $el.attr('data-acf-re-uniqid', acf_relationship_edit.generate_random_id() );

            $el.on( 'hover', 'span.acf-rel-item', function() {
                var $span = $(this);

                var $edit_link = $span.find('[data-action="acf-relationship-edit"]');
                if( $edit_link.length > 0 )
                    return;

                var $link = $('<a></a>')
                    .attr('href', '#')
                    .addClass('acf-icon -pencil small dark acf-relationship-edit')
                    .text('edit')
                    .attr('data-action', 'acf-relationship-edit');
                $span.append( $link );
            });
        }

        // Relationship fields
        acf.add_action('load_field/type=relationship', function( $el ){
            on_acf_relationship_field_ready( $el, 'relationship' );
        });

        acf.add_action('append_field/type=relationship', function( $el ){
            on_acf_relationship_field_ready( $el, 'relationship' );
        });
    });
})(jQuery, window.acf_relationship_edit || {}, window.acf_relationship_edit_pro_field || {});