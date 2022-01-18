<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<!-- Container Body -->
<div class="container container1">

	<div class="row">
		<dir class="col-lg-1 col-md-1 col-sm-1"></dir>
		<div class="col-lg-10 col-md-10 col-sm-10">
			<h1 class="underlineheader0">Contacto</h1>
			<!-- Contact Form -->
			<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
			<h3>Mándanos un mensaje</h3>
			<form name="sentMessage" id="contactForm" novalidate>
				<div class="control-group form-group">
					<div class="controls">
						<label>Nombre Completo:</label> <input type="text" class="form-control"
							id="name" required
							data-validation-required-message="Por favor escribe tu Nombre.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Email:</label> <input type="email"
							class="form-control" id="email" required
							data-validation-required-message="Por favor escribe tu Email.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Mensaje:</label>
						<textarea rows="10" cols="100" class="form-control" id="message"
							required
							data-validation-required-message="Por favor escribe tu Mensaje"
							maxlength="999" style="resize: none"></textarea>
					</div>
				</div>
				<div id="success"></div>
				<!-- For success/fail messages -->
				<button type="submit" class="btn btn-primary">Mandar</button>
			</form>
			<!-- /.row -->

		</div>
	</div>
</div>

<!-- Contact Form JavaScript -->
<script src="<?=base_url() ?>layouts/js/jqBootstrapValidation.js"></script>
<script src="<?=base_url() ?>layouts/js/contact_me.js"></script>
