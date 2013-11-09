<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    // Validation default parameters
    $config = array(
        // Validaciones en controlador categorias
        'categorias' =>  array(
            array(
                'field'   => 'titulo',
                'label'   => 'Titulo',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'descripcion',
                'label'   => 'Descripcion',
                'rules'   => 'xss'
            )
        ),
        'contacto' =>  array(
            array(
                'field'   => 'nombre',
                'label'   => 'Nombre',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'direccion',
                'label'   => 'Direccion',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'ciudad',
                'label'   => 'Ciudad',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'estado',
                'label'   => 'Estado',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'telefono',
                'label'   => 'Telefono',
                'rules'   => 'xss'
            ),
            array(
                'field'   => 'email',
                'label'   => 'Correo Electronico',
                'rules'   => 'required|xss'
            ),
            array(
                'field'   => 'medio',
                'label'   => '¿Como se enteró de Nosotros?',
                'rules'   => 'required|xss'
            ),			

            array(
                'field'   => 'mensaje',
                'label'   => 'Comentarios o Sugerencias',
                'rules'   => 'required|xss'
            )			
        )		
    );