<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controllers;

class Places extends \CodeIgniter\Controller
{
public function index()
{
// connect to the model
$places = new \App\Models\Places();
// retrieve all the records
$records = $places->findAll();
// JSON encode and return the result return json_encode($records);
}
}

