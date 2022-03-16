@extends('layout.index1')
@section('content')
<section class="login-block forgot-password-block">
    <div class="login-container">
      <h2 class="title login-title">パスワードリセット</h2>
      <p class="desc login-desc">パスワードリセット用のURLをご登録のメールアドレスに送信します。</p>
      <form class="login-form">
        <div class="input-form">
          <div class="input-title">メールアドレス</div>
          <div class="input-group">
            <input type="text" class="input" placeholder="example@joinus.com">
          </div>
        </div>

        <div class="action login-action">
          <button class="btn btn-primary login-btn"><a href="forgot-password-5">送信</a></button>
          <p><a href="login">ログインはこちら </a></p>
        </div>
      </form>
    </div>
  </section>
@endsection
