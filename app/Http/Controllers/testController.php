<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
   
class testController extends Controller
{
    public function view($id)
    {
    	//para hacer las busquedas de los articulos en el controlador
    	$article = Article::find($id);
    	//para realizar las relaciones de los articulos
    	//$article->each(function($article));  esta funcion se utiliza cuando se tienen varios registros
    		//buscamos las funciones que realizan las relaciones
    		$article->category;
    		$article->user;
    		$article->Tag;
            //dd($article);
    		//envia a la vista los parametros que vienen del modelo
            return view('test.index', ['article' => $article]);
    }
}
