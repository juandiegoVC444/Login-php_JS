window,addEventListener('load',()=>{

let button = document.getElementById('formulario');
let usuario = document.getElementById('usuario');
let password = document.getElementById('password');
let alert = document.getElementById('alerta')

console.log(usuario);

function data(){
let datos = new FormData();
   data.append("usuario", usuario.value);
   data.append("password", password.value);
   fetch('validalogin.php',{
   method:  'POST',
   body: datos
    }).then(Response => Response.json())
    .then(({success}) => {
      if(success === 1){
         location.href = 'home.php';
     }else{
       alert();
     }
    });

}

function alerta(){
    alert.innerHTML = `
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>datos incorrectos</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    `;

}


 button.addEventListener('submit',(e)=>{
   e.preventDefault();

   data();

 })





})