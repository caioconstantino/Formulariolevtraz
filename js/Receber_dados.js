function enviar(){
    //Variaveis que recebem valor dos inputs e depois são atribuidas ao JSON
    var nameValue = document.querySelector(".js-input-name").value;
    var emailValue = document.querySelector(".js-input-email").value;
    var telValue = document.querySelector(".js-input-tel").value;
    var passwordValue = document.querySelector(".js-input-password").value;
alert ('funfou')
    var formValue = {                                 
        name: nomeValue,
        email: emailValue,
        data: {                                     
            tel: telValue,                  
            password: passwordValue      
        }
    };
    console.log(formValue);
}