@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">    
@endsection

@section('content')
<header>
<div class="headeer_content">
    <div class="header_logo">
        <h1>FasionablyLate</h1>
    </div>
    <div class="register__link">
        <a class="register__button-submit" href="/login">login</a>
    </div>
</div>
</header>
<main>
<div class="register__content">
  <div class="register-form__heading">
    <h2>Register</h2>
  </div>
  <form class="form" action="/register" method="post">
  @csrf
    <div class="form__group">
      <div class="form__group-title">
        <p class="form__label--item">お名前</p>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
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
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>    
</main>
@endsection