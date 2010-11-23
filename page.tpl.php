<?php
// $Id: page.tpl.php,v 1.1.2.4 2010/01/11 00:08:12 sociotech Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $setting_styles; ?>
  <!--[if IE 8]>
  <?php print $ie8_styles; ?>
  <![endif]-->
  <!--[if IE 7]>
  <?php print $ie7_styles; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  <?php print $ie6_styles; ?>
  <![endif]-->
  <?php print $local_styles; ?>
  <?php print $scripts; ?>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?><?php if ($breadcrumb || $tabs) print ' main-wrapper-fix'; ?>">
  <div id="page" class="page">
    <div id="page-inner" class="page-inner">
      <div id="skip">
        <a href="#main-content-area"><?php print t('Skip to Main Content Area'); ?></a>
      </div>


      <!-- header-group row: width = grid_width -->
      <div id="header-group-wrapper" class="header-group-wrapper full-width">
        <!-- header-top row: width = grid_width -->
        <?php print theme('grid_row', $header_top, 'header-top', 'full-width', $grid_width); ?>
        <?php print theme('grid_row', $header_first, 'header-top', 'full-width', $grid_width); ?>
        <div id="header-group" class="header-group row <?php print $grid_width; ?>">
          <div id="header-group-inner" class="header-group-inner inner clearfix">
            <?php if ($navbar || $primary_links_tree):?>
              <div id="navbar" class="navbar row <?php print $grid_width; ?>">
                <div id="navbar-inner" class="navbar-inner inner clearfix">
                  <div id="navbar-l">&nbsp;</div>
                  <div id="navbar-r">&nbsp;</div>
                  <div id="navbar-c">
                    <div id="navbar-content">
                    <?php print $navbar ? $navbar : theme('grid_block', $primary_links_tree, 'primary-menu'); ?>
                    </div>
                  </div>
                </div><!-- /header-primary-menu-inner -->
              </div><!-- /header-primary-menu -->
            <?php endif; ?>

            <?php if ($logo || $site_name || $site_slogan): ?>
            <div id="header-site-info" class="header-site-info block">
              <div id="header-site-info-inner" class="header-site-info-inner inner">
                <?php if ($logo): ?>
                <div id="logo"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div>
                <?php endif; ?>
                <?php if ($site_name): ?>
                <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                <?php endif; ?>
                <?php if ($site_slogan): ?>
                <span id="slogan"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_slogan; ?></a></span>
                <?php endif; ?>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
            <?php endif; ?>

            <?php print $header; ?>
            <?php print theme('grid_block', $breadcrumb, 'breadcrumbs'); ?>
            <div id="tabs-wrapper" class="tabs-wrapper full-width">
              <div id="tabs" class="tabs row <?php print $grid_width; ?>">
                <div id="tabs-inner" class="tabs-inner inner clearfix">
                  <div id="tabs-content">
                    <div id="tabs-c">
                    <?php print theme('grid_block', $tabs, 'content-tabs'); ?>
                    </div>
                  </div>
               </div><!-- /tabs-menu-inner -->
              </div><!-- /tabs-menu -->
            </div><!-- /tabs-menu-wrapper -->

          </div><!-- /header-group-inner -->
        </div><!-- /header-group -->
        <?php print theme('grid_row', $header_last, 'header-top', 'full-width', $grid_width); ?>

      </div><!-- /header-group-wrapper -->
      <div id="header-shadow" class="header-shadow full-width">&nbsp;</div>

      <!-- main row: width = grid_width -->
      <div id="main-wrapper" class="main-wrapper full-width">
        <div id="main" class="main row <?php print $grid_width; ?>">
          <div id="main-inner" class="main-inner inner clearfix">
            <?php print theme('grid_row', $sidebar_first, 'sidebar-first', 'nested', $sidebar_first_width); ?>

            <!-- main group: width = grid_width - sidebar_first_width -->
            <div id="main-group" class="main-group row nested <?php print $main_group_width; ?>">
              <div id="main-group-inner" class="main-group-inner inner">

                <div id="main-content" class="main-content row nested">
                  <div id="main-content-inner" class="main-content-inner inner">
                    <!-- content group: width = grid_width - (sidebar_first_width + sidebar_last_width) -->
                    <div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
                      <div id="content-group-inner" class="content-group-inner inner">
 
                        <?php if ($content_top || $help || $messages): ?>
                        <div id="content-top" class="content-top row nested">
                          <div id="content-top-inner" class="content-top-inner inner">
                            <?php print theme('grid_block', $help, 'content-help'); ?>
                            <?php print theme('grid_block', $messages, 'content-messages'); ?>
                            <?php print $content_top; ?>
                          </div><!-- /content-top-inner -->
                        </div><!-- /content-top -->
                        <?php endif; ?>

                        <div id="content-region" class="content-region row nested">
                          <div id="content-region-inner" class="content-region-inner inner">
                            <a name="main-content-area" id="main-content-area"></a>
                            <div id="content-inner" class="content-inner block">
                              <div id="content-inner-inner" class="content-inner-inner inner">
                                <?php if ($title): ?>
                                <h1 class="title"><?php print $title; ?></h1>
                                <?php endif; ?>
                                <?php if ($content): ?>
                                <div id="content-content" class="content-content">
                                  <?php print $content; ?>
                                  <?php print $feed_icons; ?>
                                </div><!-- /content-content -->
                                <?php endif; ?>
                              </div><!-- /content-inner-inner -->
                            </div><!-- /content-inner -->
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->

                        <?php print theme('grid_row', $content_bottom, 'content-bottom', 'nested'); ?>
                      </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->

                    <?php print theme('grid_row', $sidebar_last, 'sidebar-last', 'nested', $sidebar_last_width); ?>
                  </div><!-- /main-content-inner -->
                </div><!-- /main-content -->

              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->

      <!-- splash-group row: width = grid_width -->
      <div id="splash-group-wrapper" class="splash-group-wrapper full-width">
        <div id="splash-group" class="splash-group row <?php print $grid_width; ?>">
          <div id="splash-group-inner" class="splash-group-inner inner clearfix">
            <?php print theme('grid_row', $splash_top, 'splash-top', 'full-width', $grid_width); ?>
            <?php print theme('grid_block', $splash_first, 'splash-first'); ?>
            <?php print theme('grid_block', $splash_middle, 'splash-middle'); ?>
            <?php print theme('grid_block', $splash_last, 'splash-last'); ?>
            <?php print theme('grid_row', $splash_bottom, 'splash-bottom', 'full-width', $grid_width); ?>
          </div><!-- /splash-group-inner -->
        </div><!-- /splash-group -->
      </div><!-- /splash-group-wrapper -->

      <!-- footer-message row: width = grid_width -->
      <div id="footer-shadow" class="footer-shadow full-width">&nbsp;</div>
      <div id="footer-message-wrapper" class="footer-message-wrapper full-width">
        <div id="footer-message" class="footer-message row <?php print $grid_width; ?>">
          <div id="footer-message-inner" class="footer-message-inner inner clearfix">
            <!-- footer row: width = grid_width -->
            <?php print theme('grid_block', $footer, 'footer'); ?>
            <?php print theme('grid_block', theme('links', $secondary_links), 'secondary-menu'); ?>
            <?php print theme('grid_block', $footer_message, 'footer-message-text'); ?>
          </div><!-- /footer-message-inner -->
        </div><!-- /footer-message -->
      </div><!-- /footer-message-wrapper -->

    </div><!-- /page-inner -->
  </div><!-- /page -->
  <?php print $closure; ?>
</body>
</html>
