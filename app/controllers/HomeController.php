<?php

namespace App\controllers;

use App\QueryBuilder;
use Delight\Auth\Auth;

class HomeController {

    private $auth;
    private $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder, Auth $auth)
    {
        $this->queryBuilder = $queryBuilder;
        $this->auth = $auth;
    }

    public function login ()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);
            header('Location: /home');
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function createUser()
    {
        $job = $_POST['job'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $status = $_POST['status'];
        $photo = $_POST['photo'];
        $vk = $_POST['vk'];
        $telegram = $_POST['telegram'];
        $insta = $_POST['insta'];

        try {
            $userId = $this->auth->register($_POST['email'], $_POST['password'], $_POST['username'], null);

            $this->queryBuilder->update('users', $userId, [
                'job' => $job,
                'phone' => $phone,
                'address' => $address,
                'status' => $status,
                'photo' => $photo,
                'acc_vk' => $vk,
                'acc_teleg' => $telegram,
                'acc_insta' => $insta
            ]);
            header('Location: /home');
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function updateInfo()
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $job = $_POST['job'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $this->queryBuilder->update('users', $id, [
            'username' => $username,
            'job' => $job,
            'phone' => $phone,
            'address' => $address
        ]);
        header('Location: /home');
    }

    public function updateEmailOrPass()
    {
        $id = $this->auth->getUserId();
        $email = $_POST['email'];

        $this->queryBuilder->update('users', $id, [
            'email' => $email
            ]);

        try {
            $this->auth->changePasswordWithoutOldPassword($_POST['newPassword']);
            header('Location: /home');
        }
        catch (\Delight\Auth\NotLoggedInException $e) {
            die('Not logged in');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password(s)');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function setUserStatus()
    {
        $id = $this->auth->getUserId();
        $status = $_POST['status'];

        $this->queryBuilder->update('users', $id, [
            'status' => $status
        ]);
        header('Location: /home');
    }

    public function uploadImg()
    {
        $id = $this->auth->getUserId();
        $photo = $_POST['photo'];

        $this->queryBuilder->update('users', $id, [
            'photo' => $photo
        ]);
        header('Location: /home');
    }

    public function deleteUser()
    {
        $id = $_GET['id'];

        $this->queryBuilder->delete('users', $id);
        header('Location: /home');
    }

    public function setAccess()
    {
        $id = $_GET['id'];
        $user = $this->queryBuilder->getOne('users', $id);
        $role = ($user['roles_mask'] == 0) ? 1 : 0;

        $this->queryBuilder->update('users', $id, [
            'roles_mask' => $role,
        ]);
        header('Location: /roles');
    }

    public function loginAsUser()
    {
        $admin = ($this->auth->hasRole(\Delight\Auth\Role::ADMIN)) ? true : false;

        if ($admin)
        {
            try {
                $this->auth->admin()->logInAsUserById($_GET['id']);
            }
            catch (\Delight\Auth\UnknownIdException $e) {
                die('Unknown ID');
            }
            catch (\Delight\Auth\EmailNotVerifiedException $e) {
                die('Email address not verified');
            }
        }
        header('Location: /home');
    }

}
