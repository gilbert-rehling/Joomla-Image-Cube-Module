<?php // no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.helper');

$doc = JFactory::getDocument();
// $doc->addScript('modules'.DS.'mod_imagecube'.DS.'assets'.DS.'jquery.imagecube.pack.js');
// echo JHTML::script('jquery.imagecube.pack.js','modules'.DS.'mod_imagecube-v1.0'.DS.'assets'.DS);

?>
<div id="imageCube" style="width: 200px; height: 150px; padding: 0 !important;"> 
<?php $z=0;  foreach ($imgarray as $img) : ?>
<img src="<?php echo $imgpath.$img; ?>" alt="Image display <?php echo $z; ?>" title="Image display <?php echo $z; ?>"/> 
<?php $z++; endforeach; ?>
</div>

<script type="text/javascript">
<!--
    jQuery('#imageCube').imagecube();
-->
</script>
