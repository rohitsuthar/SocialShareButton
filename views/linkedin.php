<?php
	if($this->style == 'vertical')
		$data_type = 'top';
	else
		$data_type = 'right';
?>

<script src="//platform.linkedin.com/in.js" type="text/javascript">
  lang: en_US
</script>
<script type="IN/Share" data-url="<?php echo $url; ?>" data-counter="right"></script>
