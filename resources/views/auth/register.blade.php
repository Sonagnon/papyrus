@extends('layouts.connexion')

@section('contenu')

<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>PAPY</b>RUS</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Créez un compte</p>

        {!! Form::open(['url' => 'register']) !!}
            <div class="input-group mb-3">
              {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom', 'type'=>'text']) !!}
              {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}          <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prénoms', 'type'=>'text']) !!}
               {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              {!! Form::text("fonction_id",null, ['class' => 'form-control', 'placeholder' => 'Fonction',] ) !!}
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            


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
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                   J'accepte les <a href="#">termes</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <!--button type="submit" class="btn btn-primary btn-block">Valider</button-->
                {!! Form::submit('Valider', ['class' => 'btn btn-primary btn-block']) !!}
              </div>
              <!-- /.col -->
            </div>
        {!! Form::close() !!}

     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>



@endsection
