<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        '_assetic_2c8c367' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2c8c367',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/2c8c367.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2c8c367_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2c8c367',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/2c8c367_part_1_theme_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_9bf3d6a' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9bf3d6a',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/9bf3d6a.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_9bf3d6a_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '9bf3d6a',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/9bf3d6a_app_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bb54fd1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bb54fd1',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/bb54fd1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bb54fd1_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bb54fd1',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/bb54fd1_part_1_formularzGen_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bb54fd1_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bb54fd1',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/bb54fd1_part_1_showAllStrazacy_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getTable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AjaxController::getTable',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get/Table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'setTable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AjaxController::setTable',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/set/Table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show' => array (  0 =>   array (    0 => 'dni',    1 => 'zmiana',    2 => 'wymaganaIloscGodzin',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::wyswietlenie',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'wymaganaIloscGodzin',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'zmiana',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dni',    ),    3 =>     array (      0 => 'text',      1 => '/wyswietlenie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::dodajMiesac',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dodawanie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'akcja' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::akcja',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/akcja',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genForm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::generujFormularz',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/genForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showHalfYear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePolRoku',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wyswietleniePolRoku',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generateOneAfterOne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePoKolei',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/przydzielaniePoKolei',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editTable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SimpleController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'allStrazacy' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::showAll',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/allStrazacy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete' => array (  0 =>   array (    0 => 'idStrazaka',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::deleteStrazak',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idStrazaka',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addStrazak' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::addStrazak',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addStrazak',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editStrazak' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StrazakController::editStrazak',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editStrazak',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
