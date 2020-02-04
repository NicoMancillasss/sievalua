<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepoDocsDespachoEva extends Model
{
    protected $table = 'repositorio_documento_despacho';
    protected $fillable = ['id','ruta', 'cat_doc_despacho_id', 'user_id'];
    public function getTabla()
    {
        return $this->table;
    }
    public function documento()
    {
        return $this->BelongsTo('App\Models\CatalogoDocumentosDespachoEva', 'cat_doc_despacho_id');
    }
    public function solicitud()
    {
        return $this->BelongsTo('App\Models\Solicitud', 'solicitud_id');
    }
}
