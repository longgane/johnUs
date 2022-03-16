@extends('layout.index1')
@section('content')
<section class="guild-hero-block special-guild-profile-hero">
    <div class="hero-container">
      <h2 class="hero-caption">伊万里市特集</h2>
      <div class="hero-city">
        <div class="hero-city-item">
          <div class="hero-logo">
            <img srcset="/joinus/img/hero-city.png 2x" alt="">
          </div>
          伊万里市​
        </div>

        <span>x</span>

        <div class="hero-city-item">
          <div class="hero-logo">
            <img srcset="/joinus/img/hero-city.png 2x" alt="">
          </div>
          伊万里市​
        </div>

      </div>

    </div>
  </section>
  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">ホーム</a></li>
        <li class="breadcrumb-item">スペシャルギルド一覧</li>
        <li class="breadcrumb-item active" aria-current="page">伊万里市特集</li>
      </ol>
    </nav>

    <div class="special-guild-profile-block">

      <div class="page-block">
        <div class="page-main">
          <div class="profile-item basic-info-item">
            <h3 class=" profile-title">基本情報</h3>
            <div class="profile-content info-table">
              <div class="info-category">
                <div class="info-title">ギルド名</div>
                <div class="info-content">サイトに表示するギルド名を入力</div>
              </div>
              <div class="info-category">
                <div class="info-title">住所</div>
                <div class="info-content">
                  <p>サイトに表示する住所や場所を入力</p>
                  <p>サイトに表示するURLを入力</p>
                </div>
              </div>
              <div class="info-category">
                <div class="info-title">URL</div>
                <div class="info-content">サイトに表示するギルド名を入力</div>
              </div>
              <div class="info-category">
                <div class="info-title">受付担当</div>
                <div class="info-content">サイトに表示するギルド名を入力</div>
              </div>
              <div class="info-category">
                <div class="info-title">連絡先</div>
                <div class="info-content">メールアドレスや電話番号を入力</div>
              </div>
              <div class="info-category">
                <div class="info-title">連絡可能時間</div>
                <div class="info-content">例）平日10-17時</div>
              </div>
              <div class="info-category">
                <div class="info-title">ギルド勲章</div>
                <div class="info-content">熱い思いをギルド勲章として入力！200文字程度をおすすめします</div>
              </div>
              <div class="info-category upload">
                <div class="info-title">ロゴ</div>
                <div class="info-content">
                  <button class="btn btn-outline upload-btn">アップロード</button>
                  <span>推奨：150 × 150 px</span>
                </div>
              </div>
            </div>
          </div>

          <div class="profile-item">
            <h3 class="profile-title">進行中のクエスト</h3>
            <p class="profile-desc">伊万里市では～～<br>
              などの事業説明および、注意書きテキストエリア</p>
            <div class="profile-content quest">
              <div class="quest-card">
                <div class="card-img">
                  <img srcset="/joinus/img/card-img.jpg 2x" alt="">
                  <span class="card-join-label">Join! <strong>12名</strong></span>
                </div>
                <div class="card-main">
                  <h4 class="card-title">ウィンタースポーツ好きに依頼！<br>
                    雪かき手伝ってください！</h4>
                  <div class="card-content">
                    <div class="card-content-left">
                      <div class="item">
                        <span class="btn btn-outline">場所</span>
                        <p>富山県南砺市​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">日時</span>
                        <p>7月〜9月​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">報酬</span>
                        <p>農泊2食付きでおもてなし！​</p>
                      </div>
                    </div>
                    <div class="card-content-right">
                      <h5>参加者の数:</h5>
                      <span>12<small>名</small></span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="quest-card">
                <div class="card-img">
                  <img srcset="/joinus/img/card-img.jpg 2x" alt="">
                  <span class="card-join-label">Join! <strong>12名</strong></span>
                </div>
                <div class="card-main">
                  <h4 class="card-title">ウィンタースポーツ好きに依頼！<br>
                    雪かき手伝ってください！</h4>
                  <div class="card-content">
                    <div class="card-content-left">
                      <div class="item">
                        <span class="btn btn-outline">場所</span>
                        <p>富山県南砺市​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">日時</span>
                        <p>7月〜9月​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">報酬</span>
                        <p>農泊2食付きでおもてなし！​</p>
                      </div>
                    </div>
                    <div class="card-content-right">
                      <h5>参加者の数:</h5>
                      <span>12<small>名</small></span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="quest-card">
                <div class="card-img">
                  <img srcset="/joinus/img/card-img.jpg 2x" alt="">
                  <span class="card-join-label">Join! <strong>12名</strong></span>
                </div>
                <div class="card-main">
                  <h4 class="card-title">ウィンタースポーツ好きに依頼！<br>
                    雪かき手伝ってください！</h4>
                  <div class="card-content">
                    <div class="card-content-left">
                      <div class="item">
                        <span class="btn btn-outline">場所</span>
                        <p>富山県南砺市​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">日時</span>
                        <p>7月〜9月​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">報酬</span>
                        <p>農泊2食付きでおもてなし！​</p>
                      </div>
                    </div>
                    <div class="card-content-right">
                      <h5>参加者の数:</h5>
                      <span>12<small>名</small></span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="quest-card">
                <div class="card-img">
                  <img srcset="/joinus/img/card-img.jpg 2x" alt="">
                  <span class="card-join-label">Join! <strong>12名</strong></span>
                </div>
                <div class="card-main">
                  <h4 class="card-title">ウィンタースポーツ好きに依頼！<br>
                    雪かき手伝ってください！</h4>
                  <div class="card-content">
                    <div class="card-content-left">
                      <div class="item">
                        <span class="btn btn-outline">場所</span>
                        <p>富山県南砺市​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">日時</span>
                        <p>7月〜9月​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">報酬</span>
                        <p>農泊2食付きでおもてなし！​</p>
                      </div>
                    </div>
                    <div class="card-content-right">
                      <h5>参加者の数:</h5>
                      <span>12<small>名</small></span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="quest-card">
                <div class="card-img">
                  <img srcset="/joinus/img/card-img.jpg 2x" alt="">
                  <span class="card-join-label">Join! <strong>12名</strong></span>
                </div>
                <div class="card-main">
                  <h4 class="card-title">ウィンタースポーツ好きに依頼！<br>
                    雪かき手伝ってください！</h4>
                  <div class="card-content">
                    <div class="card-content-left">
                      <div class="item">
                        <span class="btn btn-outline">場所</span>
                        <p>富山県南砺市​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">日時</span>
                        <p>7月〜9月​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">報酬</span>
                        <p>農泊2食付きでおもてなし！​</p>
                      </div>
                    </div>
                    <div class="card-content-right">
                      <h5>参加者の数:</h5>
                      <span>12<small>名</small></span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="quest-card">
                <div class="card-img">
                  <img srcset="/joinus/img/card-img.jpg 2x" alt="">
                  <span class="card-join-label">Join! <strong>12名</strong></span>
                </div>
                <div class="card-main">
                  <h4 class="card-title">ウィンタースポーツ好きに依頼！<br>
                    雪かき手伝ってください！</h4>
                  <div class="card-content">
                    <div class="card-content-left">
                      <div class="item">
                        <span class="btn btn-outline">場所</span>
                        <p>富山県南砺市​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">日時</span>
                        <p>7月〜9月​</p>
                      </div>
                      <div class="item">
                        <span class="btn btn-outline">報酬</span>
                        <p>農泊2食付きでおもてなし！​</p>
                      </div>
                    </div>
                    <div class="card-content-right">
                      <h5>参加者の数:</h5>
                      <span>12<small>名</small></span>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <nav class="guild-pagination" aria-label="...">
            <ul class="pagination">

              <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
              <li class="page-item">
                <a class=" page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.66699 2.91406V11.0807L11.0837 6.9974L4.66699 2.91406Z" fill="#111112" />
                  </svg>
                </a>
              </li>
            </ul>
          </nav>
        </div>


        <div class="page-extra">
          <div class="item-extra notice">
            <div class="item-extra-title">Join:usからのお知らせ</div>
            <div class="item-extra-content">
              <ul>
                <li>・富山県・南砺市ギルドが開設</li>
                <li>・新コンテンツ増設</li>
                <li>・佐賀県・伊万里市と連携協 定を締結</li>
                <li>・利用規約改定</li>
              </ul>
            </div>
          </div>

          <div class="item-extra search-region">
            <div class="item-extra-title">地域で探す</div>
            <div class="item-extra-content">
              <div class="dropdown search-dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  都道府県

                  <div class="down-icon">

                    <svg class="down-icon-dt" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                        fill="white" />
                      <path d="M15 7.5L10 12.5L5 7.5" stroke="#585F5B" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>

                    <svg class="down-icon-mb" width="18" height="18" viewBox="0 0 18 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.75 6L14.25 6L9 14.25L3.75 6Z" fill="white" />
                    </svg>
                  </div>

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>

              <div class="search-img">
                <img srcset="img/search-region.png 2x" alt="">
              </div>
            </div>
          </div>

          <div class="item-extra tag">
            <div class="item-extra-title">注目タグ</div>
            <div class="item-extra-content">
              <span class="tag-item">#SDGs</span>
              <span class="tag-item">#テレワーク</span>
              <span class="tag-item">#おうち時間</span>
              <span class="tag-item">#テレワーク</span>
              <span class="tag-item">#クールビズ</span>
              <span class="tag-item">#お盆</span>
              <span class="tag-item">#おうち時間</span>
            </div>
          </div>

          <div class="item-extra search-guild">
            <div class="item-extra-title">ギルドカテゴリーで探す</div>
            <div class="item-extra-content">
              <div class="search-input">
                <input type="text" placeholder="検索">

                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                    fill="white" />
                  <path
                    d="M7.94286 2C9.519 2 11.0306 2.62612 12.1451 3.74062C13.2596 4.85512 13.8857 6.36671 13.8857 7.94286C13.8857 9.41486 13.3463 10.768 12.4594 11.8103L12.7063 12.0571H13.4286L18 16.6286L16.6286 18L12.0571 13.4286V12.7063L11.8103 12.4594C10.7319 13.3799 9.36065 13.8856 7.94286 13.8857C6.36671 13.8857 4.85512 13.2596 3.74062 12.1451C2.62612 11.0306 2 9.519 2 7.94286C2 6.36671 2.62612 4.85512 3.74062 3.74062C4.85512 2.62612 6.36671 2 7.94286 2ZM7.94286 3.82857C5.65714 3.82857 3.82857 5.65714 3.82857 7.94286C3.82857 10.2286 5.65714 12.0571 7.94286 12.0571C10.2286 12.0571 12.0571 10.2286 12.0571 7.94286C12.0571 5.65714 10.2286 3.82857 7.94286 3.82857Z"
                    fill="#151515" />
                </svg>
              </div>

              <ul>
                <li>アキギルド</li>
                <li>アキギルド</li>
                <li>アキギルド</li>
                <li>アキギルド</li>
              </ul>

            </div>
          </div>

          <div class="item-extra new-quest">
            <div class="item-extra-title">新着クエスト
            </div>
            <div class="item-extra-content">
              <div class="quest-item">
                <div class="quest-img">
                  <img srcset="/joinus/img/new-quest.jpg 2x" alt="">
                </div>
                <div class="quest-text">ウィンタースポーツ好きに依頼！雪かき手伝ってください！
                </div>
              </div>
              <div class="quest-item">
                <div class="quest-img">
                  <img srcset="/joinus/img/new-quest.jpg 2x" alt="">
                </div>
                <div class="quest-text">ウィンタースポーツ好きに依頼！雪かき手伝ってください！
                </div>
              </div>
              <div class="quest-item">
                <div class="quest-img">
                  <img srcset="/joinus/img/new-quest.jpg 2x" alt="">
                </div>
                <div class="quest-text">ウィンタースポーツ好きに依頼！雪かき手伝ってください！
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection