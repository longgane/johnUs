@extends('layout.index1')
@section('content')
<section class="signup-1-block">
    <div class="signup-container">
      <h2 class="title signup-title">個人登録確認</h2>
      <p class="desc signup-desc">登録内容をご確認いただき、よろしければ「確認して仮登録する」ボタンをクリックしてください。</p>
      <div class="signup-main">
        <div class="info-list">
          <div class="info-item">
            <div class="info-title">お名前</div>
            <div class="info-content">Xu</div>
          </div>
          <div class="info-item">
            <div class="info-title">性別</div>
            <div class="info-content">男性</div>
          </div>
          <div class="info-item">
            <div class="info-title">生年月日</div>
            <div class="info-content">1997年7月6日</div>
          </div>
          <div class="info-item">
            <div class="info-title">出身地</div>
            <div class="info-content">Ha Noi</div>
          </div>
          <div class="info-item">
            <div class="info-title">メールアドレス</div>
            <div class="info-content">メールアドレス</div>
          </div>
          <div class="info-item">
            <div class="info-title">携帯連絡先</div>
            <div class="info-content">0947873857</div>
          </div>
          <div class="info-item">
            <div class="info-title">パスワード</div>
            <div class="info-content info-content-hidden">*****************************</div>
          </div>
        </div>

        <div class="action signup-action">
          <button class="btn btn-outline signup-btn back-btn"  onclick="location.href='signup-1'">修理
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.5 17L9.5 12L14.5 7" stroke="#3273B9" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>

          </button>
          <button class="btn btn-primary signup-btn" onclick="location.href='signup-2'">確認する</button>
        </div>
      </div>
    </div>
  </section>
  @endsection