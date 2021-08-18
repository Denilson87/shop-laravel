@extends('admin_panel.adminLayout') @section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.Clients')}}"> <  Voltar a lista</a>
                    <br><br>
                      <h4 class="card-title">Remover cliente da carteira</h4>
                      <br>
                      <form class="forms-sample" method="post">
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
                          <input type="text" class="form-control" id="Provincia" name="Province" value="{{$Clients->province}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Cidade</label>
                          <input type="text" class="form-control" id="Cidade" name="Cidade" value="{{$Clients->city}}">
                        </div>
                        <input  type="submit" name="updateButton"  class="btn btn-danger mr-2" id="updateButton" value="DELETE" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
@endsection