<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tipo',
        'nome',
        'razao_social',
        'documento',
        'ie_rg',
        'nome_contato',
        'celular',
        'email',
        'telefone',
        'cep',
        'logradouro',
        'cidade',
        'bairro',
        'estado',
        'observacao'
    ];

    protected $visible = ['id', 'text'];

    protected $appends = ['text'];

    public function movimentosEstoque()
    {
        return $this->hasMany('App\Models\MovimentosEstoque');
    }

    public static function todasPorTipo(string $tipo, int $quantidade = 10): AbstractPaginator
    {
        return self::where('tipo', $tipo)->paginate($quantidade);
    }

    public static function buscarPorNomeTipo(string $nome, string $tipo)
    {
        return self::where('nome', 'LIKE', "%" . $nome . "%")
            ->where('tipo', $tipo)
            ->get();
    }

    public static function buscaPorId(int $id)
    {
        return self::with([
            'movimentosEstoque' => function ($query) {
                $query->latest()->take(5);
            },
            'movimentosEstoque.produto' => function ($q) {
                $q->withTrashed();
            }
        ])
            ->findOrFail($id);
    }

    public function getTextAttribute(): string
    {
        return sprintf(
            '%s (%s)',
            $this->attributes['nome'],
            $this->attributes['razao_social']
        );
    }
}
