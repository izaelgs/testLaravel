function init_estudante(server) {

    const form = document.querySelector('#f_estudante');

    appendOptions(form.curso, 'cursos', server);
    appendOptions(form.projeto, 'projeto', server);
    appendOptions(form.area_interesse, 'areaAP', server);

    form.addEventListener('submit', e => {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');

        let data = {
            "curso": form.curso.value,
            "nome_completo": form.nome_completo.value,
            "email": form.email.value,
            "endereco": form.endereco.value,
            "registro_academico": form.registro_academico.value,
            "periodo": form.periodo.value,
            "forma_integracao": form.forma_integracao.value,
            "area_interesse": form.area_interesse.value,
            "projeto": form.projeto.value
        }

        $.ajax({
            url: `http://${server}/api/estudante`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            $('#f_estudante')[0].reset();
            appendToast('Cadastro Concluído com sucesso', 'success').then(element => {
                const toast = new bootstrap.Toast(element);
                toast.show();
            });
        }).catch(data => {
            data = data.responseJSON.errors;
            if (Object.keys(data).length) {
                for(let erro in data) {
                    document.querySelector(`#${erro}`).classList.add('is-invalid');
                }
            } else {
                appendToast('Algo de errado não está certo', 'danger').then(element => {
                    const toast = new bootstrap.Toast(element);
                    toast.show();
                });
            }
        });
    });

    form.curso.addEventListener('change', e => {
        let periodos = form.curso.options[form.curso.selectedIndex].getAttribute('periodos');
        form.periodo.setAttribute('max', periodos);
        if(form.periodo.value > periodos) form.periodo.value = periodos;
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

export default init_estudante;
