<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('images/logo/favicon-32x32.png')}}" />
    <title>VIP | Registration</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin-top:-70px;
  /* margin-left:500px; */
  /* margin: auto; */
  
}
.form {
  position: center;
 
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.10), 0 10px 100px 0 rgba(0, 0, 0, 0.100);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  /* background: #096d79; */
  background-image: url("{{asset('img/b7.jpg')}}");
  /* <img class="top" src="{{asset('img/b7.jpg')}}" style="height:400px; width:100%"/> */
   /* fallback for old browsers */
  /* background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;       */
}
    
label.error {
  color: #a94442;
  background-color: #f2dede;
  
}
</style>
<body><center>
    <div class="login-page">
        <div class="form" >
            <form class="login-form" id="loginForm" method="post">
          
             <img src="https://icons.veryicon.com/png/o/miscellaneous/cloud-call-center/success-24.png" style="width:150px;" alt="profile image">
            <br><br>
            <label>Obrigado por se registar ao cartão VIP, será contactado para os proximos passos!</label>  <br><br>
            <a href="{{route('user.home')}}"><i class="fa fa-map-marker"></i>Ok</a>
            </form>
        </div>
    </div></center>
</body>
</html>



<!--/JQUERY Validation-->
