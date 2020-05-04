<?php


namespace App;


class Route
{
    /**
     * @var array
     */
    private $routingMap;

    public function __construct($routingMap)
    {
        $this->setRoutingMap($routingMap);
    }

    public function route()
    {
        $map=$this->getRoutingMap();
        $name = $map[$_SERVER['QUERY_STRING']];
        if (isset($name)) {
            $way = 'templates/' . $name;
        } else {
            $way = 'templates/404.html';
        }
        require_once $way;
    }

    /**
     * @return array
     */
    public function getRoutingMap()
    {
        return $this->routingMap;
    }

    /**
     * @param array $routingMap
     */
    public function setRoutingMap($routingMap)
    {
        $this->routingMap = $routingMap;
    }
}