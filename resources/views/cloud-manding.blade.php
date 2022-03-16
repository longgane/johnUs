@extends('layout.index1')
@section('content')
<div class="operating-company-hero usage-charge-hero cloud-manding-hero">
    <div class="hero-container">
      <h2>クラウドマンディングとは？</h2>
      <h3>crowd<span>man</span>ding</h3>
      <p>
        クラウドファンディングはご存知ですよね？<br>
        商品やサービス、企画などを実現するために不特定多数から「お金」を集める仕組みです。
      </p>

      <p>
        クラウドマンディング（crowd‐manding）とは、同じく多数の人たち（crowd）から、「人」そのものを調達（manding）を組み合わせた造語です。（……mandingも造語ですね。。）<br>
        自分の趣味や事業、地域の催し、何らかの助っ人を必要とするとき、お願いしたいコトを依頼し、<br>
        知恵や労働力、あるいは仲間を募るしくみです。
      </p>

      <p>報酬は、依頼する「クエスト」に見合ったナニか。特産品や、ご飯、BBQでのもてなしや観光案内、あるいは技術指導など、求める労力に見合った等価報酬が設定されています。</p>

      <p>
        世の中「お金」よりも「かけがえのない経験」を大切にする人がきっといるはず。<br>
        あなたが無理なく提供できる「ナニか」で手伝ってくれる人が見つかることをスタッフ一同お祈りしております。
      </p>

    </div>

  </div>
  <div class="container">
    <div class="cloud-manding-block">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">ホーム</a></li>
          <li class="breadcrumb-item active" aria-current="page">クラウドマンディングとは？</li>
        </ol>
      </nav>

      <div class="cloud-manding-main">
        <div class="cloud-manding-box">
          <div class="cloud-manding-content card-group">
            <div class="cloud-manding-card">
              <div class="heading">人生という冒険を楽しもう！<br>
                ー豊かな人生をお探しの皆さまー</div>
              <div class="content">
                <p>
                  あなたは「100年人生」という長い旅をする冒険者です。<br>
                  気が付けばスマホに依存し、最近「ワクワク」「ドキドキ」といった、「リアルな体験」から遠ざかっていませんか？
                </p>

                <p>
                  ・実は○○に興味があるけど敷居が高い…<br>
                  ・こんなスキルを身に着けたい！だけど教室に通うのは…<br>
                  ・家と会社の往復の毎日で刺激がない…
                </p>

                <p>人生を豊かにする経験をしたいけど、具体的にナニかしたいわけでもない……。そんな人は「クエスト」に参加しましょう！</p>

                <p>世の中にはちょっとした「お困りごと」や「誰かの力を借りたい！」が溢れかえっています。</p>

                <p>自分の手伝えるクエストを探して依頼を達成することで、あなたの人生はきっと豊かになるはずです。</p>
              </div>
            </div>
            <div class="cloud-manding-card">

              <div class="heading">きっと誰かが手伝ってくれる！<br>
                ー冒険仲間をお探しの皆さまー</div>
              <div class="content">
                <p>
                  誰かに何かを手伝ってほしい。そんなことってありませんか？<br>
                  例えば「薬草を採集してほしい」とか「村周辺に出るモンスターを退治してくれ」なんていう……のは冗談として、
                </p>

                <p>
                  ・実は○○に興味があるけど敷居が高い…<br>
                  ・こんなスキルを身に着けたい！だけど教室に通うのは…<br>
                  ・家と会社の往復の毎日で刺激がない…
                </p>
                <p>
                  そんなときには「クエスト」で仲間を募集してみましょう！<br>
                  クエストの依頼報酬は、あなたが設定できます。<br>
                  あなたはどんな価値を報酬として提示しますか？
                </p>

                <p>
                  手料理のおもてなしでも良し。飲み代＋民泊でもよし。<br>
                  はたまた「換わりに○○やります！」でも良し！
                </p>

                <p>高額な報酬を払わずとも、きっとあなたの依頼を助けてくれる冒険者がみつかるはず！</p>

              </div>
            </div>
          </div>
          <button class="btn btn-primary app-btn">ようこそ！Join:usに登録しよう！（無料）</button>
        </div>
        <div class="cloud-manding-box">
          <h3 class="cloud-manding-title">現在、仲間を募集中のクエスト</h3>

          <div class="cloud-manding-content quest-list">
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
          <button class="btn btn-primary app-btn use-btn">ご利用方法と料金について</button>
        </div>

      </div>
    </div>

  </div>
@endsection