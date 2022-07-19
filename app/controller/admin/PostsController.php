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
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

// Check if file already exists
        if (file_exists($target_file)) {
           $numberPost = Posts::create_posts($_POST["title"],$_POST["description"],$_POST["category_id"],$_SESSION["user_data"]["id"],$target_file);
            redirect("posts/" . $numberPost );
            $uploadOk = 0;
        }

// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $numberPost =  Posts::create_posts($_POST["title"],$_POST["description"],$_POST["category_id"],$_SESSION["user_data"]["id"],$target_file);
                redirect("posts/" . $numberPost );
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
//        dd($_SESSION["user_data"], $_POST,$_FILES);


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
        dd($_SESSION,$_POST,$_FILES);
Posts::select()->update_users();
    }

    public function destroy($id)
    {
        $_SESSION["show_delete"] = Posts::delete($_SESSION["posts"]->id);
        redirect() ;
    }

}