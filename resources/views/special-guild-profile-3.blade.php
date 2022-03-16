@extends('layout.index1')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">ホーム</a></li>
        <li class="breadcrumb-item active" aria-current="page">応募クエスト</li>
      </ol>
    </nav>

    <div class="special-guild-profile-3-block">

      <h2 class="heading">応募クエスト</h2>

      <h3 class="title">応募フォーム</h3>

      <form action="" class="app-form">
        <div class="app-item">
          <h4 class="app-title">自己PR</h4>
          <p class="app-desc">自井が提供できるスキル番帯禁aすoスキル、正の素年せ康たどをPRしてください</p>
          <textarea placeholder="お問い合わせ内容" cols="30" rows="9" class="app-input"></textarea>
        </div>
        <div class="app-item">
          <h4 class="app-title">志望理由</h4>
          <p class="app-desc">志望動機や自身が挑戦したいこと、貢献できるスキルなど採用者に伝えたいことを記入してください。</p>
          <textarea placeholder="お問い合わせ内容" cols="30" rows="9" class="app-input"></textarea>
        </div>

        <button class="app-btn btn btn-primary" ><a href="check-app"> 応募内容を確認する</a></button>
      </form>
    </div>

  </div>
@endsection