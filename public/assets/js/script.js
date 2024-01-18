// function showAlert(menssagem, targetElementId, timeout = 3000) {
//     var messageDiv = document.getElementById(targetElementId);
//     messageDiv.innerHTML = menssagem;
//     messageDiv.classList.remove('msgContato');

//     setTimeout(function(){

//         messageDiv.classList.add('msgContato');
//     }, timeout);





// }





// document.getElementById('formContato').addEventListener('submit', function(e){

//     e.preventDefault();

//     var data = {

//         nomeContato : document.getElementById('nomeContato').value,
//         emailContato : document.getElementById('emailContato').value,
//         assuntoContato : document.getElementById('assuntoContato').value,
//         mensContato : document.getElementById('mensContato').value,


//     }

//     fetch('/contato/enviar', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body:JSON.stringify(data)
//     })
//     .then(Response => {
//         if(!Response.ok){
//                 throw new Error('Erro no envio do Email!!!')
//         }
//         return Response.json();
//     })
//     .then(data =>{
//         showAlert(`<div class= "alert alert-success">${data.success}</div>`, 'contatoMenssagem');
//         document.getElementById('formContato').reset();
//     })
//     .catch(erroRespose => {
//         erroRespose.json().then(errorData => {
//             if(errorData.erros){
//                 let errorMenssages = Object.values(errorData.errors).map(error => `<div class= "alert alert-danger">${error}</div>`).join('');
//                 showAlert(errorMenssages, 'contatoMenssagem')
//             }
//         })
//         if(errorData.erros){

//         }
//     })

// })


function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout(function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}



document.getElementById('formContato').addEventListener('submit', function(e) {
    e.preventDefault();

    var data = {
        nomeContato: document.getElementById('nomeContato').value,
        emailContato: document.getElementById('emailContato').value,
        assuntoContato: document.getElementById('assuntoContato').value,
        mensContato: document.getElementById('mensContato').value
    };


    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro na resposta do servidor');
        }
        return response.json();
    })
    .then(data => {
        showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem');
        document.getElementById('formContato').reset();
    })
    .catch(errorResponse => {
        errorResponse.json().then(errorData => {
            if (errorData.errors) {
                let errorMessages = Object.values(errorData.errors).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
                showAlert(errorMessages, 'contatoMensagem');
            }
        });
    });
});


