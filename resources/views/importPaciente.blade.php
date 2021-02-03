@extends('layouts.app')
@section('content')

<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Modelo para importar EXCEL</h5>
      <p class="card-text">A extensão do Arquivo XLSX, não colocar a linha 1 da foto. </p>
    </div>
  </div>




<div class="container">
	<form action={{url('importpacie') }} method="POST" name="importform"
	  enctype="multipart/form-data">
		@csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <label for="exampleInputCategoria">Hospital</label>
                    <select class="form-control" name="categorias_id" id="categoria">

                    <?php
                        use App\Models\Categoria;
                        $tabela = categoria::all();
                    ?>

                    @foreach($tabela as $item)
                    <option value='{{$item->id}}' >{{$item->id}}{{$item->name}}</option>
                    <?php $cod=$item->id; ?>
                    @endforeach

                    </select>
                </div>
            </div>




        <div class="form-group">
			<label for="file">File:</label>
			<input id="file" type="file" name="file" class="form-control">
		</div>

        <button class="btn btn-success">Import File</button>

        <a class="btn btn-primary" href=" url('importpacie')"  role="button">teste</a>



    </form>
</div>

<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Modelo para importar EXCEL</h5>
      <p class="card-text">A extensão do Arquivo XLSX, não colocar a linha 1 da foto. </p>
    </div>
  </div>


  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Modelo para importar EXCEL</h5>
      <p class="card-text">Modelo para importar</a>A extensão do Arquivo XLSX, não colocar a linha 1 da foto. </p>
    </div>
  </div>




@endsection
