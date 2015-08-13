<?php 

/* ********************************

Adding Meta Boxes for Skills

********************************* */


add_action('add_meta_boxes', 'tsr_meta_boxes_skills');
function tsr_meta_boxes_skills() {
    add_meta_box( 'tsr-meta-box-skills', __('Member settings'), 'tsr_meta_box_callback_skills', 'skills' );
}
 
function tsr_meta_box_callback_skills( $post ) {

     //nonce. See http://codex.wordpress.org/Function_Reference/wp_nonce_field
     wp_nonce_field( 'tsr_meta_box', 'tsr_meta_box_noncename' );
    
     //Get the current values of meta fields to pre-populate the custom fields
     $post_meta = get_post_custom($post->ID);
 
     //The input text for logo
     $current_value = '';
     if( isset( $post_meta['text_meta_field_logo'][0] ) ) {
         $current_value = $post_meta['text_meta_field_logo'][0];
     }
     ?>
     <div class="meta-box-fields">
         <label class="label" for="text_meta_field_logo"><?php _e("Logo"); ?></label>
         <input name="text_meta_field_logo" id="text_meta_field_logo" type="text" value="<?php echo $current_value; ?>">
         <p class="meta-box-description">Write icon class - "fa fa-heart, fa fa-bed, fa fa-car" <a href="http://fontawesome.io/icons/" target="_blank"><?php _e('Click Here', 'tsr') ?></a></p>
     </div>
 
     <?php
}
 
add_action('save_post', 'tsr_save_custom_fields_skills');
function tsr_save_custom_fields_skills($post_id){
 
         // Primero, comprobamos que el usuario actual tenga permiso para editar el post
     if ( isset($_POST['post_type']) && 'post' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_post', $post_id ) ) {
                 return;
            }
     }
           
         // Segundo, comprobamos el nonce como medida de seguridad
    if ( !isset( $_POST['tsr_meta_box_noncename'] ) || ! wp_verify_nonce( $_POST['tsr_meta_box_noncename'], 'tsr_meta_box' ) ) {
            return;
    }
            
        //Tercero, validamos y almacenamos el valor del custom field o lo borramos si es necesario
        
    //El text input for logo
    if( isset($_POST['text_meta_field_logo']) && $_POST['text_meta_field_logo'] != "" ) {
            update_post_meta( $post_id, 'text_meta_field_logo', sanitize_text_field( $_POST['text_meta_field_logo'] ) );
    } else {
            //$_POST['text_meta_field_logo'] no tiene valor establecido, eliminar el meta field de la base de datos
        if ( isset( $post_id ) ) {
            delete_post_meta($post_id, 'text_meta_field_logo');
        }
    }
    
}


/* ********************************

Adding Meta Boxes for My Work

********************************* */


add_action('add_meta_boxes', 'tsr_meta_boxes_works');
function tsr_meta_boxes_works() {
    add_meta_box( 'tsr-meta-box-works', __('Member settings'), 'tsr_meta_box_callback_works', 'works' );
}
 
function tsr_meta_box_callback_works( $post ) {

     //nonce. See http://codex.wordpress.org/Function_Reference/wp_nonce_field
     wp_nonce_field( 'tsr_meta_box', 'tsr_meta_box_noncename' );
    
     //Get the current values of meta fields to pre-populate the custom fields
     $post_meta = get_post_custom($post->ID);
 
     //The input text for the link
     $current_value = '';
     if( isset( $post_meta['text_meta_field_link'][0] ) ) {
         $current_value = $post_meta['text_meta_field_link'][0];
     }
     ?>
     <div class="meta-box-fields">
         <label class="label" for="text_meta_field_link"><?php _e("Link"); ?></label>
         <input name="text_meta_field_link" id="text_meta_field_link" type="text" value="<?php echo $current_value; ?>">
         <p class="meta-box-description">The link for the page"</p>
     </div>
 
     <?php
}
 
add_action('save_post', 'tsr_save_custom_fields_works');
function tsr_save_custom_fields_works($post_id){
 
         // Primero, comprobamos que el usuario actual tenga permiso para editar el post
     if ( isset($_POST['post_type']) && 'post' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_post', $post_id ) ) {
                 return;
            }
     }
           
         // Segundo, comprobamos el nonce como medida de seguridad
    if ( !isset( $_POST['tsr_meta_box_noncename'] ) || ! wp_verify_nonce( $_POST['tsr_meta_box_noncename'], 'tsr_meta_box' ) ) {
            return;
    }
            
        //Tercero, validamos y almacenamos el valor del custom field o lo borramos si es necesario
        
    //El text input for the link
    if( isset($_POST['text_meta_field_link']) && $_POST['text_meta_field_link'] != "" ) {
            update_post_meta( $post_id, 'text_meta_field_link', sanitize_text_field( $_POST['text_meta_field_link'] ) );
    } else {
            //$_POST['text_meta_field_link'] no tiene valor establecido, eliminar el meta field de la base de datos
        if ( isset( $post_id ) ) {
            delete_post_meta($post_id, 'text_meta_field_link');
        }
    }
    
}




// some styling for de admin area
function tsr_backend_css() { ?>

        <style type="text/css">
           #agw-meta-box-causes .inside .meta-box-fields {
            position: relative;
           }
           .label{
            width: 18%;
           }
           .label label{
            font-size: 13px;
            font-weight: bold;
           }
           .meta-box-description{
            font-size: 10px;
            font-style: italic;
            margin: 0;
           }
           .meta-box-fields input{
            width: 80%;
            position: absolute;
            left: 19%;
            top: 0;
            
           }
           .meta-box-fields{
            margin-bottom: 50px;
           }
        </style>

<?php }

add_action('admin_head', 'tsr_backend_css');


