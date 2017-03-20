<?php if($this->session->flashdata('option_registered')) :?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Yes!</strong> Cadastrado com sucesso.
	</div>
<?php endif;?>
<?php if($this->session->flashdata('failed_to_register')) :?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Ueeeeepa!</strong> Tivemos um problema para cadastrar. Tenta de novo...
	</div>
<?php endif;?>