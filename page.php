<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="span8">
<h2><?php $this->title() ?></h2>
<?php $this->content(); ?>
<hr/>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>