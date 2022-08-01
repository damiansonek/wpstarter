<?php

function editor_full_width_gutenberg() {
  echo '<style>
    body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
        max-width: none; !important;
	}
    .block-editor__container .wp-block {
        max-width: 90% !important;
    }
    .block-editor__container .wp-block-group {
      border:1px dashed #b4cac8;
      max-width:60% !important;
      padding:0px 2rem;
    }
    .block-editor__container .wp-block {
      border:1px dashed #b4cac8;
    }
    .block-editor__container .wp-block:focus {
      border:1px dashed black;
    }
    .wp-block-column block-editor-block-list__block wp-block block-core-columns block-editor-block-list__layout {
      border:1px dashed black;
    }


     
  </style>';
}

add_action('admin_head', 'editor_full_width_gutenberg');

?>