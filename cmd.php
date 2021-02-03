
php artisan migrate:reset

php artisan make:seeder PermissionTableSeeder

php artisan db:seed --class=PermissionTableSeeder

php artisan make:seeder CreateAdminUserSeeder

php artisan db:seed --class=CreateAdminUserSeeder





	
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