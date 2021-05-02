<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovimentosFinanceiro extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'movimentos_financeiros';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descricao', 'valor', 'data', 'tipo', 'empresa_id'];

    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa');
    }

    public function saldo()
    {
        return $this->MorphOne('App\Models\Saldo', 'movimento');
    }

    public static function buscaPorIntervalo(string $dataInicio, string $dataFim, int $quantidade = 20)
    {
        return self::whereBetween('created_at', [$dataInicio, $dataFim])
            ->with('empresa')
            ->paginate($quantidade);
    }

    public static function porIdComEmpresaExcluida(int $id)
    {
        return self::with(['empresa' => function ($q) {
            $q->withTrashed();
        }])
            ->findOrFail($id);
    }
}
