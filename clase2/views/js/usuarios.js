function init(tipo) {
  switch (tipo) {
    case 1: //al iniciar la aplicacion o reiniciar
      console.log("Entra case1");
      document.getElementById("Targetadebienvenida").style.display = "block";

      document.getElementById("cajas").style.display = "none";
      document.getElementById("mostrar").style.display = "none";

      break;

    case 2:
      console.log("case2");

      console.log("mostrar formulario");
      document.getElementById("cajas").style.display = "block";
      document.getElementById("Targetadebienvenida").style.display = "none";

      $("#txt_carrera").val("");
      $("#txt_nombre").val("");

      break;

    default:
      break;
  }
}

function guardar_datos() {
  console.log("Guradando datos");
  document.getElementById("cajas").style.display = "none";
  document.getElementById("mostrar").style.display = "block";

  datos = {};

  datos.nombre = $("#txt_nombre").val();
  datos.carrera = $("#txt_carrera").val();
  value = $("input[type=checkbox][name=tipo_usuario]:checked").val();
  datos.tipo = value !== undefined ? parseInt(value) : 0;

  console.log(datos);
  $.ajax({
    data: datos,

    url: "../ajax/formulario.php?opcion=alta_usuario",
    type: "POST",

    success: function (response) {
      alert(response);
      console.log("Datos guardados desde ajax");
      init(1);
    },
  });
}

init(1);
