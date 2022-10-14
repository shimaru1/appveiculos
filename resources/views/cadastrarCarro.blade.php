@extends('padrao')
@section('content')
<section>
<div class="container cadastroCarro">
<form class="row g-3" method="post" action="{{route('salvar-banco-c')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="serie 3">
    @error('modelo')
      <div><p class="text-light">Preecher o campo modelo </div>
    @enderror
  </div>
  
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="BMW">
    @error('marca')
      <div><p class="text-light">Preecher o campo modelo </div>
    @enderror
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano')}}" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
      <div><p class="text-light">Preecher o campo modelo </div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputCor" placeholder="preto">
    @error('cor')
      <div><p class="text-light">Preecher o campo modelo </div>
    @enderror
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" class="form-label">Valor</label>
    <input type="text" name="valor" class="form-control" id="inputZip" placeholder="25.660,23">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
</section>
@endsection
