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
    <div class="header_link">
      <form class="form" action="/logout" method="post">
        @csrf
        <button class="header-nav__button">ログアウト</button>
      </form>
    </div>
</div>
</header>
<main>

  <div class="search_area">
    <form class="search_form" action="contacts/search" post="get">
        <input type="search" type="text" name="keyword" value="{{ old('keyword') }}" >
        <select name="gender" id="">性別
            <option value="">全て</option>
            <option value="">男性</option>
            <option value="">女性</option>
            <option value="">その他</option>
        </select>
        <select name="content" id="content">お問い合わせの種類
            @foreach ($catagories as $category)
            <option value="">{{ $category['content'] }}</option>
        </select>
        <input type="date">
    </form>
  </div>
  <div class="convenient-function_area">
    <div class="export_area">
      <form action="/csv-download" method="post">
        <button class="export_button" type="submit">エクスポート</button>
      </form>
    </div>
    <div class="paginatiion_area">
        {{ $contacts->links() }}
    </div>
  </div> 
  <div class="contact-table">
    <table class="contact-table__inner">
      <tr class="contact-table__row">
        <th class="contact-table__header">お名前</th>
        <th class="contact-table__header">性別</th>
        <th class="contact-table__header">メールアドレス</th>
        <th class="contact-table__header">お問い合わせ種類</th>
        <th class="contact-table__header">問い合わせ詳細</th>
      </tr>
      @foreach ($contacts as $contact)
      <tr class="contact-table_data">
        <td>
          {{ $contact['first_name'] }}&nbsp;{{ $contact['last_name'] }}
        </td>
        <td>
          {{ $contact['gender'] }}
        </td>
        <td>
          {{ $contact['email'] }}
        </td>
        <td>         
          {{ $contact['content'] }}
        </td>
        <td>
          /*お問い合わせ詳細のデータを受け取って、モーダルウィンドウで詳細を表示→一番下に削除機能を入れる。要調査*/
          {{ $contact['detail'] }}
        </td>
      </tr>     
      @endforeach  
</main>
@endsection