<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('css/micss.css') ?>" rel="stylesheet">
	<title> Control de Visitas </title>
</head>

<body>
	<!-- Barra superior fija con opciones principales de menú -->
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?= $titulo ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?= my_menu_ppal(); ?>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
            <?= $this->load->view($contenido) ?>
            
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
        	<div class="panel panel-primary">
  				<div class="panel-heading">
    			<h3 class="panel-title">Menu del Usuario</h3>
  			</div>
  			<div class="panel-body"> 
  				<?= my_menu_app(); ?>
  			</div>
			</div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
      <hr>
 
            <footer>
             <p><?= $this->session->userdata('usuario').' ('.$this->session->userdata('perfil_name').')'; ?>  Elaborado por: La UTIC copyleft&copy; Fundacite Aragua 2015 - jcsa <?= date('d-m-Y H:i') ?> </p>
            </footer>
        </div>

	<script src="<?= base_url('js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
