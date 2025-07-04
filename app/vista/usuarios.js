const btnlistar = document.querySelector('#btnListar');
document.addEventListener('DOMContentLoaded',()=>{
    btnlistar.addEventListener('click',listado)
});
function listado(){
    fetch('../controlador/usuariosControl.php',{

    }).then(response => response.json())
    .then(datos =>{console.log(datos)})
    .catch(error=>console.log(error));
}