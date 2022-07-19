<?php

namespace App\controller\admin;

use App\helpers\SessionHelper;
use App\model\Posts;
use App\validators\UserCreateValidator;
use core\View;

class PostsController extends BaseController
{
    public function index()
    {
$_SESSION["posts"] = Posts::all();

        View::render("posts/all-posts");
    }

    public function create()
    {

        View::render("posts/create-posts");
    }


    public function store()
    {
        dd($_POST);
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        $validator = new UserCreateValidator();


        if ($validator->validate($fields) && !$validator->checkEmailOnExist($fields["email"])) {

            $userId = User::create_user($fields["name"], $fields["surname"], $fields["email"], password_hash($fields["password"], PASSWORD_DEFAULT), $fields["birthdate"]);
            if ($userId) {

                redirect();
            }

        }
        $this->data['data'] = $fields;
        $this->data += $validator->getErrors();
        View::render("auth/registration", $this->data);
    }

    public function show($id)
    {

        $_SESSION["posts"] = Posts::find_by("id",$id);
        View::render("posts/one-posts");
    }

    public function edit($id)
    {
        View::render("posts/edit-posts");
    }

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }

}