@extends('layout.index1')
@section('content')
<section class="login-block">
    <div class="login-container">
      <h2 class="title login-title">ログイン</h2>
      <p class="desc login-desc">サインインして好奇心と経験をつなぐ</p>
      <form class="login-form">
        <div class="input-form">
          <div class="input-title">メールアドレス</div>
          <div class="input-group">
            <input type="text" class="input" placeholder="メールアドレスを入力">
          </div>
        </div>

        <div class="input-form">
          <div class="input-title">パスワード</div>
          <div class="input-group">
            <input type="text" class="input" placeholder="パスワードを入力してください">
          </div>
        </div>

        <a href="forgot-password" class="noti-forgot">パスワードをお忘れですか？</a>

        <div class="action login-action">
          <button class="btn btn-primary login-btn"><a href="home-logged">ログイン </a></button>
          <p>アカウントをお持ちでない場合は、<a href="signup-1">登録してください </a></p>
        </div>
      </form>
    </div>
  </section>
@endsection