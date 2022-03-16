@extends('layout.index1')
@section('content')

<section class="special-guild-profile-4-hero">
    <div class="hero-container">
      <h2 class="hero-caption">ギルドマスター候補の皆さまへ</h2>

      <p class="hero-desc">クラウドマンディング「Join:us」では企業や団体、または個人が特定の目的でギルドを設置できます。<br>
        趣旨に即したクエストを独自に立てる。または集めることで<br>
        共感した仲間（ファン）の母集団を形成することができます。</p>
      <p class="hero-desc">
        ちょっとしたアイディアで継続的なコミュニケーションを取ることができる<br>
        「Join:us」は新しいマーケティングプラットフォームです！</p>

    </div>
  </section>
  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-mb-60">
        <li class="breadcrumb-item"><a href="#">ホーム</a></li>
        <li class="breadcrumb-item active" aria-current="page">カテゴリー</li>
      </ol>
    </nav>

    <div class="special-guild-profile-4-block">
      <div class="item start-item">
        <h3 class="title">Guild立ち上げ方法</h3>
        <div class="item-content">
          <p>商用利用、公共利用、個人利用問わず、すべてのギルドは申請制となります。</p>
          <ul>
            <li>１．公序良俗に反する趣旨、または反社会勢力</li>
            <li>２．当社が今後のギルド立ち上げを計画している一部のカテゴリー</li>
            <li>３．ギルドマスターの身元確認が立証できない</li>
            <li>４．当サイトの趣旨に反すると判断されるもの</li>
          </ul>
          <p>上記を除き、<span>利用規約</span> に同意いただくことで自由に立ち上げることが可能です。</p>
        </div>
        <button class="btn btn-primary app-btn">
          <div>
            ギルド設立申し込みへ<span>（ログイン後に申請できます）</span>

          </div>
        </button>
      </div>
      <div class="item operating-fee">
        <h3 class="title">Guild運営手数料</h3>
        <div class="item-content">
          <p>今後の有料化を検討していますが、現在のところ当社が求める対価として「情報拡散」を依頼しております。<br>
            皆さまのちょっとした情報拡散に対する「労力」と「ギルド利用料」を等価交換願います。<br>
            公式SNSアカウントで下記ハッシュタグを付け情報発信を行うことで当面「無料」でご利用いただけます。<br>
            ※またはプレスリリース等での発表をお願いいたします。
          </p>

          <button class="button btn btn-outline exchange-btn">等価交換の方法</button>

          <div class="label"># Join:us &nbsp #ジョイナス &nbsp　#クラウドマンディング &nbsp　#クラマンやってみる &nbsp　#クラマンギルド設立
            &nbsp　#ギルド設立申請中
          </div>

          <p>など、ハッシュタグと本ギルド本部から発行されるクエストURLを個人・企業アカウントで情報発信してください。</p>
        </div>

        <div class="card-list">
          <div class="price-card">
            <div class="heading">ライト</div>
            <div class="card-content">
              <div class="price-per"><span>3.6 万円</span>/<small>月</small></div>
              <span class="text">ら発行され</span>
              <div class="number">60 ID</div>
            </div>

            <span class="ribbon"></span>
          </div>
          <div class="price-card active">
            <div class="heading">ベーシック</div>
            <div class="card-content">

              <div class="price-per"><span>6万円</span>/<small>月</small></div>
              <span class="text">ら発行され</span>
              <div class="number">100 ID</div>
            </div>

            <span class="ribbon"></span>
          </div>
          <div class="price-card">
            <div class="heading">ビジネス</div>
            <div class="card-content">
              <div class="price-per"><span>12 万円</span>/<small>月</small></div>
              <span class="text">ら発行され</span>
              <div class="number">60 ID</div>
            </div>

            <span class="ribbon"></span>
          </div>
          <div class="price-card">
            <div class="heading">エンタープライズ</div>
            <div class="card-content">
              <div class="price-per text-small">500ID以L上をご希間の方は</div>
              <span class="text">ら発行され</span>
              <div class="number">60 ID</div>
            </div>

            <span class="ribbon"></span>
          </div>
        </div>

      </div>
      <div class="item id-employee">
        <h3 class="title">IDには従業員も含む</h3>

        <h4 class="heading"><span>期費用、オプション</span></h4>

        <div class="id-employee-content">
          <div class="id-card">
            <h5 class="title">本ギ</h5>
            <div class="content">
              <span class="price">10万円</span>
              <p>ら発行されら発行されら発行されら発行され</p>
              <p>ら発行されら発行され</p>
              <p class="text-red">ら発行ら発行されされら発行され</p>
            </div>
          </div>
          <div class="id-card">
            <h5 class="title">本ギ</h5>
            <div class="content">
              <span class="price">10万円</span>
              <p>ら発行されら発行されら発行されら発行され</p>
              <p>ら発行されら発行され</p>
              <p class="text-red">ら発行ら発行されされら発行され</p>
            </div>
          </div>
        </div>
        <button class="btn btn-primary app-btn">
          <div>
            ギルド設立申し込みへ<span>（ログイン後に申請できます）</span>

          </div>
        </button>
      </div>
    </div>

  </div>
@endsection