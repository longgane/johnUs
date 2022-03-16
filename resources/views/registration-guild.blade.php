@extends('layout.index2')
@section('content')
<div class="container">
    <div class="registration-guild-page">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">ホーム</a></li>
          <li class="breadcrumb-item active" aria-current="page">ギルド設立申請</li>
        </ol>
      </nav>

      <div class="registration-guild-main">
        <h2 class="big-title">ギルド設立申請</h2>
        <form action="" class="registration-form">
          <div class="category">
            <h3 class="title">Guild運営本部情報</h3>
            <div class="content">
              <div class="input-item">
                <div class="input-title">ギルド名 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="サイトに表示するギルド名を入力">
              </div>

              <div class="input-item">
                <div class="input-title">住所 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="サイトに表示する住所や場所を入力">
              </div>

              <div class="input-item">
                <div class="input-title">URL</div>
                <input type="text" class="input" placeholder="サイトに表示するURLを入力">
              </div>

              <div class="input-item">
                <div class="input-title">受付担当 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="担当の部署・課や、担当者名を入力">
              </div>

              <div class="input-item">
                <div class="input-title">連絡先 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="メールアドレスや電話番号を入力">
              </div>

              <div class="input-item">
                <div class="input-title">連絡可能時間 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="例）平日10-17時">
              </div>

              <div class="input-item">
                <div class="input-title">ギルド勲章 <span class="require-label">必須</span></div>
                <textarea class="input input-textarea" name="" id="" cols="30" rows="10"
                  placeholder="熱い思いをギルド勲章として入力！200文字程度をおすすめします"></textarea>
              </div>


            </div>
          </div>

          <div class="category">
            <div class="heading">
              <h3 class="title">Guild公開情報</h3>
              <button class="btn btn-outline save-btn">保存する</button>
            </div>
            <div class="content">
              <p>
                ・ギルドURL　https://www.cr-man.com/<br>
                ・ロゴアップロード（ファイル形式とpx指定）<br>
                ・ギルドメインビジュアルアップロード（ファイル形式とpx指定）<br>
                　※ポップアップでここに使われます！的な説明<br>
                ・連絡先の部署名<br>
                ・連絡先の時間や電話番号等<br>
                ・ギルド憲章（ギルドの運営趣旨を記載。最大○○○文字）<br>
              </p>
            </div>

            <button class="btn btn-primary app-btn">表示を確認する</button>
          </div>

          <div class="category">
            <h3 class="title">Guild公開情報</h3>
            <div class="content">
              <div class="input-item">
                <div class="input-title">会社名／団体名 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="正式社名／団体名を入力">
              </div>

              <div class="input-group-3">
                <div class="input-item">
                  <div class="input-title">郵便番号 <span class="require-label">必須</span></div>
                  <div class="input-with-btn">
                    <input type="text" class="input" placeholder="111-2222">
                    <button class="search-btn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M15.5006 14.0006H14.7106L14.4306 13.7306C15.6306 12.3306 16.2506 10.4206 15.9106 8.39063C15.4406 5.61063 13.1206 3.39063 10.3206 3.05063C6.09063 2.53063 2.53063 6.09063 3.05063 10.3206C3.39063 13.1206 5.61063 15.4406 8.39063 15.9106C10.4206 16.2506 12.3306 15.6306 13.7306 14.4306L14.0006 14.7106V15.5006L18.2506 19.7506C18.6606 20.1606 19.3306 20.1606 19.7406 19.7506C20.1506 19.3406 20.1506 18.6706 19.7406 18.2606L15.5006 14.0006ZM9.50063 14.0006C7.01063 14.0006 5.00063 11.9906 5.00063 9.50063C5.00063 7.01063 7.01063 5.00063 9.50063 5.00063C11.9906 5.00063 14.0006 7.01063 14.0006 9.50063C14.0006 11.9906 11.9906 14.0006 9.50063 14.0006Z"
                          fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="dropdown input-item input-dropdown">
                  <div class="input-title">都道府県 <span class="require-label">必須</span></div>

                  <button class="btn btn-secondary dropdown-toggle input" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    都道府県
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M1.63654 5.29279C1.82406 5.10532 2.07837 5 2.34354 5C2.6087 5 2.86301 5.10532 3.05054 5.29279L8.00053 10.2428L12.9505 5.29279C13.1391 5.11063 13.3917 5.00983 13.6539 5.01211C13.9161 5.01439 14.1669 5.11956 14.3523 5.30497C14.5378 5.49038 14.6429 5.74119 14.6452 6.00339C14.6475 6.26558 14.5467 6.51818 14.3645 6.70679L8.70753 12.3638C8.52 12.5513 8.2657 12.6566 8.00053 12.6566C7.73537 12.6566 7.48106 12.5513 7.29353 12.3638L1.63654 6.70679C1.44907 6.51926 1.34375 6.26495 1.34375 5.99979C1.34375 5.73462 1.44907 5.48031 1.63654 5.29279Z"
                        fill="#7D7F83" />
                    </svg>

                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>

                <div class="input-item">
                  <div class="input-title">市区町村 <span class="require-label">必須</span></div>
                  <input type="text" class="input" placeholder="大阪市">
                </div>

              </div>

              <div class="input-item">
                <div class="input-title">番地 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="日の出町１−１−１">
              </div>

              <div class="input-item">
                <div class="input-title">建物名 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="建物名を入力">
              </div>

              <div class="input-item">
                <div class="input-title">電話番号 <span class="require-label">必須</span></div>
                <input type="text" class="input" placeholder="00-0000-0000">
              </div>
            </div>

            <button class="btn btn-primary app-btn add-btn">
              <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.7439 2.01562H11.9853V9.00262H2.93359V15.0026H11.9853V21.9896H19.7439V15.0026H28.7957V9.00262H19.7439V2.01562Z"
                  fill="white" />
              </svg>

              <span>担当者を追加する(メールで招待)</span>
            </button>
          </div>

          <div class="category">
            <div class="content">
              <div class="noti">
                <button class="btn btn-outline">今後の流れ</button>
                <span class="noti-danger">※重要です。必ず確認願います。</span>
              </div>

              <p>
                １．仮承認は１営業日以内に登録アドレスに届きます。24時間以内に指定のURLをクリックして本承認登録をお願いします。<br>
                ２．本承認後、設定いただいた「ギルドURL」と指定の「＃（ハッシュタグ）」をお申込み団体の<br>
                　　公式SNSで発信、またはプレスリリースの掲載をお願いいたします。
              </p>
              <div class="label"># Join:us 　 #ジョイナス 　#クラウドマンディング　#クラマンやってみる　#クラマンギルド設立　#ギルド設立申請中
              </div>
              <p>３．公式アカウントで情報発信を行ったことが証明できるURLや画像を画面右メニューの「メッセージ管理」でご報告ください。</p>
            </div>


            <label class="noti-check input-checkbox" >今後の流れ、および<a href="#!">利用規約</a>に同意して申請する。
              <input type="checkbox" name="" id="">
              <span class="checkmark">
                <svg class="unchecked" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 2V16H2V2H16ZM16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0Z" fill="#111112"/>
                  </svg>
                  

                <svg class="checked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0ZM7.71 13.29C7.61749 13.3827 7.5076 13.4563 7.38662 13.5064C7.26565 13.5566 7.13597 13.5824 7.005 13.5824C6.87403 13.5824 6.74435 13.5566 6.62338 13.5064C6.5024 13.4563 6.39251 13.3827 6.3 13.29L2.71 9.7C2.61742 9.60742 2.54398 9.49751 2.49387 9.37654C2.44377 9.25558 2.41798 9.12593 2.41798 8.995C2.41798 8.86407 2.44377 8.73442 2.49387 8.61346C2.54398 8.49249 2.61742 8.38258 2.71 8.29C2.80258 8.19742 2.91249 8.12398 3.03346 8.07387C3.15442 8.02377 3.28407 7.99798 3.415 7.99798C3.54593 7.99798 3.67558 8.02377 3.79654 8.07387C3.91751 8.12398 4.02742 8.19742 4.12 8.29L7 11.17L13.88 4.29C14.067 4.10302 14.3206 3.99798 14.585 3.99798C14.8494 3.99798 15.103 4.10302 15.29 4.29C15.477 4.47698 15.582 4.73057 15.582 4.995C15.582 5.25943 15.477 5.51302 15.29 5.7L7.71 13.29Z"
                    fill="#5488AD" />
                </svg>

              </span>
            </label>

            <button class="btn btn-primary app-btn">上記情報でギルド設立申請を申し込み</button>
          </div>

        </form>

      </div>

    </div>
  </div>
@endsection