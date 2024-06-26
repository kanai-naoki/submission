@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">    
@endsection

@section('content')
<header>
<div class="headeer_content">
    <div class="header_logo">
        <h1>FasionablyLate</h1>
    </div>
    <div class="register__link">
        <a class="register__button-submit" href="/register">register</a>
    </div>
</div>
</header>
<main>
<div class="login__content">
  <div class="login-form__heading">
    <h2>Login</h2>
  </div>
  <form class="form" action="/login" method="post">
  @csrf
    <div class="form__group">
      <div class="form__group-title">
        <p class="form__label--item">メールアドレス</p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <p class="form__label--item">パスワード</p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">ログイン</button>
    </div>
  </form>  
</div>    
</main>
@endsection