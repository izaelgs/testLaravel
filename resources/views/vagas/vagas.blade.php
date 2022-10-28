@include('template.header')
@include('template.nav')
<main class="container text-center text-light mt-5">
    <!-- Avisos em Geral -->
    <div class="toast-container position-fixed bottom-0 right-0 p-3">
    </div>
    <br>
    <div class="container text-start">
        <div class="bg-dark p-4 mt-4 rounded">
            <h2>Vagas Disponíveis</h2>
            <p>Assim que as vaga ficar disponivel nois bota aqui pra vcs</p>
        </div>
        <br>
        <div class="row m-0">
            <div class="col-md-4 p-0 pb-4">
                <div class="card bg-dark">
                    <div class="vaga-img mx-2 my-4" style="background-image: url('/img/trainee.jpg');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Pessoa Trainee - Segurança da Informação</h5>
                        <p class="card-text">Vila Velha -ES</p>
                        <a href="https://lnkd.in/dSHg_srb" target="_blank" class="btn btn-primary">Tenho Interesse</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0 pb-4">
                <div class="card bg-dark">
                    <div class="vaga-img mx-2 my-4" style="background-image: url('/img/GOHxPB_Apple.png');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Pronome Neutrer</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Tenho Interesse</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0 pb-4">
                <div class="card bg-dark">
                    <div class="vaga-img mx-2 my-4" style="background-image: url('/img/GOHxPB_Balloon_BG.png');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Engenheiro Estratégico em Free Fire</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary text-left">Tenho Interesse</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0 pb-4">
                <div class="card bg-dark">
                    <div class="vaga-img mx-2 my-4" style="background-image: url('/img/GOHxPB_Twister.png');"></div>
                    <div class="card-body">
                        <h5 class="card-title">TikToker</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Tenho Interesse</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0 pb-4">
                <div class="card bg-dark">
                    <div class="vaga-img mx-2 my-4" style="background-image: url('/img/GOHxPB_Apple.png');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Escreva Um Titulo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Tenho Interesse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('template.footer')
