<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
	<div id="languages">
		<a href="index.php?lang=en"><img src="../images/en.png" /></a>
		<a href="index.php?lang=de"><img src="../images/de.png" /></a>
		<a href="index.php?lang=es"><img src="../images/es.png" /></a>
	</div>
		
	<div id="WSTitleDL"><?php echo $lang['HEADER_TITLE']; ?></div>
  	<div id="WSubTitleDL"><?php echo $lang['SLOGAN']; ?></div>
  	<input type="button" value="NEXT" onclick="location.href = '?r=test%2Findex';"/>
</div>
