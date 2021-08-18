@extends('admin_panel.adminLayout') @section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabela de pedidos</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                    Endereço 
                                    </th>
                                    <th>
                                    Nome do produto
                                    </th>
                                    <th>
                                    Quantidade
                                    </th>
                                    <th>
                                    Cor
                                    </th>
                                    <th>
                                    Registado em 
                                    </th>
                                    <th>
                                        Estado
                                    </th>

                                    <th>
                                        Actualizado em
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sale as $s)
                                
                                @foreach($all as $c)
                                        @if($c[0]==$s->id)
                                        @foreach($products as $p)
                                        @if($p)
                                        @if( $c[1]==$p->id)
                                <tr>
                                <td>{{$s->id}}</td>
                                    
                                        @foreach($users as $u)
                                            @if($u->id == $s->user_id)
                                            <td>{{$u->full_name}}</td>
                                            <td>{{$u->area}}, {{$u->city}}, {{$u->zip}}</td>
                                            
                                            @break
                                            @endif
                                        @endforeach

                                   
                                    <td>
                                       
                                        {{$p->name}}
                                       
                                    </td>
                                   <td>
                                        {{$c[2]}}
                                    </td>
                                    <td>
                                        <div style="height:25px;width:25px;margin:5px;display:inline-block;background-color: {{$c[3]}}"></div>
                                    </td>
                                    
                                    <td>
                                        {{$s->created_at}}
                                    </td>
                                    <td>
                                    {{$s->order_status}}
                                    </td>
                                    <td>
                                        <form method="post" style="display:inline-block">
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$s->id}}" name="orderId">
                                            <select name="stat">
                                                @foreach($status as $x)
                                                @if($s->order_status!=$x)
                                                <option value="{{$x}}">{{$x}}</option>

                                                @endif

                                                @endforeach
                                            </select>
                                            <input type="submit" class="btn btn-sm btn-warning" value="Actualizar">
                                        </form>
                                    </td>
                                    @break
                                    @endif

                                    @endif
                                    @endforeach
                                    @endif
                                    @endforeach
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
