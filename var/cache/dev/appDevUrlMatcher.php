<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/2c8c367')) {
            // _assetic_2c8c367
            if ($pathinfo === '/css/2c8c367.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2c8c367',);
            }

            // _assetic_2c8c367_0
            if ($pathinfo === '/css/2c8c367_part_1_theme_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2c8c367',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2c8c367_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/9bf3d6a')) {
                // _assetic_9bf3d6a
                if ($pathinfo === '/js/9bf3d6a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9bf3d6a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9bf3d6a',);
                }

                // _assetic_9bf3d6a_0
                if ($pathinfo === '/js/9bf3d6a_app_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9bf3d6a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9bf3d6a_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/bb54fd1')) {
                // _assetic_bb54fd1
                if ($pathinfo === '/js/bb54fd1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb54fd1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bb54fd1',);
                }

                if (0 === strpos($pathinfo, '/js/bb54fd1_part_1_')) {
                    // _assetic_bb54fd1_0
                    if ($pathinfo === '/js/bb54fd1_part_1_formularzGen_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb54fd1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bb54fd1_0',);
                    }

                    // _assetic_bb54fd1_1
                    if ($pathinfo === '/js/bb54fd1_part_1_showAllStrazacy_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb54fd1',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bb54fd1_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // getTable
        if ($pathinfo === '/get/Table') {
            return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::getTable',  '_route' => 'getTable',);
        }

        // setTable
        if ($pathinfo === '/set/Table') {
            return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::setTable',  '_route' => 'setTable',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::indexAction',  '_route' => 'homepage',);
        }

        // show
        if (0 === strpos($pathinfo, '/wyswietlenie') && preg_match('#^/wyswietlenie/(?P<dni>[^/]++)/(?P<zmiana>[^/]++)/(?P<wymaganaIloscGodzin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show')), array (  '_controller' => 'AppBundle\\Controller\\SimpleController::wyswietlenie',));
        }

        // add
        if ($pathinfo === '/dodawanie') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::dodajMiesac',  '_route' => 'add',);
        }

        // akcja
        if ($pathinfo === '/akcja') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::akcja',  '_route' => 'akcja',);
        }

        // genForm
        if ($pathinfo === '/genForm') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::generujFormularz',  '_route' => 'genForm',);
        }

        // showHalfYear
        if ($pathinfo === '/wyswietleniePolRoku') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePolRoku',  '_route' => 'showHalfYear',);
        }

        // generateOneAfterOne
        if ($pathinfo === '/przydzielaniePoKolei') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePoKolei',  '_route' => 'generateOneAfterOne',);
        }

        // editTable
        if ($pathinfo === '/edit') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::edit',  '_route' => 'editTable',);
        }

        // allStrazacy
        if ($pathinfo === '/allStrazacy') {
            return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::showAll',  '_route' => 'allStrazacy',);
        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<idStrazaka>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\StrazakController::deleteStrazak',));
        }

        // addStrazak
        if ($pathinfo === '/addStrazak') {
            return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::addStrazak',  '_route' => 'addStrazak',);
        }

        // editStrazak
        if ($pathinfo === '/editStrazak') {
            return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::editStrazak',  '_route' => 'editStrazak',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
