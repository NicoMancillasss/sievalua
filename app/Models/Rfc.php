<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rfc extends Model
{
	protected $rfc;

	function __construct($rfc)
	{
		$this->rfc = $rfc;
	}

	public function valida_rfc()
	{
		$valor =$this->rfc;
		$valor = str_replace("-", "", $valor);
       	$cuartoValor = substr($valor, 3, 1);
        //RFC Persona Moral.
		if (ctype_digit($cuartoValor) && strlen($valor) == 12) {
           $letras = substr($valor, 0, 3);
           $numeros = substr($valor, 3, 6);
           $homoclave = substr($valor, 9, 3);
           if (ctype_alpha($letras) && ctype_digit($numeros) && ctype_alnum($homoclave)) {
               return true;
           }
           return false;
       //RFC Persona Física.
       } else if (ctype_alpha($cuartoValor) && strlen($valor) == 13) {
           $letras = substr($valor, 0, 4);
           $numeros = substr($valor, 4, 6);
           $homoclave = substr($valor, 10, 3);
           if (ctype_alpha($letras) && ctype_digit($numeros) && ctype_alnum($homoclave)) {
               return true;
           }
           return false;
       }else {
           return false;
       }
	}

}
