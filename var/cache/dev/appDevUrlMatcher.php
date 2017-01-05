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

        if (0 === strpos($pathinfo, '/css/e7b315d')) {
            // _assetic_e7b315d
            if ($pathinfo === '/css/e7b315d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7b315d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e7b315d',);
            }

            // _assetic_e7b315d_0
            if ($pathinfo === '/css/e7b315d_theme_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7b315d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e7b315d_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/8c9072d')) {
                // _assetic_8c9072d
                if ($pathinfo === '/js/8c9072d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8c9072d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8c9072d',);
                }

                // _assetic_8c9072d_0
                if ($pathinfo === '/js/8c9072d_edycjaApp_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8c9072d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8c9072d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/338dc08')) {
                // _assetic_338dc08
                if ($pathinfo === '/js/338dc08.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '338dc08',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_338dc08',);
                }

                // _assetic_338dc08_0
                if ($pathinfo === '/js/338dc08_wyswietlanieApp_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '338dc08',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_338dc08_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/e5244fe')) {
                // _assetic_e5244fe
                if ($pathinfo === '/js/e5244fe.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e5244fe',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e5244fe',);
                }

                // _assetic_e5244fe_0
                if ($pathinfo === '/js/e5244fe_showAllStrazacy_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e5244fe',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e5244fe_0',);
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
        if (0 === strpos($pathinfo, '/get/Table') && preg_match('#^/get/Table/(?P<miesiac>[^/]++)/(?P<rok>[^/]++)/(?P<ostatniDzien>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'getTable')), array (  '_controller' => 'AppBundle\\Controller\\AjaxControllerEdycja::getTable',));
        }

        // setTable
        if (0 === strpos($pathinfo, '/set/Table') && preg_match('#^/set/Table/(?P<miesiac>[^/]++)/(?P<rok>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'setTable')), array (  '_controller' => 'AppBundle\\Controller\\AjaxControllerEdycja::setTable',));
        }

        // getPolrocze
        if (0 === strpos($pathinfo, '/get/TableToShow') && preg_match('#^/get/TableToShow/(?P<rok>[^/]++)/(?P<polowaRoku>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'getPolrocze')), array (  '_controller' => 'AppBundle\\Controller\\AjaxControllerWyswietlenie::getTable',));
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
        if (0 === strpos($pathinfo, '/przydzielaniePoKolei') && preg_match('#^/przydzielaniePoKolei(?:/(?P<redirected>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateOneAfterOne')), array (  'redirected' => 0,  '_controller' => 'AppBundle\\Controller\\SimpleController::przydzielaniePoKolei',));
        }

        // editTable
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<miesiac>[^/]++)/(?P<rok>[^/]++)/(?P<ostatniDzien>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editTable')), array (  '_controller' => 'AppBundle\\Controller\\SimpleController::edit',));
        }

        // przejscie
        if ($pathinfo === '/przejscie') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::przejscie',  '_route' => 'przejscie',);
        }

        if (0 === strpos($pathinfo, '/ustawienia')) {
            // ustawienia
            if ($pathinfo === '/ustawienia') {
                return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::ustawienia',  '_route' => 'ustawienia',);
            }

            // ustawieniaSet
            if ($pathinfo === '/ustawienia/set') {
                return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::ustawieniaSet',  '_route' => 'ustawieniaSet',);
            }

        }

        // wyborPolrocza
        if ($pathinfo === '/polrocze') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::wyborPolrocza',  '_route' => 'wyborPolrocza',);
        }

        // wyswietleniePolrocza
        if ($pathinfo === '/wyswietleniePolrocza') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::wyswietleniePolrocza',  '_route' => 'wyswietleniePolrocza',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // allStrazacy
            if ($pathinfo === '/allStrazacy') {
                return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::showAll',  '_route' => 'allStrazacy',);
            }

            // aktywny
            if (0 === strpos($pathinfo, '/aktywny') && preg_match('#^/aktywny/(?P<idStrazaka>[^/]++)/(?P<aktywny>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aktywny')), array (  '_controller' => 'AppBundle\\Controller\\StrazakController::activeStrazak',));
            }

            // addStrazak
            if ($pathinfo === '/addStrazak') {
                return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::addStrazak',  '_route' => 'addStrazak',);
            }

        }

        // editStrazak
        if (0 === strpos($pathinfo, '/editStrazak') && preg_match('#^/editStrazak/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editStrazak')), array (  '_controller' => 'AppBundle\\Controller\\StrazakController::editStrazak',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
