<p><?php if (isset($error)) echo $error; ?></p>
<?php echo form_open_multipart('Welcome_IF/do_upload','class="form-horizontal"'); ?>
<input type="file" name="userfile">
<br>
<br>
<input type="submit" value="Upload" class="btn btn-info">
<?php echo form_close(); ?>