<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/121d2e0')) {
                // _assetic_121d2e0
                if ('/css/121d2e0.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '121d2e0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_121d2e0',);
                }

                // _assetic_121d2e0_0
                if ('/css/121d2e0_main_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '121d2e0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_121d2e0_0',);
                }

                // _assetic_121d2e0_1
                if ('/css/121d2e0_events_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '121d2e0',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_121d2e0_1',);
                }

            }

            // _assetic_9a4f197
            if ('/css/9a4f197.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9a4f197',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9a4f197',);
            }

            // _assetic_9a4f197_0
            if ('/css/9a4f197_main_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9a4f197',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9a4f197_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // event_index
        if ('' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_event_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'event_index');
            }

            return array (  '_controller' => 'EventBundle\\Controller\\EventController::indexAction',  '_route' => 'event_index',);
        }
        not_event_index:

        // event_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_event_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'EventBundle\\Controller\\EventController::showAction',));
        }
        not_event_show:

        // event_new
        if ('/new' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_event_new;
            }

            return array (  '_controller' => 'EventBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
        }
        not_event_new:

        // event_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_event_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'EventBundle\\Controller\\EventController::editAction',));
        }
        not_event_edit:

        // event_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_event_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'EventBundle\\Controller\\EventController::deleteAction',));
        }
        not_event_delete:

        // event_homepage
        if ('/hello' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'event_homepage');
            }

            return array (  '_controller' => 'EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'event_homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_form
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_form',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
