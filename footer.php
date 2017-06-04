<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="modal-footer">
<p>由 <a href="http://typecho.org" target="_blank">Typecho</a> 强力驱动, 版本 1.0 (14.10.10)</p>
</div>
</div>
</div>
</body>
</html>
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>