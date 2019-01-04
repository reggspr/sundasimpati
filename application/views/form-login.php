<div class="container">
	<?php echo form_open('login/do_login','class="form-login"') ?>
	<h1>L O G I N</h1>
	<h5><?php echo $this->session->flashdata('error') ?></h5>
	<input type="text" name="uname" placeholder="Masukkan username" class="form-control" autofocus>
	<br>
	<input type="password" name="pass" placeholder="Password" class="form-control">
	<input type="submit" name="submit" value="Login" class="btn btn-primary" class="form-group">
	</form>
</div>