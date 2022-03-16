@extends('layout.index2')
@section('content')
<div class="message-hero">
    <div class="hero-container">
      <h2>困ったとき</h2>

      <form class="form-search">
        <input type="text" placeholder="ページ内キーワード検索" class="search-input">
        <button class="btn btn-primary search-btn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M15.5006 14.0006H14.7106L14.4306 13.7306C15.6306 12.3306 16.2506 10.4206 15.9106 8.39063C15.4406 5.61063 13.1206 3.39063 10.3206 3.05063C6.09063 2.53063 2.53063 6.09063 3.05063 10.3206C3.39063 13.1206 5.61063 15.4406 8.39063 15.9106C10.4206 16.2506 12.3306 15.6306 13.7306 14.4306L14.0006 14.7106V15.5006L18.2506 19.7506C18.6606 20.1606 19.3306 20.1606 19.7406 19.7506C20.1506 19.3406 20.1506 18.6706 19.7406 18.2606L15.5006 14.0006ZM9.50063 14.0006C7.01063 14.0006 5.00063 11.9906 5.00063 9.50063C5.00063 7.01063 7.01063 5.00063 9.50063 5.00063C11.9906 5.00063 14.0006 7.01063 14.0006 9.50063C14.0006 11.9906 11.9906 14.0006 9.50063 14.0006Z"
              fill="white" />
          </svg>
          検索
        </button>
      </form>


    </div>

  </div>

  <div class="container">
    <div class="message-block">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">ホーム</a></li>
          <li class="breadcrumb-item active" aria-current="page">困ったとき</li>
        </ol>
      </nav>

      <div class="message-main">
        <div class="message-item">
          <div class="heading">クエストとは何ですか？
            <div class="label">一般</div>
          </div>
          <div class="content">
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキ
          </div>
        </div>
        <div class="message-item">
          <div class="heading">クエストとは何ですか？
            <div class="label">一般</div>
          </div>
          <div class="content">
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキ
          </div>
        </div>
        <div class="message-item">
          <div class="heading">クエストを依頼する方法を教えてください。
            <div class="label label-yellow">依頼主</div>
          </div>
          <div class="content">
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキ
          </div>
        </div>
        <div class="message-item">
          <div class="heading">クエストとは何ですか？
            <div class="label label-green">一般</div>
          </div>
          <div class="content">
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキスト
            テキストテキストテキストテキ
          </div>
        </div>

      </div>
    </div>

  </div>
@endsection