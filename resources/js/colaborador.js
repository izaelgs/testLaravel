function init_colaborador(server) {

    const form = document.querySelector('#f_colaborador');

    appendOptions(form.projeto, 'projeto', server);
    appendOptions(form.area_interesse, 'areaAP', server);

    form.addEventListener('submit', e => {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');

        let data = {
            "nome_completo": form.nome_completo.value,
            "email": form.email.value,
            "endereco": form.endereco.value,
            "telefone": form.telefone.value,
            "email_profissional": form.email_profissional.value,
            "site": form.site.value,
            "instagram": form.instagram.value,
            "facebook": form.facebook.value,
            "linkedin": form.linkedin.value,
            "responsavel": form.responsavel.value,
            "forma_integracao": form.forma_integracao.value,
            "area_interesse": form.area_interesse.value,
            "projeto": form.projeto.value
        }

        $.ajax({
            url: `http://${server}/api/colaborador`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            $('#f_colaborador')[0].reset();
            appendToast('Cadastro Concluído com sucesso', 'success').then(element => {
                const toast = new bootstrap.Toast(element);
                toast.show();
            });
        }).catch(data => {
            data = data.responseJSON.errors;
            if (Object.keys(data).length) {
                for (let erro in data) {
                    form.querySelector(`#${erro}`).classList.add('is-invalid');
                }
            } else {
                appendToast('Algo de errado não está certo', 'danger').then(element => {
                    const toast = new bootstrap.Toast(element);
                    toast.show();
                });
            }
        });
    });

}

function appendOptions(input, route, server) {
    $.ajax({
        url: `http://${server}/api/${route}`,
        dataType: "json"
    }).then(data => {
        let items = data.current_page ? data.data : data;

        items.forEach(item => {

            let option = document.createElement('option');

            option.value = item.id;
            option.append(item.titulo);
            if (item.periodos) option.setAttribute('periodos', item.periodos);

            input.append(option);
        });
    });

}

function appendToast(mensagem, status, server) {

    return new Promise((resolve, reject) => {
        let toast = document.createElement('div');

        toast.classList.add('toast', `bg-${status}`);
        toast.id = 'liveToast';
        toast.role = "alert";
        toast.setAttribute('aria-live', "assertive");
        toast.setAttribute('aria-atomic', "true");

        toast.innerHTML = `
                    <div class="toast-header  bg-dark">
                        <strong class="me-auto">Unitech</strong>
                        <small>Agora</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${mensagem}
                    </div>`;

        document.querySelector('.toast-container').append(toast);

        resolve(toast);
    })
}

export default init_colaborador;
