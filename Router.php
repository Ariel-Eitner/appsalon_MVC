<?php

namespace MVC;

class Router {
    public  $getRoutes = [];
    public  $postRoutes = [];
    public  function get($url, $fn){
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn){
        $this->postRoutes[$url] = $fn;
    }

    public function comprobarRutas(){      
        // Proteger Rutas...
        session_start();        
        $currentUrl = $_SERVER['REQUEST_URI'] === '' ? '/' : $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        
        //dividimos la URL actual cada vez que exista un '?' eso indica que se están pasando variables por la url
        $splitURL = explode('?', $currentUrl);
        // debuguear($splitURL);
 
        if ($method === 'GET') {
         $fn = $this->getRoutes[$splitURL[0]] ?? null; //$splitURL[0] contiene la URL sin variables 
        } else {
         $fn = $this->postRoutes[$splitURL[0]] ?? null;
        }
       
        if ( $fn ) {            
            // Call user fn va a llamar una función cuando no sabemos cual sera
            call_user_func($fn, $this); // This es para pasar argumentos
        } else {
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    public function render($view, $datos = []) {
        // Leer lo que le pasamos  a la vista
        foreach ($datos as $key => $value) {
            $$key = $value;  // Doble signo de dolar significa: variable variable, básicamente nuestra variable sigue siendo la original, pero al asignarla a otra no la reescribe, mantiene su valor, de esta forma el nombre de la variable se asigna dinamicamente
        }
        ob_start(); // Almacenamiento en memoria durante un momento...

        // entonces incluimos la vista en el layout
        include_once __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean(); // Limpia el Buffer
        include_once __DIR__ . '/views/layout.php';
    }
}
