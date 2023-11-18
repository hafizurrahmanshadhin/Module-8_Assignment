<?php
namespace App\Http\Controllers;
class ProfileController extends Controller
{
    public function index($id=null){
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $cookieName = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response($data, 200)->cookie(
            $cookieName, $value, $minutes, $path, $domain, $secure, $httpOnly
        );
    }
}
