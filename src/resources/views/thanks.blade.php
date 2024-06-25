@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">    
@endsection

@section('content')
<header>

</header>
<main>
<div class="thanks__content">
  <div class="thanks__heading">
    <h2>お問い合わせありがとうございました</h2>
  </div>
  <div class="home_bottom">
    <a class="home_bottom_inner"  href="/index" >HOME</a>
  </div>
  <div class="background_text">
    <p>Thank you</p>
  </div>
</div>   
</main>
@endsection