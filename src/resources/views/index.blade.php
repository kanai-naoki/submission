@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">    
@endsection

@section('content')
<header>
<div class="header_content">
    <div class="header_logo">
        <h2>FasionablyLate</h2>
    </div>
</div>
</header>
<main>
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
          <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
        </div>
        <div class="form__error">
          @error('first_name')
          {{ $message }}
          @enderror
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別※</span>    
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="radio" name="gender" value="male" checked/>男性
          <input type="radio" name="gender" value="female" />女性
          <input type="radio" name="gender" value="genderfree" />その他
        </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
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
        <span class="form__label--item">電話番号※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tell" placeholder="080" value="{{ old('tell') }}">
          <span>-</span>
          <input type="tel" name="tell" placeholder="1234" value="{{ old('tell') }}">
          <span>-</span>
          <input type="tel" name="tell" placeholder="5678" value="{{ old('tell') }}">
        </div>
        <div class="form__error">
          @error('tell')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="address" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>   
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <select name="content" id="">選択してください</select>
          {{--categoriesテーブル紐づけ
          @foreach ($categories as $category)
              <option value="">{{ $category['content'] }}</option>
          @endforeach
          --}}
        </div>
        <div class="form__error">
          @error('content')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <textarea name="detail" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
        </div>
        <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>    
</main>
@endsection