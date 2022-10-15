@include('template.header')
@include('template.nav')
<main class="container text-center text-light mt-5">
    <!-- Avisos em Geral -->
    <div class="toast-container position-fixed bottom-0 right-0 p-3">
    </div>
    <!-- Apresentação -->
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
    <br>
    <section class="inscricao mb-2 rounded" id="colaborador">
        <h2>Num Sou Estudante</h2>
        <p>Suspendisse facilisis venenatis libero eu euismod. Etiam sed libero sit amet diam posuere tincidunt vitae sit amet nulla. Nullam pellentesque mollis purus. Proin quis leo ut felis suscipit scelerisque. Nulla ac metus nulla. Maecenas ac nisl ut enim fringilla sagittis. Phasellus quis nulla ex. Aenean in massa id magna consequat facilisis quis nec lacus. Maecenas molestie sollicitudin nisi, vel hendrerit tortor convallis a.</p>
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img src="img/GOHxPB_Twister.png" alt="" class="responsive">
            </div>
            <div class="col-md-6">
                <form class="row g-3" id="f_colaborador">
                    <div class="col-md-4">
                        <label for="nome_completo" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Fulano de Tal">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fulano@email.com">
                    </div>
                    <div class="col-md-4">
                        <label for="email_profissional" class="form-label">Email Profissional</label>
                        <input type="email" class="form-control" id="email_profissional" name="email_profissional" placeholder="fulanoProfissional@email.com">
                    </div>
                    <div class="col-md-8">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Bairro Rua tal 176">
                    </div>
                    <div class="col-md-4">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(##) ####-####">
                    </div>
                    <div class="col-md-6">
                        <label for="responsavel" class="form-label">Responsável</label>
                        <input type="name" class="form-control" id="responsavel" name="responsavel" placeholder="Representante">
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="site" class="form-label">Site</label>
                        <input type="url" class="form-control" id="site" name="site" placeholder="site.com.br">
                    </div>
                    <div class="col-6 col-md-4">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="url" class="form-control" id="facebook" name="facebook" placeholder="fb.com/fulano.cicrano">
                    </div>
                    <div class="col-6 col-md-4">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="url" class="form-control" id="instagram" name="instagram" placeholder="instagram.com/fulano.cicrano">
                    </div>
                    <div class="col-6 col-md-4">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="likedin.com/fulano.cicrano">
                    </div>
                    <div class="col-12">
                        <label for="projeto" class="form-label">Projeto (Opcional)</label>
                        <select id="projeto" name="projeto" class="form-select">
                            <option hidden value="">Escolha um Projeto de Interesse...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="forma_integracao" class="form-label">Forma de Integração</label>
                        <select id="forma_integracao" name="forma_integracao" class="form-select">
                            <option hidden value="">Escolha uma Forma de Integração...</option>
                            <option value="4">
                                Voluntariado certificado - para o caso de alunos egressos
                            </option>
                            <option value="5">
                                Investidor
                            </option>
                            <option value="6">
                                Parceria Empresarial
                            </option>
                            <option value="7">
                                Tutoria
                            </option>
                            <option value="8">
                                Gestão de Projetos
                            </option>
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
        </div>
    </section>
</main>
@include('template.footer')
