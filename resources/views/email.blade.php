
@extends('layout.index1')
@section('content')
<section class="registration-block">
    <div class="registration-container">
      <h2 class="title registration-title">新規会員登録</h2>
      <p class="desc registration-desc">ご登録ありがとうございます！</p>
      <form class="registration-form" style="">
        <label for="" class="label">メールアドレス</label>
        <input type="email" name="" class="input registration-input" placeholder="example@joinus.com">
        <div class="action">
          <button  class="btn btn-primary registration-btn" ><a href="email-2"> 招待メールを送信 </a></button>
          <p>すでに会員の方はこちら <a href="login">ログイン</a></p>
          <p>パスワードをお忘れの方は <a href="forgot-password">こちら</a></p>
        </div>
      </form>
    </div>
  </section>
@endsection
