@extends('admin_panel.adminLayout') @section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>



<div class="content-wrapper">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">[ Adicionar Marcas dos productos ]</h4>
                    <form class="forms-sample" method="post" id="bra_form">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Name" id="Name" placeholder="Digite a Marca">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Tipo da Marca</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Type" id="Type" placeholder="Digite o tipo Marca">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Registar</button>
                    </form>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                        <tr>
                            <td>
                                <li>{{$err}}</li>
                            </td>
                        </tr>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabela de categorias</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Tipo da Marca
                                    </th>
                                    <th>
                                        Criado em:
                                    </th>
                                    <th>
                                        Actualizado em:
                                    </th>
                                    <th>
                                        Editar
                                    </th>
                                    <th>
                                        Actualizar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Brandslist as $bra)
                                <tr>
                                    <td>
                                        {{$bra->name}}
                                    </td>
                                    <td>
                                        {{$bra->type}}
                                    </td>
                                    <td>
                                    {{$bra->created_at}}
                                    </td>
                                    <td>
                                    {{$bra->updated_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.Brands.edit', ['id' => $bra->id])}}" class="btn btn-warning">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.Brands.delete', ['id' => $bra->id])}}" onclick="delete()" class="btn btn-danger">Deletar</a>
                                    </td>
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


<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		
		$("#bra_form").validate({
			rules: {
				Name: "required",
				Type: "required",
				
				
				
			},
			messages: {
				Name: "Brand Name is Required",
				Type: "Brand Type is Required",
                	
			}
		});

		
	});
	</script>
<!--/JQUERY Validation-->

@endsection
