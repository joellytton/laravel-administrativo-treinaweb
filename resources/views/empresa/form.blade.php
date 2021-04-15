@csrf

<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input value="{{ old('nome', @$empresa->nome)}}" type="text" name="nome" maxlength="255" required="required"
            class="form-control @error('nome') is-invalid @enderror">

        @error('nome')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="razao_social" class="col-form-label col-sm-2">Razão Social</label>
    <div class="col-sm-10">
        <input value="{{ old('razao_social', @$empresa->razao_social)}}" type="text" name="razao_social" maxlength="255"
            class="form-control @error('razao_social') is-invalid @enderror">

        @error('razao_social')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="documento" class="col-form-label col-sm-2 required">Documento*</label>
    <div class="col-sm-10">
        <input value="{{ old('documento', @$empresa->documento)}}" type="text" name="documento" required="required"
            maxlength="18" class="cpf_cnpj form-control @error('documento') is-invalid @enderror">

        @error('documento')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="documento" class="col-form-label col-sm-2 required">IE/RG</label>
    <div class="col-sm-10">
        <input value="{{ old('ie_rg', @$empresa->ie_rg)}}" type="text" name="ie_rg" maxlength="18"
            class="ie_rg form-control @error('ie_rg') is-invalid @enderror">

        @error('ie_rg')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="nome_contato" class="col-form-label col-sm-2 required">Nome Contato*</label>
    <div class="col-sm-10">
        <input value="{{ old('nome_contato', @$empresa->nome_contato)}}" type="text" name="nome_contato"
            required="required" maxlength="255" class="form-control @error('nome_contato') is-invalid @enderror">

        @error('nome_contato')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="celular" class="col-form-label col-sm-2 required">Celular*</label>
    <div class="col-sm-10">
        <input value="{{ old('celular', @$empresa->celular)}}" type="text" name="celular" required="required"
            maxlength="15" class="celular form-control @error('celular') is-invalid @enderror">
        @error('celular')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="telefone" class="col-form-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input value="{{ old('telefone', @$empresa->telefone)}}" type="text" name="telefone" maxlength="15"
            class="phone form-control @error('telefone') is-invalid @enderror">

        @error('telefone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-form-label col-sm-2 required">Email*</label>
    <div class="col-sm-10">
        <input value="{{ old('email', @$empresa->email)}}" type="text" name="email" required="required" maxlength="100"
            class="form-control @error('email') is-invalid @enderror">

        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="cep" class="col-form-label col-sm-2 required">Cep*</label>
    <div class="col-sm-10">
        <input value="{{ old('cep', @$empresa->cep)}}" type="text" name="cep" required="required" maxlength="9"
            class="cep form-control @error('cep') is-invalid @enderror">

        @error('cep')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="logradouro" class="col-form-label col-sm-2 required">Logradouro*</label>
    <div class="col-sm-10">
        <input value="{{ old('logradouro', @$empresa->logradouro)}}" type="text" name="logradouro" required="required"
            maxlength="150" class="form-control @error('logradouro') is-invalid @enderror">

        @error('logradouro')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="bairro" class="col-form-label col-sm-2 required">Bairro*</label>
    <div class="col-sm-10">
        <input value="{{ old('bairro', @$empresa->bairro)}}" type="text" name="bairro" required="required"
            maxlength="100" class="form-control @error('bairro') is-invalid @enderror">

        @error('bairro')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="cidade" class="col-form-label col-sm-2 required">Cidade*</label>
    <div class="col-sm-10">
        <input value="{{ old('cidade', @$empresa->cidade)}}" type="text" name="cidade" required="required"
            maxlength="100" class="form-control @error('cidade') is-invalid @enderror">

        @error('cidade')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="estado" class="col-form-label col-sm-2 required">Estado*</label>
    <div class="col-sm-10">
        <select name="estado" class="form-control @error('estado') is-invalid @enderror" required="required">
            <option value="">Selecione</option>
            @foreach(estados() as $sigla => $nome)
                <option {{ @$empresa->estado == $sigla ? 'selected' : '' }} value="{{ $sigla }}">{{ $nome }}</option>
            @endforeach
        </select>

        @error('estado')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="observacao" class="col-form-label col-sm-2 required">Observação</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$empresa->observacao)}}" type="text" name="observacao" maxlength="500"
            class="form-control @error('observacao') is-invalid @enderror">

        @error('observacao')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<button class="btn btn-primary" type="submit">Salvar</button>
