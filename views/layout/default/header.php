<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Framework Básico:
		<?php 
			if (isset($this->titulo)) {
				echo $this->titulo;
			}
		?>
	</title>
	<link rel="stylesheet" href="<?php echo APP_URL_CSS."bootstrap.min.css"; ?>">
	<link rel="stylesheet" href="<?php echo APP_URL_CSS."font-awesome/css/all.css"; ?>">
	<link rel="stylesheet" href="<?php echo APP_URL_CSS."style.css"; ?>">
</head>
<body >
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="#" class="navbar-brand"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navPrimary" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navPrimary">
			<div class="navbar-nav">
				<a href="#" class="nav-item nav-link active">
					<i class="fa fa-home"></i>
					Inicio
				</a>
				<a href="<?php  echo APP_URL.'tareas';?>" class="nav-item nav-link">Tareas</a>
				<a href="<?php  echo APP_URL.'categorias';?>" class="nav-item nav-link">Categorias</a>
			</div>
		</div>
	</nav>
	<?php  
		if (isset($this->flashMessage)) {
			echo "<h4>".$this->flashMessage."</h4>";
		}
	?>