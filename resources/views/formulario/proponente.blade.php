<section class="inscricao mb-2 rounded" id="colaborador">
    <h2>Faça sua Proposta</h2>
    <p>Suspendisse facilisis venenatis libero eu euismod. Etiam sed libero sit amet diam posuere tincidunt vitae sit amet nulla. Nullam pellentesque mollis purus. Proin quis leo ut felis suscipit scelerisque. Nulla ac metus nulla. Maecenas ac nisl ut enim fringilla sagittis. Phasellus quis nulla ex. Aenean in massa id magna consequat facilisis quis nec lacus. Maecenas molestie sollicitudin nisi, vel hendrerit tortor convallis a.</p>
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <img src="img/GOHxPB_Twister.png" alt="" class="responsive">
        </div>
        <div class="col-md-6">
            <form class="row g-3" id="f_colaborador">
                <div class="col-6">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Empresa</label>
                </div>
                <div class="col-6">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Pessoa Física</label>
                </div>
                <fieldset class="form-group">
                    <!-- -razao_social:testinelsons
                    -cnpj:1233455678
                    -tipo:1
                    -telefone:2798766653
                    -nome_contato:nome de alguem
                    -endereco:em frente ao de costas
                    -email:emeo@teste.test
                    -site:www.site.com.br
                    -instagram:insta
                    -facebook:face
                    -linkedin:linkdinho
                    area_projeto:1
                    app:1
                    contato:2 -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="razao_social" class="form-label">Razão Social</label>
                            <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Fulano de Tal">
                        </div>
                        <div class="col-md-4">
                            <label for="cnpj" class="form-label">Cnpj</label>
                            <input type="text" class="form-control" id="cnpj" name="cnpj">
                        </div>
                        <div class="col-md-4">
                            <label for="tipo" class="form-label">Tipo de Empresa</label>
                            <input type="text" class="form-control" id="tipo" name="tipo">
                        </div>
                        <div class="col-md-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(##) ####-####">
                        </div>
                        <div class="col-md-6">
                            <label for="nome_contato" class="form-label">Nome de Contato</label>
                            <input type="name" class="form-control" id="nome_contato" name="nome_contato" placeholder="Representante">
                        </div>
                        <div class="col-md-8">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Bairro Rua tal 176">
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="site.com.br">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="site" class="form-label">Site</label>
                            <input type="url" class="form-control" id="site" name="site" placeholder="https://site.com">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="url" class="form-control" id="facebook" name="facebook" placeholder="https://fb.com/fulano.cicrano">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="url" class="form-control" id="instagram" name="instagram" placeholder="https://instagram.com/fulano.cicrano">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://likedin.com/fulano.cicrano">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
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
                    </div>
                </fieldset>
                <div class="col-12 d-grid gap-2">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>
