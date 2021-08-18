@extends('admin_panel.adminLayout') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabela de produtos <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('admin.products.create')}}">+ Adicionar Produto</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Imagens
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Eliminar
                                    </th>
                                    <th>
                                    Preço do produto
                                    </th>
                                    <th>
                                    Descrição do produto
                                    </th>
                                    <th>
                                        Categoria
                                    </th>
                                    
                                    <th>
                                    Actualizar
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($prdlist as $prd)
                                <tr>
                                    <td>
                                        <img src="../uploads/products/{{$prd->id}}/{{$prd->image_name}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">{{$prd->name}}</a>
                                    </td>
                                    <td><a href="{{route('admin.products.delete', ['id' => $prd->id])}}"class="btn btn-danger">Deletar</a></td>
                                    <td>
                                        {{$prd->price}}
                                    </td>
                                    <td>
                                        {{$prd->description}}
                                    </td>
                                    <td>
                                        {{$prd->category->name}}
                                    </td>
                                    
                                    <td><a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">Editar</a> </td>
                                     
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

