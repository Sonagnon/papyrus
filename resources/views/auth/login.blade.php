@extends('layouts.connexion')

@section('contenu')

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>PAPY</b>RUS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connectez-vous</p>

     
        {!! Form::open(['url' => 'login']) !!}
        <div class="input-group mb-3">
          {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'type'=>'email']) !!}
                      {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe', 'type'=>'password']) !!}
                      {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Se rappeler
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            {!! Form::submit('Valider', ['class' => 'btn btn-primary btn-block']) !!}
          </div>
          <!-- /.col -->
        </div>
    {!! Form::close() !!}

      

      <p class="mb-1">
        <a href="forgot-password.html">Mot de passe oublié?</a>
      </p>
      <!--p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>



@endsection
