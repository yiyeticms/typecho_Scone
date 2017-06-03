<?php
/**
 * 这是一款超简洁的Typecho主题。
 * @package Scone Theme 
 * @author 一夜涕
 * @version 0.2
 * @link http://yiyeti.cc
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

 <div class="span8">
        <h4>关于我</h4>
<p class="tt">
<?php $this->options->gyw() ?></p>
<p>&nbsp;</p>
<h4>最新文章</h4>
<div class = "postlist">
	 <?php while($this->next()): ?>
	<ul>
	
	<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
        <?php $this->date('Y-m-d'); ?>
      </time> - <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>
	</ul>
	 <?php endwhile; ?>
</div>
<?php $this->need('footer.php'); ?>