<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Noticias extends Model
{
	
	protected $table = "noticias";
	protected $fillable = [
    	'titulo',
        'conteudo',
        'categoria',
        'autor',
        'palavraschave',
        'creat_at',
        'update_at'
    ];

}

?>