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
