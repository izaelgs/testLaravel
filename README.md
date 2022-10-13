<h1>Unitech.lab</h1>
<br>
<h3>Requisitos para o Ambiente</h3>
<ul>
    <li>PHP 7.4^</li>
    <li>Composer</li>
    <li>Mysql</li>
    <li>Node</li>
</ul>
<p>Após instalar as ferramentas acima é necessário executar os seguintes comandos</p>
<ul>    
    <li>git clone git@github.com:izaelgs/testLaravel.git</li>
    <li>composer install</li>
    <li>cd testLaravel</li>
    <li>php artisan key:generate</li>
</ul>
<p>Após instalar as ferramentas necessárias e executar os comandos acima é necessário con figurar o arquivo .env que pode ser configurado a partir do arquivo .env.example</p>
<p>Em seguida precisamos construir a estrutura de dados executando o comando *php artisan migrate* e, se houver preferência em caso de testes, também pode ser executado o comando *php artisan db:seed* para preencher algumas tabelas aleatoriamente</p>
<p>A seguir compilamos os assets do projeto com *npm run dev* e podemos então iniciar a aplicação com o comando *php artisan serve* que o laravel estará rodando por padrão em http://localhost:8000</p>
