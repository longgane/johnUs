@extends('layout.index1')
@section('content')
<section class="signup-2-block">
    <div class="signup-container">
      <h2 class="title signup-title">ご登録ありがとうございます</h2>
      <div class="signup-content">
        <p class="desc signup-desc">ご登録いただいたメールアドレスに、仮登録メールを送信しました。</p>
        <p class="desc signup-desc">送付したメールに記載されているURLをクリックして、本登録を完了してください。</p>
      </div>
      <div class="action signup-action">
        <button class="btn btn-primary signup-btn" onclick="location.href='login'">トップに戻る</button>
      </div>
    </div>
  </section>
  @endsection