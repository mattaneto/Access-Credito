<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ isset($pessoa->nome) ? $pessoa->nome : ''}}" >
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
    <label for="cpf" class="control-label">{{ 'Cpf' }}</label>
    <input class="form-control" name="cpf" type="text" id="cpf" value="{{ isset($pessoa->cpf) ? $pessoa->cpf : ''}}" >
    {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('data_nascimento') ? 'has-error' : ''}}">
    <label for="data_nascimento" class="control-label">{{ 'Data Nascimento' }}</label>
    <input class="form-control" name="data_nascimento" type="date" id="data_nascimento" value="{{ isset($pessoa->data_nascimento) ? $pessoa->data_nascimento : ''}}" >
    {!! $errors->first('data_nascimento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($pessoa->email) ? $pessoa->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    <label for="telefone" class="control-label">{{ 'Telefone' }}</label>
    <input class="form-control" name="telefone" type="text" id="telefone" value="{{ isset($pessoa->telefone) ? $pessoa->telefone : ''}}" >
    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    <label for="endereco" class="control-label">{{ 'Endereco' }}</label>
    <input class="form-control" name="endereco" type="text" id="endereco" value="{{ isset($pessoa->endereco) ? $pessoa->endereco : ''}}" >
    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cidade') ? 'has-error' : ''}}">
    <label for="cidade" class="control-label">{{ 'Cidade' }}</label>
    <input class="form-control" name="cidade" type="text" id="cidade" value="{{ isset($pessoa->cidade) ? $pessoa->cidade : ''}}" >
    {!! $errors->first('cidade', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="text" id="estado" value="{{ isset($pessoa->estado) ? $pessoa->estado : ''}}" >
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cep') ? 'has-error' : ''}}">
    <label for="cep" class="control-label">{{ 'Cep' }}</label>
    <input class="form-control" name="cep" type="text" id="cep" value="{{ isset($pessoa->cep) ? $pessoa->cep : ''}}" >
    {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
