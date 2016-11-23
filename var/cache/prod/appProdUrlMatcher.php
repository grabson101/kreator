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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::indexAction',  '_route' => 'homepage',);
        }

        // show
        if ($pathinfo === '/wyswietlenie') {
            return array (  '_controller' => 'AppBundle\\Controller\\SimpleController::wyswietlenie',  '_route' => 'show',);
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

        // allStrazacy
        if ($pathinfo === '/allStrazacy') {
            return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::showAll',  '_route' => 'allStrazacy',);
        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<idStrazaka>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\StrazakController::deleteStrazak',));
        }

        // addStrazak
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::addStrazak',  '_route' => 'addStrazak',);
        }

        // editStrazak
        if ($pathinfo === '/edit') {
            return array (  '_controller' => 'AppBundle\\Controller\\StrazakController::editStrazak',  '_route' => 'editStrazak',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
