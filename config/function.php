<?php
function redirect(string $address=""):void{
    header(  "location:" . SITEURL . "/" . $address);
    exit();
}
