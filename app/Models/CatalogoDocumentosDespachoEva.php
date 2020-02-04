<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoDocumentosDespachoEva extends Model
{
    protected $table = 'catalogo_documento_despacho';
    protected $fillable = ['id', 'evaluacion_id', 'catalago_documento_id', 'tipo_archivo_id'];

    public function ejercicio()
    {
        return $this->BelongsTo('App\Models\Ejercicio', 'ejercicio_id');
    }

    public function tipoArchivo()
    {
    	return $this->belongsTo('App\Models\CatalogoTipoArchivo','tipo_archivo_id');
    }

      public function catalogoDocumento()
    {
    	return $this->belongsTo('App\Models\CatalogoDocumento','catalago_documento_id');
    }

    public function repositorioDocFinal()
    {
    	return $this->hasONe('App\Models\RepoDocsDespachoEva','cat_doc_despacho_id');
    }

}
