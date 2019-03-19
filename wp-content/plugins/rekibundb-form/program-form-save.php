<?php

function program_pre_submit_form( $form ) {


    // echo "<pre>";

    // var_dump($_POST);exit;

    // echo "</pre>";
    
    // create post using $form['new_post']
    
    
    // modify $form['redirect']
    
    
    // return
    return $form;
    
}

add_filter('acf/pre_submit_form', 'program_pre_submit_form', 10, 1);

function program_acf_pre_save_post( $post_id, $form ) {
    
    if ( get_post_type( $post_id ) != 'program' ) {
        return $post_id;
    }
    
    // Update post 37
    $my_post = array(
      'ID'           => $post_id,
      'post_title'   => $_POST['title'],
    );

    // Update the post into the database
    wp_update_post( $my_post );
    
    wp_set_post_terms( $post_id, $_POST['venue'], "venue" );
    wp_set_post_terms( $post_id, $_POST['organization'], "organization" );
    
    
    // return
    return $post_id;
    
}

add_filter('acf/pre_save_post', 'program_acf_pre_save_post', 10, 2);

?>