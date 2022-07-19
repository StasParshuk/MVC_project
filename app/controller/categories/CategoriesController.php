<?php

namespace App\controller\categories;

use App\model\Categories;
use core\View;

class CategoriesController extends BaseController
{
    public function index()
    {
        $_SESSION["posts"] = Categories::all();



        View::render("category/all-category");
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
    public function show($id)
    {

        $_SESSION["category"] = Categories::find_by("id",$id);
        View::render("category/one-category");
    }
    public function edit($id)
    {
        View::render("category/edit-category");
    }
    public function update($id){
        dd($_SESSION,$_POST,$_FILES);
        Categories::select()->update_users();

    }

public function destroy($id){
    $_SESSION["show_delete"] = Categories::delete($_SESSION["posts"]->id);
    redirect("category/". $_SESSION["category"]->id . "/edit") ;
}
}

