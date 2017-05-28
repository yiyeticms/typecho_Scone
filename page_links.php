<?php
/**
 * 友情链接
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

 <div class="span8">
<h4><?php $this->title() ?></h4>
<div class = "postlist">
	<ul>
	<?php Links_Plugin::output(); ?>
	</ul>
</div>
<?php $this->need('footer.php'); ?>