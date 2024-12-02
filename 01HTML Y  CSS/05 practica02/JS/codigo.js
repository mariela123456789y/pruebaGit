const passInput = document.querySelector('input[type=password]');
const icon = document.querySelector('i');
passInput.addEventListener('input', function(){
    if(this.value.length > 0){
        icon.classList.add('show');
    }else{
        icon.classList.remove('show');

    }
});
icon.addEventListener('mousedown', function(){
    passInput.setAttribute('type', 'text');
});
icon.addEventListener('mouseup', function(){
    passInput.setAttribute('type', 'password');
});

document.getElementById("pass").addEventListener("keyup", myFunction);

function myFunction() {
  var campo = document.getElementById("pass");
  if ((campo.value.length <=6)){
    campo.style.borderColor = "green";
  } else {
    campo.style.borderColor = "red";
  }
}