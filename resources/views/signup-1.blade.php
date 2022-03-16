@extends('layout.index1')
@section('content')
<section class="signup-block">
    <div class="signup-container">
      <h2 class="title signup-title">個人登録</h2>
      <p class="desc signup-desc">サインアップして、好奇心と経験を結び付けましょう</p>
      <form class="signup-form">
        <div class="signup-category">
          <div class="form-title">お名前 <span class="signup-require">必須</span></div>
          <div class="input-group">
            <input type="text" class="input signup-input signup-name-input" placeholder="例えば：ABC">
            <input type="text" class="input signup-input signup-name-input" placeholder="例えば：">
          </div>
        </div>

        <div class="signup-category">
          <div class="form-title">性別 <span class="signup-require">必須</span></div>

          <label class="checkbox-input">
            <input checked type="radio" name="sex" id="male">
            <span class="text">男性</span>
            <span class="checkmark"></span>
          </label>
          <label class="checkbox-input">
            <input type="radio" name="sex" id="female">
            <span class="text">女性</span>
            <span class="checkmark"></span>
          </label>
        </div>

        <div class="signup-category">
          <div class="form-title">生年月日 <span class="signup-require">必須</span></div>
          <div class="signup-dropdown-group">
            <div class="dropdown signup-dropdown">
              <button class="btn btn-secondary dropdown-toggle signup-dropdown-btn" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                年

                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                    fill="white" />
                  <path d="M15 7.5L10 12.5L5 7.5" stroke="#585F5B" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>

              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another</a></li>
                <li><a class="dropdown-item" href="#">Another</a></li>
              </ul>
            </div>
            <div class="dropdown signup-dropdown">
              <button class="btn btn-secondary dropdown-toggle signup-dropdown-btn" type="button"
                id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                月

                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                    fill="white" />
                  <path d="M15 7.5L10 12.5L5 7.5" stroke="#585F5B" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>

              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another</a></li>
                <li><a class="dropdown-item" href="#">Another</a></li>
              </ul>
            </div>
            <div class="dropdown signup-dropdown">
              <button class="btn btn-secondary dropdown-toggle signup-dropdown-btn" type="button"
                id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                日

                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                    fill="white" />
                  <path d="M15 7.5L10 12.5L5 7.5" stroke="#585F5B" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>

              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another</a></li>
                <li><a class="dropdown-item" href="#">Another</a></li>
              </ul>
            </div>

          </div>

        </div>

        <div class="signup-category">
          <div class="form-title">出身地 <span class="signup-require">必須</span></div>
          <input type="text" class="input signup-input signup-name-input" placeholder="例えば：ABC">
        </div>

        <div class="signup-category">
          <div class="form-title">メールアドレス <span class="signup-require">必須</span> <span class="note">※
              出身地の企業へお勧めされます。</span></div>
          <input type="text" class="input signup-input signup-name-input" placeholder="例えば：ABC">
        </div>

        <div class="signup-category">
          <div class="form-title">携帯連絡先 <span class="note">※ あなたが応募した際に、地方企業へ公開され連絡がスムーズになります。</span></div>
          <input type="text" class="input signup-input signup-name-input" placeholder="例えば：ABC">
        </div>

        <div class="signup-category">
          <div class="form-title">パスワード <span class="signup-require">必須</span></div>
          <input type="text" class="input signup-input signup-name-input" placeholder="例えば：ABC">
        </div>

        <div class="action signup-action">
          <button class="btn btn-primary signup-btn"><a href="signup"> 確認する</a></button>
          <p>すでにアカウントをお持ちの方はこちら <a href="login">ログイン</a></p>
        </div>
      </form>
    </div>
  </section>
  @endsection