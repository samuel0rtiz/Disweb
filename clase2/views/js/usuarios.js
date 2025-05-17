function init(tipo) {
  console.log("mostar usuariosS")
  switch (tipo) {
    case 1: //al iniciar la aplicacion o reiniciar
      console.log("Entra case1");
      document.getElementById("Targetadebienvenida").style.display = "block";
      document.getElementById("Targetadebienvenida_2").style.display = "block";
      document.getElementById("id_tbusuarios").style.display = "none";



      document.getElementById("cajas").style.display = "none";
      document.getElementById("mostrar").style.display = "none";

      break;

    case 2:
      console.log("case2");//al momento de mostrar formuario

      console.log("mostrar formulario");
      document.getElementById("cajas").style.display = "block";
      document.getElementById("Targetadebienvenida").style.display = "none";
      document.getElementById("Targetadebienvenida_2").style.display = "none";
      document.getElementById("id_tbusuarios").style.display = "none";

      $("#txt_carrera").val("");
      $("#txt_nombre").val("");

      break;
      case 3://MOstarr los registros de usuarios 
      document.getElementById("Targetadebienvenida").style.display = "none";
      document.getElementById("Targetadebienvenida_2").style.display = "none";
      document.getElementById("id_tbusuarios").style.display = "block";



      document.getElementById("cajas").style.display = "none";
      document.getElementById("mostrar").style.display = "none";


      break;

    default:
      break;
  }
  listar_usuarios()
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
function listar_usuarios() {
  console.log("holadesde listar usuarios")
  $('#tabla_usuarios').DataTable({
    destroy:true,
    ajax:{
      type:"POST",
      url:"../ajax/formulario.php?opcion=listar_usuarios",
      dataSrc:"data"
    },
    columns:[
      {data:'id_usuario'},
      {data:'nombre'},
      {data:'carrera'},
      {data:'boton'}





    ],
    "iDisplayLength":3,
    order:[2,"des"]




  })
  
}

init(1);
