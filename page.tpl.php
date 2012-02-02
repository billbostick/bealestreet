<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--$Id: page.tpl.php,v 1.3 2007/09/11 16:45:35 roopletheme Exp $-->
<!-- www.roopletheme.com -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  
   <?php if (theme_get_setting('bealestreet_width')) { ?>
	<style type="text/css">
      	#page {
			width : <?php print theme_get_setting('bealestreet_fixedwidth') ?>px;
		}

      	.topBlock, .bottomBlock, .middleWrapper {
			width : <?php print (theme_get_setting('bealestreet_fixedwidth') + 30) ?>px;
		}
      </style>
   <?php } else { ?>
	<style type="text/css">
      	#page {
      width: 95%;
		}
      	.topBlock, .bottomBlock, .middleWrapper {
			width : 95%;
		}
      </style>
   <?php }  ?>

   <?php if (theme_get_setting('bealestreet_leftsidebarwidth')) { ?>
	<style type="text/css">
        #sidebar-left {
          width : <?php print theme_get_setting('bealestreet_leftsidebarwidth') ?>px;
        }
      </style>
   <?php }  ?>

   <?php if (theme_get_setting('bealestreet_rightsidebarwidth')) { ?>
	<style type="text/css">
        #sidebar-right {
          width : <?php print theme_get_setting('bealestreet_rightsidebarwidth') ?>px;
        }
      </style>
   <?php }  ?>

   <?php if (theme_get_setting('bealestreet_fontfamily')) { ?>
	   <style type="text/css">
         body {
           font-family : <?php print theme_get_setting('bealestreet_fontfamily') ?>;
         }
       </style>
     <?php }  ?>

     <?php if (theme_get_setting('bealestreet_fontfamily') == 'Custom') { ?>

       <?php if (theme_get_setting('bealestreet_customfont')) { ?>
         <style type="text/css">
            body {
              font-family : <?php print theme_get_setting('bealestreet_customfont') ?>;
            }
         </style>
       <?php }  ?>
   <?php }  ?>

<?php if (theme_get_setting('bealestreet_iepngfix')) { ?>
<!--[if lte IE 6]>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
    }); 
</script> 
<![endif]-->
<?php } ?>

<?php /* custom stuff for block display/closure */ ?>
<script type="text/javascript" src="<?php print $GLOBALS['base_url']."/"; print $directory; ?>/js/pickstyle.js"></script>

  
</head>

<body>

<div class="page">
<div class="topWrapper">
<div class="topBlock">

<div id="masthead">
<div id="header" class="clear-block">
<div class="mastheadRight">
<div class="mastheadLeft">

      <?php print $search_box; ?>      
      <div id="logo-title">
        <?php if ($logo): ?>
          <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
          </a>
        <?php endif; ?>
      </div> <!-- /logo-title -->
        
        <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 id='site-name'>
            <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>">
              <?php print $site_name; ?>
            </a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div id='site-slogan'>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>
        </div> <!-- /name-and-slogan -->

      <?php if ($header): ?> 
            <?php print $header; ?>
      <?php endif; ?>

    </div> <!-- /mastheadLeft -->
    </div> <!-- /mastheadRight -->
    </div> <!-- /header -->
    </div> <!-- /masthead -->


</div>	 <!-- /topBlock -->
</div>	 <!-- /topWrapper -->

