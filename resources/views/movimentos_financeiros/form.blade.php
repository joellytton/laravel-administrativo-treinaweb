<div class="form-group row {{ $errors->has('descricao') ? 'has-error' : ''}}">
    <label for="descricao" class="col-form-label col-sm-2">{{ 'Descrição*' }}</label>
    <div class="col-sm-10">
        <input class="form-control" name="descricao" type="text" id="descricao"
            value="{{ isset($movimentofinanceiro->descricao) ? $movimentofinanceiro->descricao : ''}}" required>
        {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('valor') ? 'has-error' : ''}}">
    <label for="valor" class="col-form-label col-sm-2">{{ 'Valor*' }}</label>
    <div class="col-sm-10">
        <input class="form-control money" name="valor" type="text" id="valor"
            value="{{ isset($movimentofinanceiro->valor) ? $movimentofinanceiro->valor : ''}}" required>
        {!! $errors->first('valor', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="col-form-label col-sm-2">{{ 'Tipo*' }}</label>
    <div class="col-sm-10">
        <select name="tipo" class="form-control" id="tipo" required>
            @foreach (json_decode('{"entrada":"Entrada","saida":"Saida"}', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}"
                {{ (isset($movimentofinanceiro->tipo) && $movimentofinanceiro->tipo == $optionKey) ? 'selected' : ''}}>
                {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    <label for="empresa_id" class="col-form-label col-sm-2">{{ 'Empresa*' }}</label>
    <div class="col-sm-10">
        <select class="form-control" name="empresa_id" id="empresa-ajax" style="width: 100%" required>
            @if (isset($movimentofinanceiro))
            <option value="{{$movimentofinanceiro->empresa_id}}">
                {{$movimentofinanceiro->empresa->nome}} {{$movimentofinanceiro->empresa->razao_social}}
            </option>
            @endif
        </select>
        {{-- <input class="form-control" name="empresa_id" type="number" id="empresa_id"
            value="{{ isset($movimentofinanceiro->empresa_id) ? $movimentofinanceiro->empresa_id : ''}}" required> --}}
        {!! $errors->first('empresa_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
