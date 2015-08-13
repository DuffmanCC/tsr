<!-- === START OUR CONTACT SECTION === -->
<section id="contact-section" class="container-fluid">

	<div class="row">
		<?php if( !dynamic_sidebar( 'contact' ) ): ?>
	        
	    <h3>Inster contact shortcut</h3>

	    <?php endif; ?>
	</div>
    

    <div class="row contact-logos">
		<div class="col-xs-12 col-sm-4">
			<div class="address">
				<i class="fa fa-skype"></i><br>
				<span>duffmancc</span>
				<a onclick="return skypeCheck();" href="skype:duffmancc?call">Call me</a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="mail">
				<i class="fa fa-envelope"></i><br>
				<span><?php bloginfo( 'admin_email' ); ?></span>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4">
			<div class="phone">
				<i class="fa fa-phone"></i><br>
				<span>ask</span>
			</div>
		</div>
	</div><!-- /.row -->
	
</section>
<!-- === END OUR CONTACT SECTION === -->