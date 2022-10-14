const { errors } = require("luaparse");

const input_curso = $('#curso');
const input_periodo = $('#periodo');
const input_projeto = $('#projeto');
const input_area_interesse = $('#area_interesse');

const form = document.querySelector('#f_estudante');

appendOptions(input_curso, 'cursos');
appendOptions(input_projeto, 'projeto');
appendOptions(input_area_interesse, 'areaAP');

form.addEventListener('submit',e => {
    e.preventDefault();
    $('.is-invalid').removeClass('is-invalid');

    data = {
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
        url: `http://localhost:8000/api/estudante`,
        method: "post",
        data: data,
        dataType: "json"
    }).then(data => {
        console.log(data);
    }).catch(data => {
        data = data.responseJSON.errors;
        if(Object.keys(data).length) {
            for(erro in data) {
                console.log(erro);
                document.querySelector(`#${erro}`).classList.add('is-invalid');
            }
        } else {
            alert('deu rui algum trem ai');
        }
    });
})

input_curso.change(e => {
    let periodos = input_curso.find(':selected').attr('periodos');
    input_periodo.attr('max',periodos);
});

function appendOptions(input, route) {
    $.ajax({
        url: `http://localhost:8000/api/${route}`,
        dataType: "json"
    }).then(data => {
        items = data.current_page ? data.data : data;

        items.forEach(item => {

            option = document.createElement('option');

            option.value = item.id;
            option.append(item.titulo);
            if(item.periodos) option.setAttribute('periodos', item.periodos);

            input.append(option);
        });
    });

}
