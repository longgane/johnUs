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
        <li class="breadcrumb-item active" aria-current="page">Join:usのNEWS一覧</li>
      </ol>
    </nav>

    <section class="news-list-block">
      <div class="page-block">
        <div class="page-main scroll-bar-visible">
          <div class="news-list-main">
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title"  onclick="location.href='news-detail'" >新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title" onclick="location.href='news-detail'">新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>
            <div class="news-item">
              <div class="news-item-img">
                <img srcset="/joinus/img/news-img.jpg 2x" alt="">
              </div>

              <div class="news-item-content">

                <div class="news-date date">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3333 2.00033H12.6666V1.33366C12.6666 0.966992 12.3666 0.666992 11.9999 0.666992C11.6333 0.666992 11.3333 0.966992 11.3333 1.33366V2.00033H4.66659V1.33366C4.66659 0.966992 4.36659 0.666992 3.99992 0.666992C3.63325 0.666992 3.33325 0.966992 3.33325 1.33366V2.00033H2.66659C1.93325 2.00033 1.33325 2.60033 1.33325 3.33366V14.0003C1.33325 14.7337 1.93325 15.3337 2.66659 15.3337H13.3333C14.0666 15.3337 14.6666 14.7337 14.6666 14.0003V3.33366C14.6666 2.60033 14.0666 2.00033 13.3333 2.00033ZM12.6666 14.0003H3.33325C2.96659 14.0003 2.66659 13.7003 2.66659 13.3337V5.33366H13.3333V13.3337C13.3333 13.7003 13.0333 14.0003 12.6666 14.0003Z"
                      fill="#7D7F83" />
                  </svg>
                  2021.10.30
                </div>
                <div class="news-guild">ギルド</div>
                <div class="news-title">新しいギルドが追加されました！新しいギルドが追加されました！</div>
              </div>
            </div>

          </div>

          <nav class="news-list-pagination" aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.66602 2.91602V11.0827L11.0827 6.99935L4.66602 2.91602Z" fill="#111112" />
                    </svg>
                  </span>
                </a>
              </li>
            </ul>
          </nav>

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
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection