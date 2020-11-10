<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/admin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/admin')}}/csslogin/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    <!--best paractice Form From-->
                    {!! Form::open(['url' => 'login', 'method'=>'post']) !!}
                    
                        <div class="form-group">
                            {{Form::email('email',$value=null,['class'=>'form-control @error("email") is-invalid @enderror','required', 'autocomplete'=>'emailemail', 'placeholder'=>'Enter your email'])}}
                                @error("email")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            {{Form::password('password',['class'=>'form-control @error("password") is-invalid @enderror','required', 'autocomplete'=>'current-password', 'placeholder'=>'Enter password'])}}
                            <!--password er value null hoy na-->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="checkbox">
                            <label>{{Form::checkbox('name','RememberMe')}} Remember Me</label>
                            <!--ekhane field er nam RememberMe jeta dhore db te kaj hobe [name declare ta onno gulu theke different]-->
                        </div>
                        <div class="form-group row mb-0 ">
                          {{Form::submit('Log In',['class'=>'btn btn-primary btn-block','name'=>'btn'])}}
                          <!--Log in likha ta form e show korbe-->
                        </div>
                   
                    {!! Form::close() !!}
                    
                  <hr>
                  <!--simple practice-->
<!--                  {!!Form::open(['url'=>'login','method'=>'post'])!!}
                  <div class="form-group">
                      {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter your name'])}}
                  </div>
                  <div class="form-group">
                      {{Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Enter your address'])}}
                  </div>
                  <div class="form-group">
                      {{Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter your email'])}}
                  </div>
                  <div class="form-group">
                      {{Form::password('password',['class'=>'form-control','placeholder'=>'Enter your password'])}}
                  </div>
                  {!!Form::close()!!}

                  <hr>-->

                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/admin')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('public/admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/admin')}}/jslogin/sb-admin-2.min.js"></script>

</body>

</html>
