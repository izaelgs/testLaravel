const server = '35.247.209.51';

init($('#projetos'), server);


$('[name="form-type"]').change(function (e) {
    let hiddenables = $('[hiddenable]');
    hiddenables.prop("disabled", true);
    hiddenables.addClass("hidden");

    $(`[${e.target.value}]`).prop("disabled", false);
    $(`[${e.target.value}]`).removeClass("hidden");
});

function init(input, server, url = false) {
    let params = input.attr('params');
    input.empty();

    $.ajax({
        url: url ? url + `&conditions=${params}` : `http://${server}/api/projeto/?conditions=${params}`,
        dataType: "json"
    }).then(data => {
        let items = data.current_page ? data.data : data;
        let links = data.current_page ? data.links : null;

        items.forEach(item => {
            appendProject(input, item.titulo, item.descricao);
        });

        document.getElementById('pagination').innerHTML = '';
        links.forEach(link => {
            if (link.url) appendLink(link.label, link.url, link.active);
        });
    });

}

function appendLink(page, url, active) {

    let links = document.getElementById('pagination');

    let li = document.createElement('li');
    let anch = document.createElement('a');

    li.classList.add('page-item');
    active ? anch.classList.add('page-link', 'bg-success', 'text-dark') : anch.classList.add('page-link', 'bg-dark', 'text-success');

    anch.innerHTML = page;
    anch.href = url;

    anch.addEventListener('click', e => {
        e.preventDefault();
        init($('#projetos'), null, url);
    })

    li.append(anch);
    links.append(li);

}

function appendProject(input, title, text) {

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

export default appendProject;
