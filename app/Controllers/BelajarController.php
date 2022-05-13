<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class BelajarController extends Controller{
    public function index()
    {
         return view ('belajarview');
    }
}