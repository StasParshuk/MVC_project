<?php

namespace App\controller\categories;

use App\model\Categories;
use core\View;

class CategoriesController extends BaseController
{
    public function index()
    {
        $categories = Categories::all();
        dd($categories);
    }
    public function create()
    {

        View::render("category/create-delete-category");
    }
    public function store()
    {

        $_SESSION["show_create"] = Categories::create_categories();
        redirect("category/create");
    }
    public function delete()
    {

       $_SESSION["show_delete"] = Categories::delete($_POST["id"]);

        redirect("category/create");
    }

}

