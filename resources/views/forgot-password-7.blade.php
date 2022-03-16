@extends('layout.index1')
@section('content')
<section class="forgot-password-7-block">
    <div class="forgot-password-container">
      <h2 class="title forgot-password-title">パスワードリセット</h2>
      <p class="desc forgot-password-desc">パスワードのリセットが成功しました。<br>
        ログインしてエクスペリエンスを続行してください</p>
      <div class="success-icon">
        <svg viewBox="0 0 121 106" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M55.321 79L37 52.5204C40.4568 52.5204 55.321 69.2443 55.321 66.1086C55.321 63.0762 101.224 8.56453 119.256 2.45244C119.885 2.19288 120.468 2.03926 121 2C120.453 2.09191 119.87 2.24404 119.256 2.45244C106.483 7.72101 74.5388 56.6415 55.321 79Z"
            fill="#3EBC30" />
          <path
            d="M102 53C102 64.0114 98.2911 74.7018 91.4714 83.3472C84.6517 91.9925 75.1189 98.0889 64.4102 100.653C53.7015 103.217 42.4413 102.1 32.4456 97.4805C22.4498 92.8615 14.3012 85.0103 9.31398 75.193C4.32671 65.3758 2.7915 54.1649 4.95594 43.3684C7.12037 32.5718 12.8583 22.819 21.2443 15.6828C29.6303 8.54659 40.1755 4.443 51.1792 4.03384C62.183 3.62468 73.0039 6.93379 81.8967 13.4275"
            stroke="#3273B9" stroke-width="7" />
        </svg>

      </div>
      <div class="action forgot-password-action">
        <button class="btn btn-primary forgot-password-btn"><a href="login"> ログイン</a></button>
      </div>
    </div>
  </section>
@endsection
