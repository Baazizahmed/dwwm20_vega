<?php
namespace VegaCore\HttpKernel;

use Psr\Container\ContainerInterface;
use VegaCore\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VegaCore\Routing\RouterInterface;

class HttpKernel implements HttpKernelInterface
{

    /**
     * Le conteneur de services.
     * @var ContainerInterface
     */
    private ContainerInterface $container;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Soumettre la requête de la part contrôleur frontal pour traitement 
     * et lui retourne la réponse correspondante
     *
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response
    {
        // S'il n'y a aucun contrôleur dans l'application
            // Afficher la page souhaitant la bienvenue dans Vega
        $controllers = $this->container->get('controllers');

        if ( count($controllers) == 0 ) 
        {
            ob_start();
            require __DIR__ . "/resources/default_welcome.html.php";
            $content = ob_get_clean();

            return new Response($content, 404);
        }
        
        // Dans le cas contraire,
        // Demandons au routeur de verifier si la requête du client match avec l'une des routes attendues.
        // Récupérons la réponse correspondante

        /**
         * @var RouterInterface
         */
        $router = $this->container->get(RouterInterface::class);

        $routerResponse = $router->match();

        return $this->dispatch($routerResponse);
    }

    public function dispatch(null|array $routerResponse = []): Response
    {

        // Si le routeur retourne null,
        if ( null === $routerResponse ) 
        {
            ob_start();
            require __DIR__ . "/resources/default_not_found.html.php";
            $content = ob_get_clean();

            return new Response($content, 404);
        }

        // Dans le cas contraire,
        $class  = $routerResponse['class'];
        $method = $routerResponse['method'];

        if ( isset($routerResponse['params']) && !empty($routerResponse['params']) ) 
        {
            $params = $routerResponse['params'];

            return $this->container->call([$class, $method], [...$params]);
        }

        return $this->container->call([$class, $method]);
    }
}