<?php 
namespace Router;

class Router{
    private array $routes;
    public  function register(string $path,callable $action): void
    {
         $this->routes[$path]=$action;

    }
}
























// namespace Router;

// class Router {
//     private array $routes = [];

//     public function register(string $path, callable $action): void {
//         $this->routes[$path] = $action;
//     }

//     public function resolve(string $path): void {
//         // Vérifiez si le chemin existe dans les routes enregistrées
//         if (array_key_exists($path, $this->routes)) {
//             // Si oui, exécutez l'action associée à cette route
//             $action = $this->routes[$path];
//             echo $action();
//         } else {
//             // Si la route n'existe pas, vous pouvez afficher une page d'erreur 404, par exemple
//             echo "Page non trouvée";
//         }
//     }
// }

?>