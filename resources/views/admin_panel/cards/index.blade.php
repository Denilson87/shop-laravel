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

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Requisições de cartão <b>VIP</b></h4>
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
                                        Data
                                    </th>
                                    <th>
                                        Actualizado em:
                                    </th>
                                    <!-- <th>
                                        Editar
                                    </th> -->
                                    <!-- <th>
                                     Apagar
                                    </th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fielList as $cli)
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
                                    {{$cli->created_at}}
                                    </td>
                                    <td>
                                    {{$cli->updated_at}}
                                    </td>
                                    <!-- <td>
                                        <a href="{{route('admin.cards.edit', ['id' => $cli->id])}}" class="btn btn-warning">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.cards.delete', ['id' => $cli->id])}}" onclick="delete()" class="btn btn-danger">Deletar</a>
                                    </td> -->
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
