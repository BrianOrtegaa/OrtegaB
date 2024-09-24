
const opcion = document.querySelector(".opcion");
const deshabilitar = document.getElementById("nom_asig");

opcion.addEventListener("change", habi);

function habi(){
    if(opcion.value =="3"){
        deshabilitar.disabled=true;
    }else {
        deshabilitar.disabled=false;
}
}




function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if (i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
}



var a = document.getElementById("loginBtn");
var b = document.getElementById("registerBtn");
var x = document.getElementById("login");
var y = document.getElementById("register");

function login() {
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
}

function register() {
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
}


const asignaturaSelect = document.getElementById('nom_asig');
const asigValueInput = document.getElementById('cod_asig');

asignaturaSelect.addEventListener('change', function() {
    const seleccionada = asignaturaSelect.value;
    asigValueInput.value = seleccionada;
});








// document.getElementById('id_tipoUS').addEventListener('change', function() {
//     var asignaturaInput = document.getElementById('nom_asig');
//     var codigoAsignaturaInput = document.getElementById('cod_asig');

//     if (this.options[this.selectedIndex].value === '3') { // Verificar si la opción seleccionada es 'Estudiante'
//         asignaturaInput.disabled = true;
//         codigoAsignaturaInput.disabled = true;
//     } else {
//         asignaturaInput.disabled = false;
//         codigoAsignaturaInput.disabled = false;
//     }
// });

