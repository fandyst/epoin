<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="/css/krea_login.css" />
</head>

<body>
  <div id="loginbox">
    <form action="{{ url('/login') }}" method="POST" class="form-vertical" id="kreaFormLogin">
      {{ csrf_field() }}
      <div class="control-group normal_text">
        <img src="/img/logo.png" alt="Logo" width="200px" height="200px" />
        <h3>{{ env('APP_SEKOLAH') }}</h3>
      </div>
      <div class="control-group{{ $errors->has('nip') ? ' has-error' : '' }}">
        <div class="controls">
          <div class="main_input_box">
            <span class="add-on"><i class="icon-user"></i></span>
            <input type="text" id="nip" name="nip" value="{{ old('nip') }}" placeholder="NIP" maxlength="18" required autofocus /> @if ($errors->has('nip'))
            <span class="help-block">
                      <strong>{{ $errors->first('nip') }}</strong>
                  </span> @endif
          </div>
        </div>
      </div>
      <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="controls">
          <div class="main_input_box">
            <span class="add-on"><i class="icon-lock"></i></span>
            <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required autofocus /> @if ($errors->has('password'))
            <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span> @endif
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="main_checkbox_box">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}} /> Ingatkan Saya
            </div>
        </div>
      </div>
      <div class="form-actions">
        <span class="pull-left"><button type="submit" class="btn btn-info">Login</button>
      </div>
    </form>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/localization/messages_id.js"></script>
  <script src="js/krea_login.js"></script>
</body>
</html>
