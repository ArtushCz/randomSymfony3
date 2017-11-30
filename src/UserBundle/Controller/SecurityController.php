<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of UserController
 *
 * @author Artush
 */
class SecurityController extends Controller {

    /**
     * @Route("/login", name="login_form")
     * @Template
     */
    public function loginAction(Request $request) {
        $authUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return array(
            'last_username' => $lastUsername,
            'error' => $error,
        );
    }

    /**
     * @Route("/login_check" , name="login_check")
     * @param Request $request
     */
    public function loginCheckAction() {
        //
    }

    /**
     * @Route("/logout" , name="logout")
     * @param Request $request
     */
    public function logoutAction() {
        //
    }

}
