<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if($this->allow('comment')): ?>
<p>此处需调用第三方评论系统，请自主修改comments.php模板里的内容</p>
 <?php else: ?>
  <h4>
    <?php _e('评论已关闭'); ?>
  </h4>
  <?php endif; ?>