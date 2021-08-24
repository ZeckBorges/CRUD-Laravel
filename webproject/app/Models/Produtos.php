<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Produtos extends Model{

        protected $table = "consoles";
        protected $primaryKey = "CodConsole";
        public $timestamps = false;

    }
