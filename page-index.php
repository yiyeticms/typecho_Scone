<?php
/**
* 首页模板
*
* @package custom
*/

$this->need('header.php'); ?>

 <div class="span8">
        <h4>关于我</h4>
<p class="tt">
<?php $this->options->gyw() ?></p>


<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
<?php while ($categories->next()): ?>
<p>&nbsp;</p>
<h4><?php $categories->name(); ?></h4>
<div class = "postlist">
<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=7&type=category', 'mid=' . $categories->mid)->to($posts); ?>
<?php while ($posts->next()): ?>
<ul>
<li>
<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
        <?php $this->date('Y-m-d'); ?>
      </time> - <a href="<?php $posts->permalink(); ?>"><?php $posts->title(40); ?></a>
</li>
</ul>
<?php endwhile; ?>
<?php endwhile; ?>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
<?php $this->need('footer.php'); ?>