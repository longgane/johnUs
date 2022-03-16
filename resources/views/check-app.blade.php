@extends('layout.index1')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">ホーム</a></li>
        <li class="breadcrumb-item active" aria-current="page">アプリケーションの確認</li>
      </ol>
    </nav>

    <div class="special-guild-profile-3-block">

      <h2 class="heading">アプリケーションの確認</h2>

      <h3 class="desc">応募内容をご確認いただき、 よろしければ 「確認して応募する」 ボタンをクリックしてください。</h3>

      <form action="" class="app-form">
        <div class="app-item">
          <h4 class="app-title">自己PR</h4>
          <p class="app-desc">自井が提供できるスキル番帯禁aすoスキル、正の素年せ康たどをPRしてください</p>
          <textarea disabled placeholder="xxxx" cols="30" rows="9" class="app-input"></textarea>
        </div>
        <div class="app-item">
          <h4 class="app-title">志望理由</h4>
          <p class="app-desc">志望動機や自身が挑戦したいこと、貢献できるスキルなど採用者に伝えたいことを記入してください。</p>
          <textarea disabled placeholder="xxxx" cols="30" rows="9" class="app-input"></textarea>
        </div>
        <div class="app-btn-group">
          <button class="app-btn btn btn-outline">修正する</button>
          <button class="app-btn btn btn-primary">応募内容を確認する</button>
        </div>
      </form>
    </div>

  </div>
  @endsection