@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">    
@endsection

@section('content')
<header>
<div class="headeer_content">
    <div class="header_logo">
        <h1>FasionablyLate</h1>
    </div>
    <div class="register__link">
        <a class="register__button-submit" href="/login">logout</a>
    </div>
</div>
</header>
<main>
 </form>
  <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">お名前</th>
        <th class="todo-table__header">性別</th>
        <th class="todo-table__header">メールアドレス</th>
        <th class="todo-table__header">お問い合わせ種類</th>
        <th class="todo-table__header">問い合わせ詳細</th>
      </tr>
      
</main>
@endsection