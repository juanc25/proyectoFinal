<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/')) {
            // _welcome
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_welcome');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
            }

            if (0 === strpos($pathinfo, '/')) {
                // _demo_login
                if ($pathinfo === '/demo/secured/login') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                }

                // _security_check
                if ($pathinfo === '/demo/secured/login_check') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                }

                // _demo_logout
                if ($pathinfo === '/demo/secured/logout') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                }

                // acme_demo_secured_hello
                if ($pathinfo === '/demo/secured/hello') {
                    return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                }

                // _demo_secured_hello
                if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
                }

                // _demo_secured_hello_admin
                if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_search
                if ($pathinfo === '/_profiler/search') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
                }

                // _profiler_import
                if ($pathinfo === '/_profiler/import') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
                }

                // _profiler_redirect
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

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
