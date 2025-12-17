<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function view(string $page = 'index')
    {
        $path = APPPATH . 'Views/pages/' . $page . '.php';

        if (! is_file($path)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound($page);
        }

        echo view('pages/' . $page);
    }
}
