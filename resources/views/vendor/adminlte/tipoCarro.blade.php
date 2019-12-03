@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">INGRESE TIPOS DE CARROS</h3>
            </div>
             <form role="form" action="{{url('tipo/carro/guardar')}}" method="post">
             	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label>Tipo Carro</label>
                  <input type="text" class="form-control" placeholder="Ingrese el tipo de carro" name="tipo">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
              </div>
            </form>
            <!-- /.box-body -->
    </div>
     <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Tipo de carro</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($datos as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->tipo}}</td>
                          <td><a href="{{url('delepersona',[$item->id])}}">Eliminar</a><a href="{{url('editarpersona',[$item->id])}}">Editar</a></td>
                       </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tipo de carro</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
</div>
	</div>
@endsection

            