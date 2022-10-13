@include('template.header')
@include('template.nav')
<main class="container text-center text-light mt-5">
    <section class="institucional mb-2 row d-flex align-items-center" id="sobre">
        <div class="col-md-6">
            <img src="img/GOHxPB_Balloon_BG.png" alt="" class="responsive">
        </div>
        <div class="col-md-6">
            <h3>O Laboratório</h3>
            <p>Suspendisse facilisis venenatis libero eu euismod. Etiam sed libero sit amet diam posuere tincidunt vitae sit amet nulla. Nullam pellentesque mollis purus. Proin quis leo ut felis suscipit scelerisque. Nulla ac metus nulla. Maecenas ac nisl ut enim fringilla sagittis. Phasellus quis nulla ex. Aenean in massa id magna consequat facilisis quis nec lacus. Maecenas molestie sollicitudin nisi, vel hendrerit tortor convallis a.</p>
        </div>
    </section>
    <br>
    <section class="inscricao mb-2 rounded" id="estudante">
        <h2>Sou Estudante</h2>
        <p>Suspendisse facilisis venenatis libero eu euismod. Etiam sed libero sit amet diam posuere tincidunt vitae sit amet nulla. Nullam pellentesque mollis purus. Proin quis leo ut felis suscipit scelerisque. Nulla ac metus nulla. Maecenas ac nisl ut enim fringilla sagittis. Phasellus quis nulla ex. Aenean in massa id magna consequat facilisis quis nec lacus. Maecenas molestie sollicitudin nisi, vel hendrerit tortor convallis a.</p>
        <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-6">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="nome_completo" class="form-label">Nome Completo</label>
                        <input type="name" class="form-control" id="nome_completo" name="nome_completo" placeholder="Fulano de Tal">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fulano@email.com">
                    </div>
                    <div class="col-12">
                        <label for="endereco" class="form-label">Endereco</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua do Januario 1234">
                    </div>
                    <div class="col-md-6">
                        <label for="registro_academico" class="form-label">RA (Registro Acadêmico)</label>
                        <input type="text" class="form-control" id="registro_academico" name="registro_academico" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="curso" class="form-label">Curso</label>
                        <select id="curso" name="curso" class="form-select">
                            <option selected>Escolha um Curso...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-8 col-md-4">
                        <label for="inputState" class="form-label">Área</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha uma Área...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-4 col-md-2">
                        <label for="periodo" class="form-label">Período</label>
                        <input type="number" class="form-control" id="periodo" name="periodo" min="1" max="5" value="1">
                    </div>
                    <div class="col-md-6">
                        <label for="periodo" class="form-label">Forma de Integração</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha uma Forma de Integração...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="periodo" class="form-label">Projeto (Opcional)</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha um Projeto de Interesse...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="periodo" class="form-label">Área de Interesse</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha uma Área...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="button" class="btn btn-secondary">Cadastrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="img/GOHxPB_Apple.png" alt="" class="responsive">
            </div>
        </div>
    </section>
    <br>
    <section class="inscricao mb-2 rounded" id="colaborador">
        <h2>Num Sou Estudante</h2>
        <p>Suspendisse facilisis venenatis libero eu euismod. Etiam sed libero sit amet diam posuere tincidunt vitae sit amet nulla. Nullam pellentesque mollis purus. Proin quis leo ut felis suscipit scelerisque. Nulla ac metus nulla. Maecenas ac nisl ut enim fringilla sagittis. Phasellus quis nulla ex. Aenean in massa id magna consequat facilisis quis nec lacus. Maecenas molestie sollicitudin nisi, vel hendrerit tortor convallis a.</p>
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img src="img/GOHxPB_Twister.png" alt="" class="responsive">
            </div>
            <div class="col-md-6">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="nome_completo_c" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome_completo_c" name="nome_completo" placeholder="Fulano de Tal">
                    </div>
                    <div class="col-md-4">
                        <label for="email_c" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_c" name="email" placeholder="fulano@email.com">
                    </div>
                    <div class="col-md-4">
                        <label for="email_profissional" class="form-label">Email Profissional</label>
                        <input type="email" class="form-control" id="email_profissional" name="email_profissional" placeholder="fulanoProfissional@email.com">
                    </div>
                    <div class="col-md-8">
                        <label for="endereco_c" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco_c" name="endereco" placeholder="Bairro Rua tal 176">
                    </div>
                    <div class="col-md-4">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(##) ####-####">
                    </div>
                    <div class="col-md-4">
                        <label for="responsavel" class="form-label">Responsável</label>
                        <input type="name" class="form-control" id="responsavel" name="responsavel" placeholder="Representante">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Área</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha uma Área...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="site" class="form-label">Site</label>
                        <input type="url" class="form-control" id="site" name="site" placeholder="site.com.br">
                    </div>
                    <div class="col-4">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="url" class="form-control" id="facebook" name="facebook" placeholder="fb.com/fulano.cicrano">
                    </div>
                    <div class="col-4">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="url" class="form-control" id="instagram" name="instagram" placeholder="instagram.com/fulano.cicrano">
                    </div>
                    <div class="col-4">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="likedin.com/fulano.cicrano">
                    </div>
                    <div class="col-12">
                        <label for="periodo" class="form-label">Projeto (Opcional)</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha um Projeto de Interesse...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="periodo" class="form-label">Forma de Integração</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha uma Forma de Integração...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="periodo" class="form-label">Área de Interesse</label>
                        <select id="inputState" class="form-select">
                            <option selected>Escolha uma Área...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="button" class="btn btn-secondary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@include('template.footer')
