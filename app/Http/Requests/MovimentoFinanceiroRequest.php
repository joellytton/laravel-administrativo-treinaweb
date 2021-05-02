<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Types\This;

class MovimentoFinanceiroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            'descricao' => 'required|string|max:255',
            'tipo' => 'required',
            'valor' => 'required|numeric',
            'empresa_id' => 'required|max:10'
        ];
    }

    public function validationData()
    {
        $campos = $this->all();

        $campos['valor'] = numero_br_para_iso($campos['valor']);

        $this->replace($campos);

        return $campos;
    }
}
