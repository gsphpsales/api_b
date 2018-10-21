<?php

namespace App\Http\Controllers;
use App\Noticias;
use Illuminate\Http\Request;

class APIController extends Controller
{

    //função para retornar todas noticias
    public function todasNoticias()
    {
        $noticias =  Noticias::all();
        return response($noticias, 201)->header('Content-Type', 'application/json');
    }
    // pega a noticia em especifico pelo id passado pela url do arquivo web.php da routes
    public function noticias($id)
    {
        $noticias =  Noticias::find($id);
        return response($noticias, 201)->header('Content-Type', 'application/json');
    }
    //recebe os dados e salva no db
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
    // deleta noticia com base no id recebido.
    public function deletarNoticias($id)
    {
        $noticias = Noticias::find($id);
        $noticias->delete();
        return response($noticias, 201)->header('Content-Type', 'application/json');   
    }
    //edição da noticia.
    public function alterarNoticias(Request $data)
    {
        //pesquisa qual linha modificar pelo id conrrespondente
        $noticias = Noticias::find($data->id);
        //faz o update conforme dados recebido da variavel $data.
        $noticias->titulo = $data->titulo;
        $noticias->conteudo = $data->conteudo;
        $noticias->categoria = $data->categoria;
        $noticias->autor = $data->autor;
        $noticias->palavraschave = $data->palavraschave;
        $noticias->save();

        return response($noticias, 201)->header('Content-Type', 'application/json');
    }

}