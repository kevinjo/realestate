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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/2')) {
            if (0 === strpos($pathinfo, '/js/2aa9ee2')) {
                // _assetic_2aa9ee2
                if ($pathinfo === '/js/2aa9ee2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2aa9ee2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2aa9ee2',);
                }

                // _assetic_2aa9ee2_0
                if ($pathinfo === '/js/2aa9ee2_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2aa9ee2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2aa9ee2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/230e221')) {
                // _assetic_230e221
                if ($pathinfo === '/js/230e221.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '230e221',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_230e221',);
                }

                // _assetic_230e221_0
                if ($pathinfo === '/js/230e221_script_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '230e221',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_230e221_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/ad66b83')) {
            // _assetic_ad66b83
            if ($pathinfo === '/css/ad66b83.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ad66b83',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ad66b83',);
            }

            // _assetic_ad66b83_0
            if ($pathinfo === '/css/ad66b83_styles_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ad66b83',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ad66b83_0',);
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/medias')) {
            // medias
            if (rtrim($pathinfo, '/') === '/medias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'medias');
                }

                return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::indexAction',  '_route' => 'medias',);
            }

            // medias_show
            if (preg_match('#^/medias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_show')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::showAction',));
            }

            // medias_new
            if ($pathinfo === '/medias/new') {
                return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::newAction',  '_route' => 'medias_new',);
            }

            // medias_create
            if ($pathinfo === '/medias/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_medias_create;
                }

                return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::createAction',  '_route' => 'medias_create',);
            }
            not_medias_create:

            // medias_edit
            if (preg_match('#^/medias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_edit')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::editAction',));
            }

            // medias_update
            if (preg_match('#^/medias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_medias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_update')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::updateAction',));
            }
            not_medias_update:

            // medias_delete
            if (preg_match('#^/medias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_medias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_delete')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\MediasController::deleteAction',));
            }
            not_medias_delete:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/annonce')) {
                // annonce
                if (rtrim($pathinfo, '/') === '/annonce') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'annonce');
                    }

                    return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::indexAction',  '_route' => 'annonce',);
                }

                // annonce_show
                if (preg_match('#^/annonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_show')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::showAction',));
                }

                // annonce_new
                if ($pathinfo === '/annonce/new') {
                    return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::newAction',  '_route' => 'annonce_new',);
                }

                // annonce_create
                if ($pathinfo === '/annonce/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_annonce_create;
                    }

                    return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::createAction',  '_route' => 'annonce_create',);
                }
                not_annonce_create:

                // annonce_edit
                if (preg_match('#^/annonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_edit')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::editAction',));
                }

                // annonce_update
                if (preg_match('#^/annonce/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_annonce_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_update')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::updateAction',));
                }
                not_annonce_update:

                // annonce_delete
                if (preg_match('#^/annonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_annonce_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_delete')), array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\AnnonceController::deleteAction',));
                }
                not_annonce_delete:

            }

            // ag_im_agence_homepage
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'AgIm\\AgenceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ag_im_agence_homepage',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

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
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
