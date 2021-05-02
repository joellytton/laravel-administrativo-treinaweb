<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produtos';

    protected $appends = ['text'];

    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'descricao'];

    public static function buscarPorNome(string $nome)
    {
        $nome = '%' . $nome . '%';

        return self::where('nome', 'LIKE', $nome)->get();
    }

    public function getTextAttribute(): string
    {
        return $this->attributes['nome'];
    }
}
