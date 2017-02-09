<?php

namespace Fully\Http\Controllers;

use Illuminate\Http\Request;

use Fully\Http\Requests;
use Fully\Http\Controllers\Controller;
use Fully\Coment;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Input;
use Validator;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post_comentario(Request $request){
        
    


        $data = Input::all();
        $rules = array(
            'nombre' => 'required',
            'contenido' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()){
            dd("fallo");
            return Redirect::to('/contact')->withInput()->withErrors($validator);
        }
        
        else{
                $coment = new Coment;

        $coment->nombre = $request->nombre;
        $coment->contenido = $request->contenido;
        $coment->article_id = $request->article_id;


        $coment->save();
       
        }
         return redirect()->back();

    }
}
