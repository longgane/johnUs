@extends('layout.index2')
@section('content')
<div class="container">
    <div class="create-quest-page applicant-detail-page">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-logged">ホーム</a></li>
          <li class="breadcrumb-item active" aria-current="page">応募者詳細</li>
        </ol>
      </nav>

      <div class="create-quest-main applicant-detail-main">
        <h2 class="big-title">応募者詳細</h2>

        <div class="nav-tab">
          <div class="nav-item ">
            <a href="edit-quest" class="nav-link">掲載情報</a>
          </div>
          <div class="nav-item active">
            <a href="#!" class="nav-link">応募者</a>
          </div>
        </div>

        <div class="tab-content">
          <div class="category">
            <div class="heading">
              <h3 class="title">吉田 優子 </h3>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  --Placeholder--

                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="white"/>
                    <path d="M15 7.5L10 12.5L5 7.5" stroke="#151515" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="6" cy="6" r="6" fill="#00F444"/>
                      </svg>
                      
                    選考中</a></li>
                  <li><a class="dropdown-item" href="#">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="6" cy="6" r="6" fill="#FBC029"/>
                      </svg>
                      
                    依頼済</a></li>
                  <li><a class="dropdown-item" href="#">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="6" cy="6" r="6" fill="#E80B0B"/>
                      </svg>
                      
                    お断り</a></li>
                </ul>
              </div>
            </div>

            <div class="content">
              <div class="general-info">
                <div class="avatar">
                  <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                </div>

                <div class="general-info-content">
                  <div class="item">
                    <div class="item-title">吉田 優子</div>
                    <div class="item-content"><span class="label">身元確認済</span>  </div>
                  </div>
                  <div class="item">
                    <div class="item-title">ニックネーム</div>
                    <div class="item-content">ゆうこ  </div>
                  </div>
                  <div class="item">
                    <div class="item-title">最終ログイン日時</div>
                    <div class="item-content">2021/10/14 23:43</div>
                  </div>
                </div>
              </div>

              <button class="btn btn-outline send-btn">情報を送る</button>
            </div>
          </div>

          <div class="category">
            <h3 class="title">基本情報</h3>

            <div class="info-table">
              <div class="info-category">
                <div class="info-title">メールアドレス</div>
                <div class="info-content">yuko@gmail.com</div>
              </div>
              <div class="info-category">
                <div class="info-title">電話番号</div>
                <div class="info-content">090-1111-2222</div>
              </div>
              <div class="info-category">
                <div class="info-title">性別</div>
                <div class="info-content">女</div>
              </div>
              <div class="info-category">
                <div class="info-title">生年月日</div>
                <div class="info-content">1978年2月11日（42歳）</div>
              </div>
              <div class="info-category">
                <div class="info-title">職業</div>
                <div class="info-content">会社員（事務職）</div>
              </div>
              <div class="info-category">
                <div class="info-title">興味タグ</div>
                <div class="info-content">
                  <span>ビジネス</span>
                  <span>釣り</span>
                  <span>福岡</span>
                </div>
              </div>
              <div class="info-category">
                <div class="info-title">ひとことメッセージ</div>
                <div class="info-content">がんばります！</div>
              </div>
  
            </div>
          </div>

          <div class="category">
            <h3 class="title">登録ギルド一覧</h3>

            
          <div class="guild-list">
            <div class="guild-item">
              <div class="guild-about">
                <div class="guild-logo">
                  <img srcset="/joinus/img/guild-logo-1.png 2x" alt="">
                </div>
                <div class="guild-text">
                  <span>Guild</span>
                  <h5 class="guild-name">SUNTORY</h5>
                </div>
              </div>
            </div>
            <div class="guild-item">
              <div class="guild-about">
                <div class="guild-logo">
                  <img srcset="/joinus/img/guild-logo-2.png 2x" alt="">
                </div>
                <div class="guild-text">
                  <span>Guild</span>
                  <h5 class="guild-name">YATSUSHIRO​ </h5>
                </div>
              </div>
            </div>
            <div class="guild-item">
              <div class="guild-about">
                <div class="guild-logo">
                  <img srcset="/joinus/img/guild-logo-3.png 2x" alt="">
                </div>
                <div class="guild-text">
                  <span>Guild</span>
                  <h5 class="guild-name">南砺市​</h5>
                </div>
              </div>
            </div>
            <div class="guild-item">
              <div class="guild-about">
                <div class="guild-logo">
                  <img srcset="/joinus/img/guild-logo-4.png 2x" alt="">
                </div>
                <div class="guild-text">
                  <span>Guild</span>
                  <h5 class="guild-name">武蔵野市​</h5>
                </div>
              </div>
            </div>
          </div>
          </div>

          <div class="category">
            <h3 class="title">参加クエスト</h3>

            <table class="quest-table">
              <tr>
                <th>応募ステータス</th>
                <th>応募日</th>
                <th>クエスト名</th>
                <th>ギルド名</th>
                <th>感謝ポイント</th>
              </tr>

              <tr>
                <td class="status-col"><span>選考中</span></td>
                <td class="date-col">2021/11/20</td>
                <td class="quest-col">記事コンテンツへの掲載記事作成</td>
                <td class="guild-col">伊万里市</td>
                <td class="point-col">-</td>
              </tr>
              <tr>
                <td class="status-col"><span>選考中</span></td>
                <td class="date-col">2021/11/20</td>
                <td class="quest-col">コトバのサプリ(サイト)記事の原稿作成</td>
                <td class="guild-col">伊万里市</td>
                <td class="point-col">-</td>
              </tr>
              <tr>
                <td class="status-col"><span class="status-red">採用</span></td>
                <td class="date-col">2021/11/20</td>
                <td class="quest-col">コトバのサプリ(サイト)記事の原稿作成</td>
                <td class="guild-col">伊万里市</td>
                <td class="point-col">7</td>
              </tr>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
  @endsection