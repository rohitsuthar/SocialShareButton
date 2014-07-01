<?php
	if($this->style == 'vertical')
		$data_type = 'vertical-bubble';
	else
		$data_type = 'bubble';
?>

<div class="g-plus" data-href="<?=$this->data_url?>" data-action="share" data-annotation="<?=$data_type?>"></div>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
