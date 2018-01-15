TMDB Api

Libreria para el manejo del Api de la pagina web The Mobie DataBase y asi poder buscar contenido de forma mas rapida.

Installation
------------

[Install Composer](https://getcomposer.org/doc/00-intro.md)

Then require the package:

```
composer require xlfederalelk0lx/tmdb_api
```

**Basic Usage**

```
require_once "libraries/autoload.php";
 
Initialize
$tmdb = new TMDB\Tmdb("11ac02d919c368e330060a3b2e0bb315");
$tmdb->SearchMovies("movie title");

```
