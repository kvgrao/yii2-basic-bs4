<?php
use yii\helpers\Url;
$baseUrl = Url::Base();
?>
<div class="card col-md-3 bg-warning">

<div id="rao" class="card-header text-center">
    <button id="rao1" type="submit" class="btn btn-primary" rel="nofollow" title="Click to Load Google Maps">
    <i class="fa fa-map-marked-alt"> Map</i></button>
    <button id="rao2" type="submit" class="btn btn-primary"  rel="nofollow" title="Click to show Landmarks" disabled="true">
    <i class="fa fa-map-marked"> Loc</i></button>
</div>

<div class="card-body img-wrapper" id="kvg">
    <img rel="nofollow" title="Click the Map button to locate us on google maps" data-placement="left" src="<?= $baseUrl;?>/img/map.png" width="100%" height="360"/>
</div>
</div>

<?php
$script = <<< JS
$(document).ready (function() {
	$('#rao1').click(function() { 
	$('#kvg').html('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15301.926697871939!2d80.639992!3d16.501763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85d3fd3c45e28f7c!2sCOMPUTER+SHOPEE!5e0!3m2!1sen!2sin!4v1519201819203&hl=en" width="100%" height="360"></iframe>');
	$('#rao1').prop('disabled', true);
	$('#rao2').prop('disabled', false);
	});
	$('#rao2').click(function() { 
	$('#kvg').html('<img rel="nofollow" title="Click the Map button to locate us on google maps" data-placement="left" src="$baseUrl/img/map.png" width="100%" height="360"/>');
	$('#rao1').prop('disabled', false);
	$('#rao2').prop('disabled', true);
	});
});
JS;
$this->registerJs($script);
?>

