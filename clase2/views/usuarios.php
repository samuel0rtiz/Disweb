<?php
include_once 'header.html';
?>
<!-------cuerpo de pagina--------->
<!--- mensaje de bienvenida---->
<div id="Targetadebienvenida">
<div class="card" style="width: 18rem;">
  <img src="../img/images.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Empecemos el registro</h5>
    <p class="card-text">Solo llevara un minuto</p>
    <a href="#" onclick="init(2)" class="btn btn-primary">Empecemos</a>
  </div>
</div>
</div>
<!--- fin mensaje de bienvenida---->
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


  <div id="boton_guardar">
    <button type="button" onclick="guardar_datos()" class="btn btn-primary">guardar</button>

  </div>
  <div id="boton_cancelar">
    <button type="button" onclick="init(1)" class="btn btn-danger">Cancelar</button>

    </div>


 

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
