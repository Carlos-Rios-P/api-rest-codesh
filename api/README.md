## Conexão com MONGO

Foi instalado o pacote mongodb/laravel-mongodb de acordo como é mostrado na documentação do laravel.

composer require mongodb/laravel-mongodb

Logo foi feita a conexão com o banco criado.
No arquivo database.php foi criado uma nova chave para o mongoDB e adicionada uma configuração que pode ser editada dinâmicamente pelo .env
Como aqui é um teste deixarei minhas credenciais e criei o banco apenas para isto deixarei minha credenciais:

DB_CONNECTION=mongodb
MONGODB_USERNAME=carlosriospontes
MONGODB_PASSWORD=W1Go6Wvwm0TCMvLa
MONGODB_HOST=cluster0.07dk6.mongodb.net
MONGODB_DATABASE=api-rest-codesh

Com essas configurações já está feita a intregração da api com o banco de dados.


