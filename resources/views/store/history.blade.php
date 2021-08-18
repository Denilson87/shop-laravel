@extends('store.storeLayout')
@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Codigo</th>
                        <th>Imagem </th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Cor</th>
                        <th>Stado</th>
                    </thead>
                    <tbody>
                        @foreach($sale as $s)
                            @foreach($all as $c)
                            @if($c[0]==$s->id)
                            @foreach($products as $p)
                            @if(session('user')->id == $s->user_id)
                                @if($c[1]==$p->id)
                                <tr>
                                <td>{{$s->id}}</td>
                                <td><img src="uploads/products/{{$p->id}}/{{$p->image_name}}" height="50px" width="50px"></td>
                                <td>{{$p->name}}</td>
                                <td>{{$c[2]}}</td>
                                <td><div style="height:25px;width:25px;margin:5px;display:inline-block;background-color: {{$c[3]}}"></div></td>      
                                <td>{{$s->order_status}}</td>
                                </tr>
                           
                                @break
                                @endif
                                @endif
                            @endforeach
                        @endif
                        @endforeach
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        <marquee behavior="scroll" direction="left">
    <img src="https://thumbs.dreamstime.com/b/ilustra%C3%A7%C3%A3o-do-vetor-logotipo-canal-em-fundo-branco-vetorial-na-editorial-de-isolada-coco-192037102.jpg" width="120" height="80" alt="Natural" />
    <img src="https://marcas-logos.net/wp-content/uploads/2020/03/DIESEL-LOGO.png" width="130" height="80" alt="Natural" />
    <img src="https://menback.com/wp-content/uploads/2021/02/givenchy-logo-850x481.jpg" width="120" height="80" alt="Natural" />
    <img src="https://i.pinimg.com/564x/35/e5/d3/35e5d3409cef38408840aec46a324463.jpg" width="120" height="80" alt="Natural" />
    <img src="https://uploads.ifdesign.de/award_img_300/oex_large/149512_01_300_3_149512_MON_Logo_1.jpg" width="120" height="80" alt="Natural" />
    <img src="https://wallpapercave.com/wp/wp2841299.jpg" width="120" height="80" alt="Natural" />
    <img src="https://www.pngkey.com/png/detail/950-9503126_hugo-boss-logo-logos-de-marcas-hugo-boss.png" width="120" height="27" alt="Natural" />
    <img src="https://logos-marques.com/wp-content/uploads/2020/07/Azzaro-logo.png" width="120" height="80" alt="Natural" />
    <img src="https://boxgamefun.com/wp-content/uploads/2017/10/Hermes-logo.png" width="120" height="80" alt="Natural" />
    <img src="https://static.dezeen.com/uploads/2017/02/calvin-klein-old-logo_dezeen.gif" width="120" height="100" alt="Natural" />
    <img src="https://mms.businesswire.com/media/20201027006244/en/834004/23/Logo.jpg" width="180" height="100" alt="Natural" />
    <img src="https://1000logos.net/wp-content/uploads/2020/02/Dolce-Gabbana-Logo.jpg" width="180" height="100" alt="Natural" />
    <img src="https://marcas-logos.net/wp-content/uploads/2020/03/MARC-JACOBS-LOGO.png" width="180" height="125" alt="Natural" />
    <img src="https://1000logos.net/wp-content/uploads/2020/03/Kenzo-logo.png" width="180" height="100" alt="Natural" />
</marquee>
        <!-- /Billing Details -->
    </div>

</div>

@endsection
