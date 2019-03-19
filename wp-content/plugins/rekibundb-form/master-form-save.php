<?php

function master_pre_submit_form( $form ) {


    // echo "<pre>";

    // var_dump($_POST);exit;

    // echo "</pre>";
    
    // create post using $form['new_post']
    
    
    // modify $form['redirect']
    
    
    // return
    return $form;
    
}

add_filter('acf/pre_submit_form', 'master_pre_submit_form', 10, 1);

function master_acf_pre_save_post( $post_id, $form ) {

    if ( get_post_type( $post_id ) != 'master' ) {
        return $post_id;
    }
    
    // Update post 37
    $my_post = array(
      'ID'           => $post_id,
      'post_title'   => $_POST['title'],
    );

    // Update the post into the database
    wp_update_post( $my_post );
    
    wp_set_post_terms( $post_id, $_POST['organizer_venue'], "organizer_venue" );
    
    
    // return
    return $post_id;
    
}

add_filter('acf/pre_save_post', 'master_acf_pre_save_post', 10, 2);

?>