<!DOCTYPE html>
<html lang='zh'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php echo $this->getDescription(); ?><?php endif; ?></title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/2.3.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/2.3.1/css/bootstrap-responsive.css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/customize.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/scone.css'); ?>">
<link href="<?php $this->options->ico() ?>" rel="shortcut icon">
</head>
<div class = "title">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
    		<div class="nav-collapse collapse">
    			<ul class="nav pull-left">
					<li><a href="<?php $this->options->siteUrl(); ?>"><b><?php $this->options->title() ?></b></a></li>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li><a<?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>">
          <?php $pages->title(); ?>
          </a></li>
        <?php endwhile; ?>
    			</ul>
				<ul class="nav pull-right">
					<li><a href="http://yiyeti.cc/zheteng/578.html">Scone主题</a></li>
            	</ul>
    		</div>
    	</div>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<div class="container">
<div class="span2 profile">
	            <center>
	            <a href="/"><img width="120" height="120" alt="" src="<?php $this->options->logoUrl(); ?>" /></a>
	            </center>
	            <ul>
	                <li><i class="icon-user"></i><a target="_blank" href="<?php $this->options->glink() ?>">GitHub</a></li>
                  <li><i class="icon-bookmark"></i><a href="<?php $this->options->siteUrl(); ?>" >Links</a></li>
	                <li><i class="icon-envelope"></i><a target="_blank" href="<?php $this->options->mlink() ?>">Mail</a></li>
                  <li><i class="icon-leaf"></i><a target="_blank" href="<?php $this->options->siteUrl(); ?>feed">RSS</a></li>
	            </ul>
			</div>
