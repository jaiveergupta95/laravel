<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App;
use Eloquent;

class Student extends Eloquent {
    
    public $table = 'students';
    public $timestamps = true;
}
