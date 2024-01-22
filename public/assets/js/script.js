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

    setTimeout(function () {
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros) {
    let todosOsErros = "";

    for (const [key, value] of Object.entries(erros)) {
        todosOsErros += `<div class="alert alert-danger">${value.join(", ")}</divi>`;
    }

    if (todosOsErros) {
        showAlert(todosOsErros, "contatoMensagem");
    }
}

document.getElementById('formContato').addEventListener('submit', function (e) {
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
                return response.json().then(errorData => {
                    throw errorData;
                })
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem');
                document.getElementById('formContato').reset();
            }
            else {
                showAlert(`<div class="alert alert-success">Erro ao enviar email.</div>`, "contatoMensagem")
            }
        })
        .catch(error => {
            if (error.errors) {
                displayError(error.errors);
            } else {
                console.log("Erro desconhecido", error);
            }
        });

});


