<?php

namespace App\controllers;

use App\QueryBuilder;
use League\Plates\Engine;
use Delight\Auth\Auth;

class PagesController
{

    private $templates;
    private $auth;
    private $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder, Engine $engine, Auth $auth)
    {
        $this->queryBuilder = $queryBuilder;
        $this->templates = $engine;
        $this->auth = $auth;
    }

    public function startPage()
    {
        echo $this->templates->render('start', ['name' => 'Hi!']);
    }

    public function indexPage()
    {
        $username = $this->auth->getUsername();
        $admin = ($this->auth->hasRole(\Delight\Auth\Role::ADMIN)) ? true : false;
        $users = $this->queryBuilder->getAll('users');

        echo $this->templates->render('mainpage', [
            'username' => $username,
            'admin' => $admin,
            'usersInView' => $users,
            'name' => 'A simple contact page'
        ]);
    }

    public function createUserPage()
    {
        echo $this->templates->render('create', ['name' => 'Create User Page']);
    }

    public function editInfoPage()
    {
        $id = $_GET['id'];
        $user = $this->queryBuilder->getOne('users', $id);

        echo $this->templates->render('edit', ['user' => $user, 'name' => 'Edit Basic Information']);
    }

    public function securePage()
    {
        $username = $this->auth->getUsername();
        $id = $_GET['id'];
        $user = $this->queryBuilder->getOne('users', $id);

        echo $this->templates->render('secure', [
            'user' => $user,
            'username' => $username,
            'name' => 'Security Page'
        ]);
    }

    public function statusPage()
    {
        $username = $this->auth->getUsername();

        echo $this->templates->render('status', [
            'username' => $username,
            'name' => 'Change User Status'
        ]);
    }

    public function uploadImgPage()
    {
        $username = $this->auth->getUsername();

        echo $this->templates->render('upload', [
            'username' => $username,
            'name' => 'Upload Image']);
    }

    public function rolesPage()
    {
        $users = $this->queryBuilder->getAll('users');

        echo $this->templates->render('roles', [
            'usersInView' => $users,
            'name' => 'Set Access'
        ]);
    }
}
