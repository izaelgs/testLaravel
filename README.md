<h1>Unitech.lab</h1>
<br>
<h3>Requisitos para o Ambiente</h3>
<ul>
    <li>PHP 7.4^ - https://www.php.net/downloads.php</li>
    <li>Composer - https://getcomposer.org/download/ (instalar de preferência globalmente)</li>
    <li>Mysql</li>
    <li>Node - https://nodejs.org/pt-br/download/</li>
</ul>
<p>Após instalar as ferramentas acima é necessário executar os seguintes comandos</p>
<ul>    
    <li>git clone git@github.com:izaelgs/testLaravel.git</li>
    <li>cd testLaravel</li>
    <li>composer install</li>
    <li>cp .env.example .env</li>
    <li>php artisan key:generate</li>
</ul>
<p>Após instalar as ferramentas necessárias e executar os comandos acima é necessário configurar a conexão com o banco de dados no arquivo .env que pode ser configurado a partir do arquivo .env.example</p>
<p>Em seguida precisamos construir a estrutura de dados executando o comando *php artisan migrate* e, se houver preferência em caso de testes, também pode ser executado o comando *php artisan db:seed* para preencher algumas tabelas aleatoriamente</p>
<p>A seguir compilamos os assets do projeto com *npm run dev* e podemos então iniciar a aplicação com o comando *php artisan serve* que o laravel estará rodando por padrão em http://localhost:8000</p>
<p>para mais informações sobre o framework laravel - https://laravel.com/</p>
