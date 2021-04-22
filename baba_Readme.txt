1) Cloner le projet avec git clone;
2) avec le cmd, placer vous dans le repo du projet puis saisisez "composer install"
3) copier le fichier ".env.example" à partir de la cmd avec la commande "copy .env.example .env"
4) générer la clé avec la commande "php artisan key:generate"
5) allez dans le fichier .env et mettez le nom de votre base de donnée
6) créer ensuite une base de donnée portant le même nom définie dans le fichier .env
7) faisons ensuite les migrations
    en utilisant mysql comme base de donnée, la migration risque du causé problème. Suivre l'étape suivante
    => importer "use Illuminate\Support\Facades\Schema;" dans le ficher Providers/AppServiceProvider
    => dans la méthode boot(), coller "Schema::defaultStringLength(191);" et c'est ok.
    => sur l'invité de commande, tapez "php artisan migrate"
8) démaré le serveur "php arisan serve"
