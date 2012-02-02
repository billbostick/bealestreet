<!--$Id: node.tpl.php,v 1.3 2007/09/11 16:45:35 roopletheme Exp $-->
<!-- www.roopletheme.com -->
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <span class="submitted"><?php print $submitted?></span>
    <span class="taxonomy"><?php print $terms?></span>
    <div class="content clear-block clear"><?php print $content?></div>
    <?php if ($links) { ?><div class="links clear-block clear">&raquo; <?php print $links?></div><?php }; ?>
  </div>