<div class="middleWrapper">
<div class="middleBlock">
        <?php if ($banner): ?>
          <div id='banner'>
            <?php print $banner; ?>
          </div>
        <?php endif; ?>



      <div id="navigation" class="menu <?php if ($primary_links) { print "withprimary"; } if ($secondary_links) { print " withsecondary"; } ?> ">
          <?php if ($primary_links): ?>
            <div id="primary" class="clear-block">
              <?php print theme('menu_links', $primary_links); ?>
            </div>
          <?php endif; ?>
          
          <?php if ($secondary_links): ?>
            <div id="secondary" class="clear-block">
              <?php print theme('menu_links', $secondary_links); ?>
            </div>
          <?php endif; ?>
      </div> <!-- /navigation -->

      <?php if ($suckerfish_menu): ?>
      <div id="suckerfishmenu" class="clear-block">
            <?php print $suckerfish_menu; ?>
	  </div>
      <?php endif; ?>


	<?php
         $section1count = 0;

         if ($user1)
         {
            $section1count++;
         }

         if ($user2)
         {
            $section1count++;
         }
         
         if ($user3)
         {
            $section1count++;
         }
      ?>

      <?php if ($section1count): ?>
        <?php $section1width = 'width' . floor(99 / $section1count); ?>
        <div class="clr" id="section1">
         <table class="sections" cellspacing="0" cellpadding="0">
           <tr><td id="topleft1"></td><td id="tophorizontal1" colspan="<?php echo $section1count ?>"></td><td id="topright1"></td></tr>
             <tr valign="top">

               <td  id="leftvertical1">&nbsp;</td>

                <?php if ($user1): ?>
                   <td class="section colorsection <?php echo $section1width ?>">
                      <?php print $user1; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user2): ?>
                   <td class="section colorsection <?php echo $section1width ?>">
                      <?php print $user2; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user3): ?>
                   <td class="section colorsection <?php echo $section1width ?>">
                      <?php print $user3; ?>
                   </td>
                <?php endif; ?>  

               <td id="rightvertical1">&nbsp;</td>

             </tr>
           <tr><td id="bottomleft1"></td><td id="bottomhorizontal1" colspan="<?php echo $section1count ?>"></td><td id="bottomright1"></td></tr>
         </table>
       </div>  <!-- /section1 -->
      <?php endif; ?>

	<?php
         $section2count = 0;

         if ($user4)
         {
            $section2count++;
         }

         if ($user5)
         {
            $section2count++;
         }
         
         if ($user6)
         {
            $section2count++;
         }
      ?>

      <?php if ($section2count): ?>
        <?php $section2width = 'width' . floor(99 / $section2count); ?>
        <div class="clr" id="section2">
         <table class="sections" cellspacing="0" cellpadding="0">
           <tr><td id="topleft2"></td><td id="tophorizontal2" colspan="<?php echo $section2count ?>"></td><td id="topright2"></td></tr>
             <tr valign="top">

               <td  id="leftvertical2">&nbsp;</td>

                <?php if ($user4): ?>
                   <td class="section blacksection <?php echo $section2width ?>">
                      <?php print $user4; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user5): ?>
                   <td class="section blacksection <?php echo $section2width ?>">
                      <?php print $user5; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user6): ?>
                   <td class="section blacksection <?php echo $section2width ?>">
                      <?php print $user6; ?>
                   </td>
                <?php endif; ?>  

               <td id="rightvertical2">&nbsp;</td>

             </tr>
           <tr><td id="bottomleft2"></td><td id="bottomhorizontal2" colspan="<?php echo $section2count ?>"></td><td id="bottomright2"></td></tr>
         </table>
       </div>  <!-- /section2 -->
      <?php endif; ?>



<div id="middlecontainer">
<table border="0" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <?php if ($sidebar_left) { ?><td id="sidebar-left">
      <?php print $sidebar_left ?>
    </td><?php } ?>
    <td valign="top">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div id="main">

      <?php if (theme_get_setting('bealestreet_breadcrumb')): ?>
         <?php if ($breadcrumb): ?>
             <div id="breadcrumb">
               <?php print $breadcrumb; ?>
			 </div>
         <?php endif; ?>
      <?php endif; ?>

        <?php if ($content_top):?><div id="content-top"><?php print $content_top; ?></div><?php endif; ?>
        <h1 class="title"><?php print $title ?></h1>
        <div class="tabs"><?php print $tabs ?></div>
        <?php print $help ?>
        <?php print $messages ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
        <?php if ($content_bottom): ?><div id="content-bottom"><?php print $content_bottom; ?></div><?php endif; ?>
      </div>
    </td>

    <?php if ($sidebar_right) { ?><td id="sidebar-right">
      <?php print $sidebar_right ?>
    </td><?php } ?>

  </tr>
