<?php

namespace App\Http\Controllers;
use App\Noticias;
use Illuminate\Http\Request;

class APIController extends Controller
{


    public function todasNoticias()
    {
        $noticias =  Noticias::all();
        return response($noticias, 201)->header('Content-Type', 'application/json');
    }

    public function noticias($id)
    {
        $noticias =  Noticias::find($id);
        return response($noticias, 201)->header('Content-Type', 'application/json');
    }

    public function adicionarNoticias(Request $data)
    {
        $noticias = Noticias::create(['titulo' => $data->titulo,
        'conteudo' =>$data->conteudo,
        'categoria' =>$data->categoria,
        'autor' =>$data->autor,
        'palavraschave'=>$data->palavraschave
        ]);

        return response($noticias, 201)->header('Content-Type', 'application/json');   
    }

    public function deletarNoticias($id)
    {
        $noticias = Noticias::find($id);
        $noticias->delete();
        return response($noticias, 201)->header('Content-Type', 'application/json');   
    }

    public function alterarNoticias(Request $data)
    {
        $noticias = Noticias::find($data->id);

        $noticias->titulo = $data->titulo;
        $noticias->conteudo = $data->conteudo;
        $noticias->categoria = $data->categoria;
        $noticias->autor = $data->autor;
        $noticias->palavraschave = $data->palavraschave;
        $noticias->save();

        return response($noticias, 201)->header('Content-Type', 'application/json');
    }

}