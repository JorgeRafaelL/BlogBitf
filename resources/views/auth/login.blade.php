@extends('user/app')

@section('bg-img', asset('user/img/contact-bg.jpg'))

@section('head')

@endsection

@section('title', 'Conectate')
@section('sub-title', '$post->subtitle')

@section('main-content')
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="panel-heading">Conectarse</div>
            <div class="col-lg-10 col-md-10 mx-auto">


                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Contraseña</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary pull-left">
                                Iniciar sesión
                            </button>

                            <a href='{{ route('register') }}' class="btn btn-primary pull-right">
                               Registrate
                           </a>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Olvidaste la contraseña?
                            </a>

                            

                       </div>
                   </div>


               </form>

           </div>
       </div>
   </div>
</article>


<hr>
@endsection
@section('footer')

@endsection





