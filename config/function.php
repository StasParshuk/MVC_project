<?php
function redirect(string $address=""):void{
    header(  "location:" . SITEURL . "/" . $address);
    exit();
}
function links(string $url){
    return SITEURL . "/" . $url;
}
