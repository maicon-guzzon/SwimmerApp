<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CapturaController
 *
 * @author maicon
 */
class CapturaController extends BaseController {
    
    public function index()
    {
            $capt = new Captura();
//            $capt->idAtleta = 1;
//            $capt->idPlaca = 1;
//            $capt->idNado = 1;
//            $capt->instante = 1;
//            $capt->outras = "primeiro registro";
//            $capt->save();
        
        if (Request::isMethod('post')){
           
            $capt->idAtleta = Input::get('idAtleta');
            $capt->idPlaca = Input::get('idPlaca');
            $capt->idNado = Input::get('idNado');
            $capt->outras = Input::get('txtOutrasInfo');
            $capt->save();            
            return View::make('captura.index');
        }
        return View::make('captura.index');
    }
    
    
}
