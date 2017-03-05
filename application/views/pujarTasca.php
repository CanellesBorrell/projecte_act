<html>
<head>
<title>Upload Form</title>
</head>

<body>
<?php echo form_open_multipart('tareas/DoUpload/4')?>
<p> 
<label for="file"> Selecciona un fitxer</label>
 <p>
	  <input type="file" name="Tareas" value="Envia" size="50" /></p>
	  <p><button type="submit" class="btn btn-success" name="foto">Acceptar</button></p>
	  <?php echo form_close();?> <?php if($this->session->flashdata('success_upload'));?>
	  <div> <?php echo $this->session->flashdata('success_upload');?> </div>
</body>
