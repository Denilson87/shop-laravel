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
                    <h4 class="card-title">[ Cadastrar Clientes na carteira ]</h4>
                    <form class="forms-sample" method="post" id="bra_form">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nome </label>
                          <input type="text" class="form-control" id="Name" name="Name" >
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">E-mail</label>
                          <input type="text" class="form-control" id="E-mail" name="Email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Telefone</label>
                          <input type="text" class="form-control" id="Telefone" name="Phone">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Provincia</label>
                          <input type="text" class="form-control" id="Provincia" name="Province">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Cidade</label>
                          <input type="text" class="form-control" id="Cidade" name="City">
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
                    <h4 class="card-title">Clientes registados na carteira</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Telefone
                                    </th>
                                    <th>
                                        Provincia
                                    </th>
                                    <th>
                                        Cidade
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Actualizado em:
                                    </th>
                                    <th>
                                        Editar
                                    </th>
                                    <th>
                                     Apagar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ClientsList as $cli)
                                <tr>
                                    <td>
                                        {{$cli->name}}
                                    </td>
                                    <td>
                                        {{$cli->email}}
                                    </td>
                                    <td>
                                        {{$cli->phone}}
                                    </td>
                                    <td>
                                        {{$cli->province}}
                                    </td>
                                    <td>
                                     {{$cli->city}}
                                    </td>
                                    <td>
                                    {{$cli->created_at}}
                                    </td>
                                    <td>
                                    {{$cli->updated_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.Clients.edit', ['id' => $cli->id])}}" class="btn btn-warning">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.Clients.delete', ['id' => $cli->id])}}" onclick="delete()" class="btn btn-danger">Deletar</a>
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
				Email: "required",
                Phone: "required",
                Province: "required",
                City: "required",
				
				
				
			},
			messages: {
				Name: "Brand Name is Required",
                Email: "Email is required",
                Phone: "Phone number is required",
                Province: "Province is required",
                City: " City is required",
                	
			}
		});

		
	});
	</script>
<!--/JQUERY Validation-->

@endsection
