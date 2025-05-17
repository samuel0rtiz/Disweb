<?php
   include_once 'header.html';
   ?>
<!-------cuerpo de pagina--------->
<!--- mensaje de bienvenida tarjeta 1---->
<div class="row row-cols-1 row-cols-md-2 g-4">

    <div id="Targetadebienvenida">
      <div class="col">
        <div class="card" >
            <img src="../img/registo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Empecemos el registro</h5>
              <p class="card-text">Solo llevara un minuto</p>
              <a href="#" onclick="init(2)" class="btn btn-primary">Empecemos</a>
            </div>
        </div>
      </div>
    </div>
    <!--- fin mensaje de bienvenida---->
    <!--- mensaje de bienvenida tarjeta 2---->
    <div id="Targetadebienvenida_2">
      <div class="col">
    
        <div class="card" >
            <img src="../img/consulta.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Consulta todos los registos</h5>
              <p class="card-text">Solo llevara un minuto</p>
              <a href="#" onclick="init(3)" class="btn btn-primary">Mostar Usuarios</a>
            </div>
        </div>
      </div>

    </div>
    <!--- fin mensaje de bienvenida---->

</div>
<!--Tabla de registros-->
<div class="container col-10" id="id_tbusuarios">
  <hr>
    <button type="button" onclick= "init(1)" class="btn btn-dark">regresar</button>
    <table class="table table-dark" name="tabla_usuarios" id= "tabla_usuarios">
        <h2>Usuarios</h2>
        <tbody>
        <thead>
          <tr>
              <th>Id_usuario</th>
              <th>Nombre</th>
              <th>Carrera</th>
              <th>Opciones</th>
          </tr>
        </thead>
        </tbody>
    </table>
</div>
<!--Fin tabla de registros-->
<!-----cajas de texto------------->
<div id="cajas">
   <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="txt_nombre" placeholder="tu nombre">
   </div>
   <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Carrera</label>
      <textarea class="form-control" id="txt_carrera" placeholder="tu carrera" rows="3"></textarea>
   </div>
   <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" value="1" name="tipo_usuario" id="tipo_usuario">
      <label class="form-check-label" for="flexSwitchCheckDefault">Eres estudiante?</label>
   </div>
   <button type="button" onclick="guardar_datos()" class="btn btn-primary">guardar</button>
   <button type="button" onclick="init(1)" class="btn btn-danger">Cancelar</button>
</div>
<div id="mostrar">
   <input class="form-control" id="txmostar" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
   <input class="form-control" id="txmostarcarrera" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
   <input class="form-control" id="txmostarestudiante" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
</div>
<!----- fin de cajas de texto------------->
<!------- fin cuerpo de pagina--------->
<?php
   include_once 'footer.html';
   ?>
<script src="js/usuarios.js"></script>