@csrf

<input type="hidden" name="tipo" value="{{$tipo}}">

<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input type="text" name="nome" required="required" maxlength="255" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="razao_social" class="col-form-label col-sm-2">Razão Social</label>
    <div class="col-sm-10">
        <input type="text" name="razao_social" maxlength="255" class="form-control">
    </div>
</div>


<div class="form-group row">
    <label for="documento" class="col-form-label col-sm-2 required">Documento*</label>
    <div class="col-sm-10">
        <input type="text" name="documento" required="required" maxlength="18" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="documento" class="col-form-label col-sm-2 required">IE/RG</label>
    <div class="col-sm-10">
        <input type="text" name="ie_rg" maxlength="18" class="ie_rg form-control">
    </div>
</div>

<div class="form-group row">
    <label for="nome_contato" class="col-form-label col-sm-2 required">Nome Contato*</label>
    <div class="col-sm-10">
        <input type="text" name="nome_contato" required="required" maxlength="255" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="celular" class="col-form-label col-sm-2 required">Celular*</label>
    <div class="col-sm-10">
        <input type="text" name="celular" required="required" maxlength="15" class="phone form-control">
    </div>
</div>

<div class="form-group row">
    <label for="telefone" class="col-form-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input type="text" name="telefone" maxlength="15" class="phone form-control">
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-form-label col-sm-2 required">Email*</label>
    <div class="col-sm-10">
        <input type="text" name="email" required="required" maxlength="100" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="cep" class="col-form-label col-sm-2 required">Cep*</label>
    <div class="col-sm-10">
        <input type="text" name="cep" required="required" maxlength="9" class="cep form-control">
    </div>
</div>

<div class="form-group row">
    <label for="logradouro" class="col-form-label col-sm-2 required">Logradouro*</label>
    <div class="col-sm-10">
        <input type="text" name="logradouro" required="required" maxlength="150" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="bairro" class="col-form-label col-sm-2 required">Bairro*</label>
    <div class="col-sm-10">
        <input type="text" name="bairro" required="required" maxlength="100" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="cidade" class="col-form-label col-sm-2 required">Cidade*</label>
    <div class="col-sm-10">
        <input type="text" name="cidade" required="required" maxlength="100" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="estado" class="col-form-label col-sm-2 required">Estado*</label>
    <div class="col-sm-10">
        <input type="text" name="estado" required="required" maxlength="2" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="observacao" class="col-form-label col-sm-2 required">Observação</label>
    <div class="col-sm-10">
        <input type="text" name="observacao" required="required" maxlength="500" class="form-control">
    </div>
</div>

<button class="btn btn-primary" type="submit">Salvar</button>