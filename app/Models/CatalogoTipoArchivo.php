<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CatalogoDocumentosDespachoEva;

class CatalogoTipoArchivo extends Model
{
    protected $table = 'cat_tipo_archivos';
    protected $fillable = ['id', 'extencion', 'descripcion'];

     public function archivoExistente($evaluacion,$tipoArchivo)
     {
        $existentes = CatalogoDocumentosDespachoEva::where('evaluacion_id',$evaluacion)
        ->where('catalago_documento_id',$tipoArchivo)->get()->first();
         //return $existentes->tipo_archivo_id;

        if ($existentes != null) {
           return $existentes->tipo_archivo_id;
        }else {
            return 0;
        }
        
     }
    
}