</table>
</div>

	<?php
         $section3count = 0;

         if ($user7)
         {
            $section3count++;
         }

         if ($user8)
         {
            $section3count++;
         }
         
         if ($user9)
         {
            $section3count++;
         }
      ?>

      <?php if ($section3count): ?>
        <?php $section3width = 'width' . floor(99 / $section3count); ?>
        <div class="clr" id="section3">
         <table class="sections" cellspacing="0" cellpadding="0">
           <tr><td id="topleft1"></td><td id="tophorizontal1" colspan="<?php echo $section3count ?>"></td><td id="topright1"></td></tr>
             <tr valign="top">

               <td  id="leftvertical1">&nbsp;</td>

                <?php if ($user7): ?>
                   <td class="section colorsection <?php echo $section3width ?>">
                      <?php print $user7; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user8): ?>
                   <td class="section colorsection <?php echo $section3width ?>">
                      <?php print $user8; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user9): ?>
                   <td class="section colorsection <?php echo $section3width ?>">
                      <?php print $user9; ?>
                   </td>
                <?php endif; ?>  

               <td id="rightvertical1">&nbsp;</td>

             </tr>
           <tr><td id="bottomleft1"></td><td id="bottomhorizontal1" colspan="<?php echo $section3count ?>"></td><td id="bottomright1"></td></tr>
         </table>
       </div>  <!-- /section3 -->
      <?php endif; ?>

	<?php
         $section4count = 0;

         if ($user10)
         {
            $section4count++;
         }

         if ($user11)
         {
            $section4count++;
         }
         
         if ($user12)
         {
            $section4count++;
         }
      ?>

      <?php if ($section4count): ?>
        <?php $section4width = 'width' . floor(99 / $section4count); ?>
        <div class="clr" id="section4">
         <table class="sections" cellspacing="0" cellpadding="0">
           <tr><td id="topleft2"></td><td id="tophorizontal2" colspan="<?php echo $section4count ?>"></td><td id="topright2"></td></tr>
             <tr valign="top">

               <td  id="leftvertical2">&nbsp;</td>

                <?php if ($user10): ?>
                   <td class="section blacksection <?php echo $section4width ?>">
                      <?php print $user10; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user11): ?>
                   <td class="section blacksection <?php echo $section4width ?>">
                      <?php print $user11; ?>
                   </td>
                <?php endif; ?>  

                <?php if ($user12): ?>
                   <td class="section blacksection <?php echo $section4width ?>">
                      <?php print $user12; ?>
                   </td>
                <?php endif; ?>  

               <td id="rightvertical2">&nbsp;</td>

             </tr>
           <tr><td id="bottomleft2"></td><td id="bottomhorizontal2" colspan="<?php echo $section4count ?>"></td><td id="bottomright2"></td></tr>
         </table>
       </div>  <!-- /section4 -->
      <?php endif; ?>


</div>	 <!-- /middleBlock -->
</div>	 <!-- /middleWrapper -->

<div class="bottomWrapper">
<div class="bottomBlock">


    <div id="footer-wrapper" class="clear-block">
        <div class="footer-right">
            <div class="footer-left">
<div id="footer">
  <?php print $footer_message ?>
	<br /><a href="http://www.roopletheme.com" title="RoopleTheme!"><img src="<?php print base_path() . path_to_theme() . "/roopletheme.png"; ?>" alt="RoopleTheme"/></a>
</div>

            </div> <!-- /footer-left -->
        </div> <!-- /footer-right -->
    </div> <!-- /footer-wrapper -->

</div>	 <!-- /bottomBlock -->
</div>	 <!-- /bottomWrapper -->


<?php print $closure ?>
</div> <!-- /page -->

</body>
</html>
