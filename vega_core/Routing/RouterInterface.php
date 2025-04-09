<?php
namespace VegaCore\Routing;

interface RouterInterface
{

    /**
     * Breaks down each of the controllers given as arguments to extract the routes attributes, instantiate them and
     * store them with the target class and method
     *
     * @param array $controllers
     *
     * @throws \ReflectionException when the controller does not exist
     */
    public function addRoutes(array $controllers );

    /**
     * Iterate over all the attributes of the controllers in order to find the first one corresponding to the request.
     * If a match is found then an array is returned with the class, method and parameters, otherwise null is returned
     *
     * @return string[]|null
     */
    public function match(): ?array;

    /**
     * Generate a URL according to the name of the route
     *
     * @param string $routeName  The name of the route to generate
     * @param array  $parameters The parameters to provide if it is a dynamic route
     *
     * @return string
     */
    public function generateUrl(string $routeName, array $parameters = []): string;
}