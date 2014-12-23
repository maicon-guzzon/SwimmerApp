<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        {{ Form::open(array(
                'name' => 'form-captura',
                'route' => array('captura.index'), 
                'method' => 'post',
                'id' => 'form-captura'
            )) }}
        Atleta:{{Form::text('idAtleta');}} </br>
        Placa:{{Form::text('idPlaca');}}</br>
        Nado:{{Form::text('idNado');}}</br>
        Qualquer coisa a mais:{{Form::text('txtOutrasInfo');}}</br>
        {{Form::submit('Click Me!');}}
        {{ Form::close() }}
        
    </body>
</html>
