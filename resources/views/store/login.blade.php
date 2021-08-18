@extends('store.storeLayout')
@section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>

<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
  align-items:center;
}</style>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
        <center><form method="post" id="loginForm" style="align-intems:center;">
            {{csrf_field()}}
            <div class="col-md-6" style="float: none;">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Login do usuário</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Digite o seu e-mail" value="">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="pass" id="pass" placeholder="Password" value="">
                    </div>
                        <input type="submit"  name="signin" class="primary-btn order-submit" value="Entrar">
                </form></center>
               
                @if(session('message'))
                
                
                <tr>
                    <td>
                        <li> {{session('message')}}</li>
                    </td>
                </tr>
                
		         
                @endif   
                
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
                <!-- /Billing Details -->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#loginForm").validate({
			rules: {
				
				email: {
					required: true,
					email: true
				},
				pass: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				
				email: "Please enter a valid email address",
                
                
				pass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				}
				
				
			}
		});

		
	});
	</script>
<!--/JQUERY Validation-->
<!-- /SECTION -->
@endsection
