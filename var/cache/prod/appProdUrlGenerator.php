<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'getTable' => array (  0 =>   array (    0 => 'miesiac',    1 => 'rok',    2 => 'ostatniDzien',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AjaxController::getTable',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ostatniDzien',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rok',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'miesiac',    ),    3 =>     array (      0 => 'text',      1 => '/get/Table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'setTable' => array (  0 =>   array (    0 => 'miesiac',    1 => 'rok',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AjaxController::setTable',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rok',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'miesiac',    ),    2 =>     array (      0 => 'text',      1 => '/set/Table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show' => array (  0 =>   array (    0 => 'dni',    1 => 'zmiana',    2 => 'wymaganaIloscGodzin',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::wyswietlenie',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'wymaganaIloscGodzin',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'zmiana',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dni',    ),    3 =>     array (      0 => 'text',      1 => '/wyswietlenie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::dodajMiesac',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dodawanie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'akcja' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::akcja',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/akcja',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genForm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::generujFormularz',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/genForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showHalfYear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePolRoku',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wyswietleniePolRoku',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generateOneAfterOne' => array (  0 =>   array (    0 => 'redirected',  ),  1 =>   array (    'redirected' => 0,    '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePoKolei',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'redirected',    ),    1 =>     array (      0 => 'text',      1 => '/przydzielaniePoKolei',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editTable' => array (  0 =>   array (    0 => 'miesiac',    1 => 'rok',    2 => 'ostatniDzien',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ostatniDzien',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rok',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'miesiac',    ),    3 =>     array (      0 => 'text',      1 => '/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'przejscie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::przejscie',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/przejscie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ustawienia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::ustawienia',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ustawienia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ustawieniaSet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::ustawieniaSet',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ustawienia/set',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyborPolrocza' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::wyborPolrocza',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/polrocze',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'allStrazacy' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::showAll',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/allStrazacy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'aktywny' => array (  0 =>   array (    0 => 'idStrazaka',    1 => 'aktywny',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::deleteStrazak',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'aktywny',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idStrazaka',    ),    2 =>     array (      0 => 'text',      1 => '/aktywny',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addStrazak' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::addStrazak',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addStrazak',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editStrazak' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::editStrazak',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editStrazak',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
