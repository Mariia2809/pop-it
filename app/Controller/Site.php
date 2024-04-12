<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;


class Site
{
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/login');
    }

    public function addEmp(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('addEmp.employee');

        }
    }
    public function employee(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.employee');

        }
    }

    public function subdivision(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.subdivision');

        }
    }

    public function addSub(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.addSub');

        }
    }

    public function sort(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.sort');

        }
    }

    public function nav(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.nav');

        }
    }

}
