<?php
/**
 * The 404 template (Not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package gramophone
 **/

?>

<?php get_header('nonnav'); ?>
<div class="error-page">
<h2>Oops!</h2>
<h1 class="404error"> 404 </h1>
<h2>Not Found</h2>
<div class="error-details">
	Sorry, an error has occured. Requested page not found!
</div>



<div class="error-actions">
	<a href="{{url('/')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
		Take Me Home </a><a href="{{url('/contact-us')}}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
</div>
</div>

</body>

