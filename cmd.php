
php artisan migrate:reset


php artisan make:seeder PermissionTableSeeder


php artisan db:seed --class=PermissionTableSeeder


php artisan make:seeder CreateAdminUserSeeder


php artisan db:seed --class=CreateAdminUserSeeder


Criar uma Model e Migrations 
php artisan make:model nome da Model -m


Criar um Controller 
php artisan make:controller PostController --resource


Criando um modulo
https://www.diegobrocanelli.com.br/php/laravel-module/


Criando a autenticação toda.
https://medium.com/@tm.talhamaqsood18/simple-authentication-in-laravel-8-9-0-step-by-step-with-images-a63149679f2b


Exportar CSV e EXCEL 
<li><a class="nav-link" href="{{ url('https://websolutionstuff.com/post/laravel-8-import-export-csv-excel-file-example
') }}">Exportar CSV</a></li>



Mapas dos Layouts

Layouts         Principal

Layouts2        Sou do Hospital

Layouts 3       Regulação 








	
id
categorias_id
solicitacao
cns
nomedousuario
municipio
datasolicitacao
unidadedesejada
codigo
observacao1
observacao2
observacao3
observacao4
observacao5
statusSolicitacao
created_at
updated_at