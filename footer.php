<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	  </div>
	</div>
</body>
</html>
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>