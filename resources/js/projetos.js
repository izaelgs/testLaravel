const server = '35.247.209.51';

appendProjects($('#projetos'), server);


$('[name="form-type"]').change(function (e) {
    let hiddenables = $('[hiddenable]');
    hiddenables.prop("disabled", true);
    hiddenables.addClass("hidden");

    $(`[${e.target.value}]`).prop("disabled", false);
    $(`[${e.target.value}]`).removeClass("hidden");
});

function appendProjects(input, server) {
    let params = input.attr('params');

    $.ajax({
        url: `http://${server}/api/projeto/?conditions=${params}`,
        dataType: "json"
    }).then(data => {
        let items = data.current_page ? data.data : data;

        items.forEach(item => {

            appendToast(input, item.titulo, item.descricao);

            // let option = document.createElement('option');

            // option.value = item.id;
            // option.append(item.titulo);
            // if (item.periodos) option.setAttribute('periodos', item.periodos);

            // input.append(option);
        });
    });

}

function appendToast(input, title, text) {

        let col = document.createElement('div');
        let card = document.createElement('div');
        let card_body = document.createElement('div');
        let card_title = document.createElement('h5');
        let card_text = document.createElement('p');

        col.classList.add('col-md-4');
        card.classList.add('card', 'bg-dark');
        card_body.classList.add('card-body');
        card_title.classList.add('card-title');
        card_text.classList.add('card-text');

        card_title.append(title);
        card_text.append(text);

        col.append(card);
        card.append(card_body);
        card_body.append(card_title);
        card_body.append(card_text);

        input.append(col);

}

export default appendProjects;
