<?php
define('ORG_PHONE',  'Phone: +91 866 247 1414');
define('ORG_MOBILE', 'Mobile: +91 934 647 1414');

define('ORG_ADDRESS',"
Door No.: 39 - 8 - 40<br />
Kotha Madhava Rao Street<br />
Labbipet Pet<br />
Vijayawada<br />
Andhra Pradesh<br />
India - 520010");
?>
<div class="card col-md-3 bg-info">
<div class="card-header text-center"><strong>Visit Us</strong></div>	
<div class="card-body">
<p><strong>Working Hours</strong></p>
<p>Monday - Saturday<br/> (9:00 am to 1:30 pm) and<br/>  (2:00 pm to 9:00 pm)</p>
<p class="text-danger">
Sunday - (Closed)</p>
<br />
<p><?php echo ORG_PHONE ?><br />
<?php echo ORG_MOBILE ?></p>
<p><?php echo ORG_ADDRESS ?></p>
</div>
</div>
