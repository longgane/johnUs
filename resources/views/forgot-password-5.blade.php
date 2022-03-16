@extends('layout.index1')
@section('content')
<section class="forgot-password-5-block">
    <div class="forgot-password-container">
      <h2 class="title forgot-password-title">パスワードリセット</h2>
      <p class="forgot-password-text">入力いただいたメールアドレス宛にメールを送信しました</p>
      <p class="forgot-password-text">メールを確認し、24時間以内にパスワードの再設定をお願いします。</p>
      <div class="forgot-password-noti">
        <p>24時間を経過した場合パスワードの再設定はできなくなります。 もしメールが届かない場合は、入力されたメールアドレスが間違っているか、利用できないか、登録されていません。
          迷惑メールとして削除されている場合もありますので、メールソフトの設定もあわせてご確認ください。</p>
      </div>

    </div>
  </section>

@endsection
