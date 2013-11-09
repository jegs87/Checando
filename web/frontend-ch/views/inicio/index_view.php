<div class="main_wrapper">
<div class="content_wrapper">
<div class="container cbg msp ">
<div class="content_block no-sidebar row">
<div class="fl-container span12">
<div class="row">
<div class="posts-block span12">
<div class="contentarea">
<div class="row-fluid">
    <div class="span12 ">
    <?php 
	foreach ($q->response as $key => $value) { ?>
		<span><?php echo $value->id; ?></span>
		<br>
		<span><?php echo $value->name; ?></span>
<?php } ?>

    </div><!--.module_cont -->
    <div class="clear"><!-- ClearFIX --></div>
</div>

</div>
</div>
<div class="clear"><!-- ClearFix --></div>
</div>
<div class="clear"></div>
</div>
</div>
</div><!-- .container -->
</div><!-- .content_wrapper -->
</div>