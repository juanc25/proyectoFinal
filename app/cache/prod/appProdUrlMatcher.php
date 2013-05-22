<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/')) {
            // reporte_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\ReporteBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'reporte_homepage'));
            }

            // alarma_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\AlarmaBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'alarma_homepage'));
            }

            // correspondencia_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'correspondencia_homepage'));
            }

            if (0 === strpos($pathinfo, '/correspondencia')) {
                // recibidainterna
                if (rtrim($pathinfo, '/') === '/correspondencia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'recibidainterna');
                    }

                    return array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::indexAction',  '_route' => 'recibidainterna',);
                }

                // recibidainterna_show
                if (preg_match('#^/correspondencia/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::showAction',)), array('_route' => 'recibidainterna_show'));
                }

                // recibidainterna_new
                if ($pathinfo === '/correspondencia/new') {
                    return array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::newAction',  '_route' => 'recibidainterna_new',);
                }

                // recibidainterna_create
                if ($pathinfo === '/correspondencia/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_recibidainterna_create;
                    }

                    return array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::createAction',  '_route' => 'recibidainterna_create',);
                }
                not_recibidainterna_create:

                // recibidainterna_edit
                if (preg_match('#^/correspondencia/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::editAction',)), array('_route' => 'recibidainterna_edit'));
                }

                // recibidainterna_update
                if (preg_match('#^/correspondencia/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_recibidainterna_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::updateAction',)), array('_route' => 'recibidainterna_update'));
                }
                not_recibidainterna_update:

                // recibidainterna_delete
                if (preg_match('#^/correspondencia/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_recibidainterna_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\CorrespondenciaBundle\\Controller\\CorrespondenciaRecibidaInternaController::deleteAction',)), array('_route' => 'recibidainterna_delete'));
                }
                not_recibidainterna_delete:

            }

            // usuario_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'usuario_homepage'));
            }

            if (0 === strpos($pathinfo, '/usuarios')) {
                // usuario
                if (rtrim($pathinfo, '/') === '/usuarios') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_show
                if (preg_match('#^/usuarios/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::showAction',)), array('_route' => 'usuario_show'));
                }

                // usuario_new
                if ($pathinfo === '/usuarios/new') {
                    return array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }

                // usuario_create
                if ($pathinfo === '/usuarios/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_create;
                    }

                    return array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
                }
                not_usuario_create:

                // usuario_edit
                if (preg_match('#^/usuarios/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::editAction',)), array('_route' => 'usuario_edit'));
                }

                // usuario_update
                if (preg_match('#^/usuarios/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::updateAction',)), array('_route' => 'usuario_update'));
                }
                not_usuario_update:

                // usuario_delete
                if (preg_match('#^/usuarios/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\UsuarioController::deleteAction',)), array('_route' => 'usuario_delete'));
                }
                not_usuario_delete:

            }

            // portada
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'portada');
                }

                return array (  '_controller' => 'Proyecto\\UsuarioBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'portada',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
