<?
function prfx_custom_meta() {
 add_meta_box( 'prfx_meta', __( 'Settaggi', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );

function prfx_meta_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
  $prfx_stored_meta = get_post_meta( $post->ID );
  $img_amazon = get_post_meta( $post->ID );
  $link_amazon = get_post_meta( $post->ID );
  $prfx_stored_meta = get_post_meta( $post->ID );
 ?>

 <select name="meta-select" id="meta-select-video">
    <option value="Illustrator-base" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'Illustrator-base' ); ?>><?php _e( 'Illustraotr Base', 'prfx-textdomain' )?></option>';
    <option value="illustrator-facile" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'illustrator-facile' ); ?>><?php _e( 'Illustrator Facile', 'prfx-textdomain' )?></option>';
    <option value="photoshop-ability" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'photoshop-ability' ); ?>><?php _e( 'Photoshop Ability', 'prfx-textdomain' )?></option>';
    <option value="learn-photo-edit" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'learn-photo-edit' ); ?>><?php _e( 'Learn Photo Edit', 'prfx-textdomain' )?></option>';
    <option value="fotolia" <?php if ( isset ( $prfx_stored_meta['meta-select'] ) ) selected( $prfx_stored_meta['meta-select'][0], 'fotolia' ); ?>><?php _e( 'fotolia', 'prfx-textdomain' )?></option>';
  </select>

  <ul class="metabox_admin_config">
  <li>
   <label for="video_code" class="prfx-row-title"><?php _e( 'video youtube', 'prfx-textdomain' )?></label>
   <input type="text" class="form-control" name="video_code" id="video_code" value="<?php if ( isset ( $prfx_stored_meta['video_code'] ) ) echo $prfx_stored_meta['video_code'][0]; ?>" />
  </li>
  <li>
    <label for="img_amazon" class="prfx-row-title"><?php _e( 'Img amazon', 'prfx-textdomain' )?></label>
    <input type="text" class="form-control" name="img_amazon" id="img_amazon" value="<?php if ( isset ( $img_amazon['img_amazon'] ) ) echo $img_amazon['img_amazon'][0]; ?>" />
  </li>
  <li>
    <label for="link_amazon" class="prfx-row-title"><?php _e( 'Link amazon', 'prfx-textdomain' )?></label>
    <input type="text" class="form-control" name="link_amazon" id="link_amazon" value="<?php if ( isset ( $link_amazon['link_amazon'] ) ) echo $link_amazon['link_amazon'][0]; ?>" />
  </li>
  </ul>
<? }

 ?>
<?
 function prfx_meta_save( $post_id ) {
   // Checks save status
   $is_autosave = wp_is_post_autosave( $post_id );
   $is_revision = wp_is_post_revision( $post_id );
   $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
   // Exits script depending on save status
   if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
     return;
   }
   
   if( isset( $_POST[ 'meta-select' ] ) ) {
    update_post_meta( $post_id, 'meta-select', $_POST[ 'meta-select' ] );
    }

   if( isset( $_POST[ 'prfx_nonce' ] ) ) {
    update_post_meta( $post_id, 'video_code', sanitize_text_field( $_POST[ 'video_code' ]));
    update_post_meta( $post_id, 'img_amazon', sanitize_text_field( $_POST[ 'img_amazon' ]));
    update_post_meta( $post_id, 'link_amazon', sanitize_text_field( $_POST[ 'link_amazon' ]));
   }
}
 add_action( 'save_post', 'prfx_meta_save' );

  /*RIMUOVO IL META CUSTOM DI DEFAULT DI WORDPSS*/
  function remove_metaboxes() {
   remove_meta_box( 'postcustom' , 'post' , 'normal' ); //removes custom fields for page
  }
  add_action( 'admin_menu' , 'remove_metaboxes' );
?>