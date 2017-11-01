<?php include 'views/modules/menu.php';
	$mvc= new Mvc();
?>
<div class="principal" id="contacto">
	<div class="container">
		<div class="col-md-6">
			<h1>Asesoría<br> Administrativa, contable, fiscal y corporativa</h1>
			<h4>Ofrecemos soluciones adecuadas a tus necesidades.</h4>
		</div>			
		<div class="col-md-6">
			<form class="formulario" method="POST">
				<h3 class="text-center">Contacto</h3>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" placeholder="Nombre*" name="nombre" required autofocus="true">
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" placeholder="Apellidos*" name="apellidos" required>
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="email" class="form-control" placeholder="Email*" name="correo" required>
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="tel" class="form-control" placeholder="Celular" name="celular" required>
				    </div>
				</div>
				<div class="col-md-12">
					<select class="form-control" name="asunto">
				        	<option value="">Selecciona un servicio*</option>
				        	<option value="Contabilidad gubernamental">Contabilidad gubernamental</option>
				        	<option value="Contabilidad electrónica empresarial">Contabilidad electrónica empresarial</option>
				        	<option value="Defensa fiscal y administrativa">Defensa fiscal y administrativa</option>
				        	<option value="Fiscal">Fiscal</option>
				        	<option value="Corporativo">Corporativo</option>
				        	<option value="Capacitacion">Capacitacion</option>
				        	<option value="Proyectos Sustentables">Proyectos Sustentables</option>
			        </select>
				<br>
				</div>
				<div class="col-md-12">
					<div class="form-group">
				        <textarea class="form-control" rows="7" placeholder="Mensaje" name="mensaje"></textarea>
				    </div>
				</div>
				<div class="col-md-12">	
				    <p class="text-center"><button type="submit" class="btn btn-danger btn-lg boton">E N V I A R</button></p>
				</div>
			</form>
			<?php 
				$mvc->mensaje();
			 ?>
		</div>			
	</div>
</div>
<div id="servicios">
	 <div class="col-xs-12 col-md-4 padding0"></div>
	 <div class="col-xs-12 col-md-4 padding0">
		<h1 class="text-center">Nuestros Servicios</h1>
	 </div>
	 <div class="col-xs-12 padding0"></div>
        <div class="col-xs-12 col-md-4 padding0">          
            <div class="imagenes v1">
              <a href="home">
                <img src="views/img/Contabilidad.png" class="img-responsive mover">
                <div class="filtro"></div>
                <h2 class="titulo">Contabilidad Gubernamental</h2>
              </a>
            </div>        
        </div>
        <div class="col-xs-12 col-md-4 padding0">          
            <div class="imagenes v1">
                <a href="">
                <img src="views/img/electronicac.png" class="img-responsive mover">
                <div class="filtro"></div>
                <h2 class="titulo">Contabilidad electrónica empresarial</h2>
                </a>
            </div>       
        </div>
        <div class="col-xs-12 col-md-4 padding0">          
            <div class="imagenes v1">
                <a href="">
                <img src="views/img/administrativo.png" class="img-responsive">
                <div class="filtro"></div>
                <h2 class="titulo">Defensa fiscal & administrativa</h2>
                </a>
            </div>       
        </div>
        <div class="col-xs-12 col-md-4 padding0">          
          <div class="imagenes v1">
            <a href="">
              <img src="views/img/fiscal.jpg" class="img-responsive">
              <div class="filtro"></div>
              <h2 class="titulo">Fiscal</h2>
            </a>
          </div>         
        </div>
        <div class="col-xs-12 col-md-4 padding0">          
          <div class="imagenes v1">
            <a href="">
              <img src="views/img/corp.png" class="img-responsive">
              <div class="filtro"></div>
              <h2 class="titulo">Corporativo</h2>
            </a>
          </div>         
        </div>
        <div class="col-xs-12 col-md-4 padding0">          
          <div class="imagenes v1">
            <a href="">
              <img src="views/img/sustentable.png" class="img-responsive">
              <div class="filtro"></div>
              <h2 class="titulo">Proyectos sustentables</h2>
            </a>
          </div>         
        </div>

  </div>