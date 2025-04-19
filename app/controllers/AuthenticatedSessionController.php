<?php

namespace Animal\Controllers;

use Animal\Models\User;
use Tecgdcs\Response;
use Tecgdcs\Validator;
use Tecgdcs\View;

class AuthenticatedSessionController
{
    public function create(): void
    {
        View::make('auth.create');
    }

    public function store(): void
    {
        Validator::check([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', strtolower($_REQUEST['email']))->first();
        if(!$user) {
            $_SESSION['errors']['email'] = 'Cet email n’existe pas dans notre base de données !';
            $_SESSION['old']['email'] = $_REQUEST['email'];
            Response::back();
        }
        if(!password_verify($_REQUEST['password'], $user->password)) {
            $_SESSION['errors']['password'] = 'Oups, le mot de passe ne correspond pas !';
            $_SESSION['old']['email'] = $_REQUEST['email'];
            Response::back();
        }
        $_SESSION = [];
        $_SESSION['user'] = $user;
        /*
         * Gérer l'authentification
         * Mais si tout va bien alors...
         */
        Response::redirect('/dashboard');
    }
}