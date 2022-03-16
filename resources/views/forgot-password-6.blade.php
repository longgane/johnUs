@extends('layout.index1')
@section('content')
<section class="login-block forgot-password-6-block">
    <div class="login-container">
      <h2 class="title login-title">パスワードリセット</h2>
      <p class="desc login-desc">半角英数字6文字以上20文字以内で入力してください。</p>
      <form class="login-form">
        <div class="input-form">
          <div class="input-title">パスワード</div>
          <div class="input-group">
            <input type="text" class="input" placeholder="パスワードを入力">
          </div>
        </div>

        <div class="input-form">
          <div class="input-title">パスワードを再入力</div>
          <div class="input-group">
            <input type="text" class="input" placeholder="パスワードを入力">
          </div>
        </div>

        <a href="#!" class="noti-forgot">パスワードをお忘れですか？</a>

        <div class="action login-action">
          <button class="btn btn-primary login-btn"><a href="forgot-password-7">パスワードを変更</a></button>
        </div>
      </form>
    </div>
  </section>
@endsection
