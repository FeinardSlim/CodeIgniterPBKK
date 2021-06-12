<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {   
        $data['title'] = 'Homepage';
        echo view('templates/header' , $data);
        echo view('pages/index' , $data);
        echo view('templates/footer', $data);
    }

    public function view($page = 'index')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter

        // var_dump(view('pages/' . $page . '/profile'));
        echo view('templates/header', $data);
        echo view('pages/' . $page , $data);
        echo view('templates/footer', $data);
    }

    // public function GetAssetIMG($data)
    // {
        
    // }

}