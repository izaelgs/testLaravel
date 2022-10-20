const server = '35.247.209.51';

init_colaborador(server);


function init_colaborador(server) {

    const form = document.querySelector('#f_proponente');

    form.addEventListener('submit', e => {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');

        let type = $('[name="form-type"]').val();
        let campos = $('#f_proponente').serializeArray();
        let data = {};
        $.map(campos, function(n, i){
            if(n['name'] !== 'form-type'){
                data[n['name']] = n['value'];
            }
        });

        console.log(type);

        $.ajax({
            url: `http://${server}/api/${type}`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            $('#f_proponente')[0].reset();
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

$('[name="form-type"]').change(function(e) {
    let hiddenables = $('[hiddenable]');
    hiddenables.prop( "disabled", true );
    hiddenables.addClass( "hidden");

    $(`[${e.target.value}]`).prop( "disabled", false );
    $(`[${e.target.value}]`).removeClass( "hidden");
    console.log($(`[${e.target.value}]`));
});

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
