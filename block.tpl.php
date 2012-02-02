<!--$Id: block.tpl.php,v 1.3 2007/09/11 16:45:35 roopletheme Exp $-->
<!-- www.roopletheme.com -->
  <div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <h2 class="title"><?php print $block->subject; ?></h2>
    <div class="content"><?php print $block->content; ?></div>
 </div>
