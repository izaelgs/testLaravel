<section class="inscricao mb-2 rounded" id="estudante">
        <h2>Sou Estudante</h2>
        <p>Suspendisse facilisis venenatis libero eu euismod. Etiam sed libero sit amet diam posuere tincidunt vitae sit amet nulla. Nullam pellentesque mollis purus. Proin quis leo ut felis suscipit scelerisque. Nulla ac metus nulla. Maecenas ac nisl ut enim fringilla sagittis. Phasellus quis nulla ex. Aenean in massa id magna consequat facilisis quis nec lacus. Maecenas molestie sollicitudin nisi, vel hendrerit tortor convallis a.</p>
        <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-6">
                <form class="row g-3" id="f_estudante">
                    <div class="col-md-6">
                        <label for="nome_completo" class="form-label">Nome Completo*</label>
                        <input type="name" class="form-control"
                            id="nome_completo" name="nome_completo" placeholder="Fulano de Tal">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control"
                            id="email" name="email" placeholder="fulano@email.com">
                    </div>
                    <div class="col-12">
                        <label for="endereco" class="form-label">Endereco*</label>
                        <input type="text" class="form-control"
                            id="endereco" name="endereco" placeholder="Rua do Januario 1234">
                    </div>
                    <div class="col-md-6">
                        <label for="registro_academico" class="form-label">RA (Registro Acadêmico)*</label>
                        <input type="text" class="form-control"
                            id="registro_academico" name="registro_academico" placeholder="9999999999">
                    </div>
                    <div class="col-md-6">
                        <label for="curso" class="form-label">Curso*</label>
                        <select id="curso" name="curso" class="form-select">
                            <option hidden value="">Selecione seu Curso...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="periodo" class="form-label">Período*</label>
                        <input type="number" class="form-control"
                            id="periodo" name="periodo" min="1" max="5" value="1">
                    </div>
                    <div class="col-md-10">
                        <label for="forma_integracao" class="form-label">Forma de Integração*</label>
                        <select id="forma_integracao" name="forma_integracao" class="form-select">
                            <option hidden value="">Escolha uma Forma de Integração...</option>
                            <option value="1">
                                Estágio voluntário - Este exige presencialidade de 4 a 6 horas por dia.
                            </option>
                            <option value="2">
                                Horas de ACC - Horas de ACC podem ser conduzidas à distância.
                            </option>
                            <option value="3">
                                Voluntariado certificado - para o caso de alunos egressos
                            </option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="projeto" class="form-label">Projeto</label>
                        <select id="projeto" name="projeto" class="form-select">
                            <option hidden value="" value="">Escolha um Projeto de Interesse...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="area_interesse" class="form-label">Área de Interesse</label>
                        <select id="area_interesse" name="area_interesse" class="form-select">
                            <option hidden value="">Escolha uma Área...</option>
                        </select>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="submit" class="btn btn-secondary">Cadastrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="img/GOHxPB_Apple.png" alt="" class="responsive">
            </div>
        </div>
    </section>
