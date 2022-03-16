@extends('layout.index1')
@section('content')
<section class="news-hero-block">
    <div class="hero-container">
      <h2 class="hero-caption">Join:usのNEWS一覧</h2>
    </div>
  </section>
  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">ホーム</a></li>
        <li class="breadcrumb-item"><a href="#">のNEWS一覧</a></li>
        <li class="breadcrumb-item active ellipsis" aria-current="page">ウィンタースポーツ好きに依頼！雪かき手伝ってください！</li>
      </ol>
    </nav>

    <div class="news-detail-block">
      <div class="news-detail-heading">
        <h2 class="news-detail-caption">ウィンタースポーツ好きに依頼！<br>
          雪かき手伝ってください！</h2>
        <div class="news-detail-lead">
          <p>リード文章リード文章リード文章<br>
            リード文章<br>
            リード文章リード文章<br>
            リード文章リード文
          </p>
        </div>
        <div class="date news-detail-date">
          <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M13.333 1.9974H12.6663V1.33073C12.6663 0.964062 12.3663 0.664062 11.9997 0.664062C11.633 0.664062 11.333 0.964062 11.333 1.33073V1.9974H4.66634V1.33073C4.66634 0.964062 4.36634 0.664062 3.99967 0.664062C3.63301 0.664062 3.33301 0.964062 3.33301 1.33073V1.9974H2.66634C1.93301 1.9974 1.33301 2.5974 1.33301 3.33073V13.9974C1.33301 14.7307 1.93301 15.3307 2.66634 15.3307H13.333C14.0663 15.3307 14.6663 14.7307 14.6663 13.9974V3.33073C14.6663 2.5974 14.0663 1.9974 13.333 1.9974ZM12.6663 13.9974H3.33301C2.96634 13.9974 2.66634 13.6974 2.66634 13.3307V5.33073H13.333V13.3307C13.333 13.6974 13.033 13.9974 12.6663 13.9974Z"
              fill="#7D7F83" />
          </svg>
          2021.10.30
        </div>
      </div>

      <div class="page-block">
        <div class="page-main">
          <div class="news-detail-main">
            <div class="news-detail-img">
              <img srcset="/joinus/img/news-detail-1.jpg 2x" alt="">
            </div>
            <h3 class="news-detail-title">本文見出し①</h3>
            <p class="news-detail-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit viverra
              ultricies ac sit pulvinar id aenean leo. Aenean sed nibh nunc orci in dis. Sapien donec porttitor sit
              pellentesque condimentum ac viverra. Aliquam lectus massa aliquet quis purus. <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit viverra ultricies ac sit pulvinar id
              aenean leo. Aenean sed nibh nunc orci in dis. Sapien donec porttitor sit pellentesque condimentum ac
              viverra. Aliquam lectus massa aliquet quis purus.Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
              Sed velit viverra ultricies ac sit pulvinar id aenean leo. Aenean sed nibh nunc orci in dis. Sapien
              donec
              porttitor sit pellentesque condimentum ac viverra. Aliquam lectus massa aliquet quis purus.Lorem ipsum
              dolor
              sit amet, consectetur adipiscing elit. </p>
            <h3 class="news-detail-title">本文見出し②</h3>
            <p class="news-detail-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit viverra
              ultricies ac sit pulvinar id aenean leo. Aenean sed nibh nunc orci in dis. Sapien donec porttitor sit
              pellentesque condimentum ac viverra. Aliquam lectus massa aliquet quis purus. <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit viverra ultricies ac sit pulvinar id
              aenean leo. Aenean sed nibh nunc orci in dis. Sapien donec porttitor sit pellentesque condimentum ac
              viverra. Aliquam lectus massa aliquet quis purus.Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
              Sed velit viverra ultricies ac sit pulvinar id aenean leo. Aenean sed nibh nunc orci in dis. Sapien
              donec
              porttitor sit pellentesque condimentum ac viverra. Aliquam lectus massa aliquet quis purus.Lorem ipsum
              dolor
              sit amet, consectetur adipiscing elit. </p>
            <div class="news-detail-img">
              <img srcset="/joinus/img/news-detail-2.jpg 2x" alt="">
            </div>
            <h3 class="news-detail-title">本文見出し②</h3>
            <p class="news-detail-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit viverra
              ultricies ac sit pulvinar id aenean leo. Aenean sed nibh nunc orci in dis. Sapien donec porttitor sit
              pellentesque condimentum ac viverra. Aliquam lectus massa aliquet quis purus. <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit viverra ultricies ac sit pulvinar id
              aenean leo. Aenean sed nibh nunc orci in dis. Sapien donec porttitor sit pellentesque condimentum ac
              viverra. Aliquam lectus massa aliquet quis purus.Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
              Sed velit viverra ultricies ac sit pulvinar id aenean leo. Aenean sed nibh nunc orci in dis. Sapien
              donec
              porttitor sit pellentesque condimentum ac viverra. Aliquam lectus massa aliquet quis purus.Lorem ipsum
              dolor
              sit amet, consectetur adipiscing elit. </p>
          </div>
        </div>
        <div class="page-extra">
          <div class="item-extra">
            <div class="item-extra-title">アーカイブ</div>
            <div class="item-extra-content archive-content">
              <div class="archive-item">
                <input type="checkbox" id="archive-1">
                <label for="archive-1">2021年</label>
              </div>
              <div class="archive-item">
                <input type="checkbox" id="archive-2">
                <label for="archive-2">2021年</label>
              </div>
              <div class="archive-item">
                <input type="checkbox" id="archive-3">
                <label for="archive-3">2021年</label>
              </div>
              <div class="archive-item">
                <input type="checkbox" id="archive-4">
                <label for="archive-4">2021年</label>
              </div>
              <div class="archive-item">
                <input type="checkbox" id="archive-5">
                <label for="archive-5">2021年</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection