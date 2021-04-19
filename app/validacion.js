
//  VARIABLES

const formulario = document.getElementById('centradoForm'); 
const entradas = document.querySelectorAll('#centradoForm input, select'); 
const vcontraseña1 = document.getElementById('contraseña');
const vcontraseña2 = document.getElementById('contraseña2');





//  Expresiones regulares

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, //Letras y espacios, puede llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    password: /^.{4,12}$/, // 4 a 12 digitos.
    pais: /^[a-zA-ZÀ-ÿ\s]{1,40}$/
}

// Objeto campos (empieza todo en falso, es decir "error")

const campos = {
	
	nombre: false,
    apellido: false,
	correo: false,
    usuario: false,
    contraseña: false,
    contraseña2:false,
	pais: false 
}


//  Validacion de cada uno de los campos

const ValidarFormulario = (evento) => {

    switch(evento.target.name) {


        case "nombre": 

            if (expresiones.nombre.test(evento.target.value)){
                document.getElementById("nombre").className="form-control is-valid";
                campos[evento.target.name] = true;

                
            }
            else{
                document.getElementById("nombre").className="form-control is-invalid";
                campos[evento.target.name] = false;
            }


        break; 
            
        case "apellido":
            if (expresiones.apellido.test(evento.target.value)){
                document.getElementById("apellido").className="form-control is-valid";
                campos[evento.target.name] = true;
            }
            else {
                document.getElementById("apellido").className="form-control is-invalid";
                campos[evento.target.name] = false;
            }
            
        break; 

        case "correo":

            if (expresiones.correo.test(evento.target.value)){
                document.getElementById("email").className="form-control is-valid";
                campos[evento.target.name] = true;
                
            }
            else {
                document.getElementById("email").className="form-control is-invalid";
                campos[evento.target.name] = false;
            }
            
        break; 

        case "usuario":
            if (expresiones.usuario.test(evento.target.value)){
                document.getElementById("usuario").className="form-control is-valid";
                campos[evento.target.name] = true;
            }
            else {
                document.getElementById("usuario").className="form-control is-invalid";
                campos[evento.target.name] = false;
            }
            
        break; 

        case "contraseña":

            if (expresiones.password.test(evento.target.value)){
                document.getElementById("contraseña").className="form-control is-valid"; 
                campos[evento.target.name] = true;
            }
            else {
                document.getElementById("contraseña").className="form-control is-invalid";
                campos[evento.target.name] = false;
            }
            
        
        
        break; 

        case "contraseña2": 

            if (vcontraseña1.value == vcontraseña2.value){
                document.getElementById("contraseña2").className="form-control is-valid";
                campos[evento.target.name]= true;
            
            }
            
            else{
                document.getElementById("contraseña2").className="form-control is-invalid";
                campos[evento.target.name]= false;
            }

        break;


        case "pais":

            if (expresiones.pais.test(evento.target.value)){
                document.getElementById("pais").className="form-control is-valid";
                campos[evento.target.name] = true;
            }
            else {
                document.getElementById("pais").className="form-control is-invalid";
                campos[evento.target.name]= false;
            }
            
        
        break; 
    }

}




//EVENTOS (keyup, blur)

entradas.forEach( (entrada) => {
    entrada.addEventListener("keyup",  ValidarFormulario)
    entrada.addEventListener("blur",  ValidarFormulario)

}  );  

formulario.addEventListener("submit", (presionado) => {


    if(campos.nombre && campos.apellido && campos.correo && campos.usuario && 
        campos.contraseña && campos.contraseña2 && campos.pais){
            Swal.fire({
                title: "Excelente! Usuario registrado",
                icon: "success"
            })

    }
     
    else{
        presionado.preventDefault() 
        Swal.fire({
            title: "Error",
            text: "Completa bien todos los campos. Leé bien los requisitos de cada campo.",
            icon: "error"
        })
    }
}); 