<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // getTable
        if (0 === strpos($pathinfo, '/get/Table') && preg_match('#^/get/Table/(?P<miesiac>[^/]++)/(?P<rok>[^/]++)/(?P<ostatniDzien>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'getTable')), array (  '_controller' => 'AppBundle\\Controller\\AjaxController::getTable',));
        }

        // setTable
        if (0 === strpos($pathinfo, '/set/Table') && preg_match('#^/set/Table/(?P<miesiac>[^/]++)/(?P<rok>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'setTable')), array (  '_controller' => 'AppBundle\\Controller\\AjaxController::setTable',));
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

        if (0 === strpos($pathinfo, '/a')) {
            // allStrazacy
            if ($pathinfo === '/allStrazacy') {
                return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::showAll',  '_route' => 'allStrazacy',);
            }

            // aktywny
            if (0 === strpos($pathinfo, '/aktywny') && preg_match('#^/aktywny/(?P<idStrazaka>[^/]++)/(?P<aktywny>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aktywny')), array (  '_controller' => 'AppBundle\\Controller\\StrazakController::deleteStrazak',));
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
