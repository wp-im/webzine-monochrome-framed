<?php namespace Webzine\MonochromeFramed; $cover=featured(); ?>
<header class="wz-intro framed-intro"><span class="wz-eyebrow"><?php echo esc_html(option('home_kicker')); ?></span><h1><?php echo esc_html(option('home_title') ?: get_bloginfo('name')); ?></h1><p><?php echo esc_html(option('home_description') ?: get_bloginfo('description')); ?></p></header>
<?php cover($cover); ?><section><?php section_heading(__('翻开新的一页','webzine-monochrome-framed'),posts_url()); feed(array('post__not_in'=>array($cover),'posts_per_page'=>(int)number('latest_count',8,4,20)),'wz-feed-list'); ?></section>
<?php if(option('show_topics',true)): ?><details class="framed-directory"><summary><?php esc_html_e('栏目目录与阅读入口','webzine-monochrome-framed'); ?></summary><?php topics(); ?></details><?php endif; ?>
<?php widget_area('home-middle'); ?>
