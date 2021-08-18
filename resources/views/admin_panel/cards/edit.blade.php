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
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.Clients')}}"> < Voltar a lista</a>
                    <br><br>
                      <h4 class="card-title">Actualizar Clientes</h4>
                      <br>
                      <form class="forms-sample" method="post"  id="bra_form">
                      {{csrf_field()}}
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nome </label>
                          <input type="text" class="form-control" id="Name" name="Name" value="{{$Clients->name}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">E-mail</label>
                          <input type="text" class="form-control" id="Email" name="Email" value="{{$Clients->email}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Telefone</label>
                          <input type="text" class="form-control" id="Phone" name="Phone" value="{{$Clients->phone}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Provincia</label>
                          <input type="text" class="form-control" id="Province" name="Province" value="{{$Clients->province}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Cidade</label>
                          <input type="text" class="form-control" id="City" name="City" value="{{$Clients->city}}">
                        </div>
                        <input  type="submit" name="updateButton"  class="btn btn-success mr-2" id="updateButton" value="Actualizar" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    
    
    <!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#cat_form").validate({
			rules: {
				Name: "required",
				Email: "required",
        Phone:"required",
        Province:"required",
        City:"Required",
				
				
				
			},
			messages: {
				Name: " Label Name is Required",
        Email: "Email is required",
        Phone:"Phone is required",
        Province:"Phone is required",
        City:"Phone is Required",
                	
			}
		});
//Obrigacoes aos campos de Dados
		
	});
	</script>
<!--/JQUERY Validation-->
@endsection