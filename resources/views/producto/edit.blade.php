@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar de Productos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                
               
            </div>
        </div>
    </div>
    
    <edit-producto-component :producto="{{ $producto }}" text="{{ route('producto.index') }}" ></edit-producto-component> 
</div>
@endsection
    

