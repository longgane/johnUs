@extends('layout.index2')
@section('content')
    <div class="container">
        <div class="create-quest-page edit-quest-2-page">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home-logged">ホーム</a></li>
              <li class="breadcrumb-item active" aria-current="page">応募者一覧</li>
            </ol>
          </nav>
  
          <div class="create-quest-main edit-quest-2-main">
            <h2 class="big-title">応募者一覧</h2>
  
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
                <h3 class="title">応募者一覧</h3>
                <form class="content form-search">
                  <div class="form-search-content">
                    <div class="input-item">
                      <h4 class="input-title">ギルド名</h4>
                      <input type="text" class="input" placeholder="クエスト名を入力">
                    </div>
  
                    <div class="input-item">
                      <h4 class="input-title">ユーザー名</h4>
                      <input type="text" class="input" placeholder="ギルド名を入力">
                    </div>
  
                    <div class="input-item">
                      <h4 class="input-title">応募日</h4>
  
                      <div class="group-input">
                        <div class="input-with-btn">
                          <input type="text" class="input" placeholder="開始日を入力">
                          <button class="calender-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M2.5 5.0013V16.668C2.5 17.11 2.67559 17.5339 2.98816 17.8465C3.30072 18.159 3.72464 18.3346 4.16667 18.3346H15.8333C16.2754 18.3346 16.6993 18.159 17.0118 17.8465C17.3244 17.5339 17.5 17.11 17.5 16.668V5.0013C17.5 4.55927 17.3244 4.13535 17.0118 3.82279C16.6993 3.51023 16.2754 3.33464 15.8333 3.33464H14.1667V1.66797H12.5V3.33464H7.5V1.66797H5.83333V3.33464H4.16667C3.72464 3.33464 3.30072 3.51023 2.98816 3.82279C2.67559 4.13535 2.5 4.55927 2.5 5.0013ZM15.8333 16.668H4.16667V6.66797H15.8333V16.668Z"
                                fill="black" />
                            </svg>
  
                          </button>
                        </div>
  
                        <span>~</span>
  
  
                        <div class="input-with-btn">
                          <input type="text" class="input" placeholder="終了日を入力">
                          <button class="calender-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M2.5 5.0013V16.668C2.5 17.11 2.67559 17.5339 2.98816 17.8465C3.30072 18.159 3.72464 18.3346 4.16667 18.3346H15.8333C16.2754 18.3346 16.6993 18.159 17.0118 17.8465C17.3244 17.5339 17.5 17.11 17.5 16.668V5.0013C17.5 4.55927 17.3244 4.13535 17.0118 3.82279C16.6993 3.51023 16.2754 3.33464 15.8333 3.33464H14.1667V1.66797H12.5V3.33464H7.5V1.66797H5.83333V3.33464H4.16667C3.72464 3.33464 3.30072 3.51023 2.98816 3.82279C2.67559 4.13535 2.5 4.55927 2.5 5.0013ZM15.8333 16.668H4.16667V6.66797H15.8333V16.668Z"
                                fill="black" />
                            </svg>
  
                          </button>
                        </div>
                      </div>
                    </div>
  
                    <div class="input-item">
                      <h4 class="input-title">ステータス</h4>
                      <div class="checkbox-group">
                        <label class="input-checkbox">選考中
                          <input type="checkbox" name="" id="">
                          <span class="checkmark">
                            <svg class="unchecked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 2V16H2V2H16ZM16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0Z"
                                fill="#7D7F83" />
                            </svg>
  
                            <svg class="checked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0ZM7.71 13.29C7.61749 13.3827 7.5076 13.4563 7.38662 13.5064C7.26565 13.5566 7.13597 13.5824 7.005 13.5824C6.87403 13.5824 6.74435 13.5566 6.62338 13.5064C6.5024 13.4563 6.39251 13.3827 6.3 13.29L2.71 9.7C2.61742 9.60742 2.54398 9.49751 2.49387 9.37654C2.44377 9.25558 2.41798 9.12593 2.41798 8.995C2.41798 8.86407 2.44377 8.73442 2.49387 8.61346C2.54398 8.49249 2.61742 8.38258 2.71 8.29C2.80258 8.19742 2.91249 8.12398 3.03346 8.07387C3.15442 8.02377 3.28407 7.99798 3.415 7.99798C3.54593 7.99798 3.67558 8.02377 3.79654 8.07387C3.91751 8.12398 4.02742 8.19742 4.12 8.29L7 11.17L13.88 4.29C14.067 4.10302 14.3206 3.99798 14.585 3.99798C14.8494 3.99798 15.103 4.10302 15.29 4.29C15.477 4.47698 15.582 4.73057 15.582 4.995C15.582 5.25943 15.477 5.51302 15.29 5.7L7.71 13.29Z"
                                fill="#5488AD" />
                            </svg>
  
                          </span>
                        </label>
                        <label class="input-checkbox">依頼済
                          <input type="checkbox" name="" id="">
                          <span class="checkmark">
                            <svg class="unchecked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 2V16H2V2H16ZM16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0Z"
                                fill="#7D7F83" />
                            </svg>
  
                            <svg class="checked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0ZM7.71 13.29C7.61749 13.3827 7.5076 13.4563 7.38662 13.5064C7.26565 13.5566 7.13597 13.5824 7.005 13.5824C6.87403 13.5824 6.74435 13.5566 6.62338 13.5064C6.5024 13.4563 6.39251 13.3827 6.3 13.29L2.71 9.7C2.61742 9.60742 2.54398 9.49751 2.49387 9.37654C2.44377 9.25558 2.41798 9.12593 2.41798 8.995C2.41798 8.86407 2.44377 8.73442 2.49387 8.61346C2.54398 8.49249 2.61742 8.38258 2.71 8.29C2.80258 8.19742 2.91249 8.12398 3.03346 8.07387C3.15442 8.02377 3.28407 7.99798 3.415 7.99798C3.54593 7.99798 3.67558 8.02377 3.79654 8.07387C3.91751 8.12398 4.02742 8.19742 4.12 8.29L7 11.17L13.88 4.29C14.067 4.10302 14.3206 3.99798 14.585 3.99798C14.8494 3.99798 15.103 4.10302 15.29 4.29C15.477 4.47698 15.582 4.73057 15.582 4.995C15.582 5.25943 15.477 5.51302 15.29 5.7L7.71 13.29Z"
                                fill="#5488AD" />
                            </svg>
  
                          </span>
                        </label>
                        <label class="input-checkbox">お断り
                          <input type="checkbox" name="" id="">
                          <span class="checkmark">
                            <svg class="unchecked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 2V16H2V2H16ZM16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0Z"
                                fill="#7D7F83" />
                            </svg>
  
                            <svg class="checked" width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H16C17.1 18 18 17.1 18 16V2C18 0.9 17.1 0 16 0ZM7.71 13.29C7.61749 13.3827 7.5076 13.4563 7.38662 13.5064C7.26565 13.5566 7.13597 13.5824 7.005 13.5824C6.87403 13.5824 6.74435 13.5566 6.62338 13.5064C6.5024 13.4563 6.39251 13.3827 6.3 13.29L2.71 9.7C2.61742 9.60742 2.54398 9.49751 2.49387 9.37654C2.44377 9.25558 2.41798 9.12593 2.41798 8.995C2.41798 8.86407 2.44377 8.73442 2.49387 8.61346C2.54398 8.49249 2.61742 8.38258 2.71 8.29C2.80258 8.19742 2.91249 8.12398 3.03346 8.07387C3.15442 8.02377 3.28407 7.99798 3.415 7.99798C3.54593 7.99798 3.67558 8.02377 3.79654 8.07387C3.91751 8.12398 4.02742 8.19742 4.12 8.29L7 11.17L13.88 4.29C14.067 4.10302 14.3206 3.99798 14.585 3.99798C14.8494 3.99798 15.103 4.10302 15.29 4.29C15.477 4.47698 15.582 4.73057 15.582 4.995C15.582 5.25943 15.477 5.51302 15.29 5.7L7.71 13.29Z"
                                fill="#5488AD" />
                            </svg>
  
                          </span>
                        </label>
  
                      </div>
                    </div>
                  </div>
  
                  <div class="action">
                    <button class="btn btn-outline clear-btn">クリア</button>
                    <button class="btn btn-primary search-btn">検索</button>
                  </div>
  
                </form>
  
                <div class="applicant-list">
  
                  <div class="applicant-card">
                    <div class="heading">記事コンテンツへの掲載記事作成</div>
  
                    <div class="main">
                      <div class="basic-info">
                        <div class="avatar">
                          <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                        </div>
  
                        <div class="text">
                          <h5 class="name">佐藤 愛美</h5>
                          <div class="status">選考中</div>
                        </div>
                      </div>
  
                      <div class="detail-info">
                        <div class="info-category">
                          <div class="info-title">ギルド名:</div>
                          <div class="info-content">伊万里市</div>
                        </div>
                        <div class="info-category">
                          <div class="info-title">応募日:</div>
                          <div class="info-content">2021/11/20</div>
                        </div>
                      </div>
  
                      <button class="btn btn-outline view-btn" onclick="location.href='applicant-detail '">詳細を見る</button>
  
                    </div>
                  </div>
  
                  <div class="applicant-card">
                    <div class="heading">記事コンテンツへの掲載記事作成</div>
  
                    <div class="main">
                      <div class="basic-info">
                        <div class="avatar">
                          <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                        </div>
  
                        <div class="text">
                          <h5 class="name">佐藤 愛美</h5>
                          <div class="status status-yellow">依頼済</div>
                        </div>
                      </div>
  
                      <div class="detail-info">
                        <div class="info-category">
                          <div class="info-title">ギルド名:</div>
                          <div class="info-content">伊万里市</div>
                        </div>
                        <div class="info-category">
                          <div class="info-title">応募日:</div>
                          <div class="info-content">2021/11/20</div>
                        </div>
                      </div>
  
                      <button class="btn btn-outline view-btn" onclick="location.href='applicant-detail '">詳細を見る</button>
  
                    </div>
                  </div>
  
                  <div class="applicant-card">
                    <div class="heading">記事コンテンツへの掲載記事作成</div>
  
                    <div class="main">
                      <div class="basic-info">
                        <div class="avatar">
                          <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                        </div>
  
                        <div class="text">
                          <h5 class="name">佐藤 愛美</h5>
                          <div class="status status-red">お断り</div>
                        </div>
                      </div>
  
                      <div class="detail-info">
                        <div class="info-category">
                          <div class="info-title">ギルド名:</div>
                          <div class="info-content">伊万里市</div>
                        </div>
                        <div class="info-category">
                          <div class="info-title">応募日:</div>
                          <div class="info-content">2021/11/20</div>
                        </div>
                      </div>
  
                      <button class="btn btn-outline view-btn" onclick="location.href='applicant-detail '">詳細を見る</button>
  
                    </div>
                  </div>
  
                  <div class="applicant-card">
                    <div class="heading">記事コンテンツへの掲載記事作成</div>
  
                    <div class="main">
                      <div class="basic-info">
                        <div class="avatar">
                          <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                        </div>
  
                        <div class="text">
                          <h5 class="name">佐藤 愛美</h5>
                          <div class="status">選考中</div>
                        </div>
                      </div>
  
                      <div class="detail-info">
                        <div class="info-category">
                          <div class="info-title">ギルド名:</div>
                          <div class="info-content">伊万里市</div>
                        </div>
                        <div class="info-category">
                          <div class="info-title">応募日:</div>
                          <div class="info-content">2021/11/20</div>
                        </div>
                      </div>
  
                      <button class="btn btn-outline view-btn" onclick="location.href='applicant-detail '">詳細を見る</button>
  
                    </div>
                  </div>
  
                  <div class="applicant-card">
                    <div class="heading">記事コンテンツへの掲載記事作成</div>
  
                    <div class="main">
                      <div class="basic-info">
                        <div class="avatar">
                          <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                        </div>
  
                        <div class="text">
                          <h5 class="name">佐藤 愛美</h5>
                          <div class="status status-yellow">依頼済</div>
                        </div>
                      </div>
  
                      <div class="detail-info">
                        <div class="info-category">
                          <div class="info-title">ギルド名:</div>
                          <div class="info-content">伊万里市</div>
                        </div>
                        <div class="info-category">
                          <div class="info-title">応募日:</div>
                          <div class="info-content">2021/11/20</div>
                        </div>
                      </div>
  
                      <button class="btn btn-outline view-btn" onclick="location.href='applicant-detail '">詳細を見る</button>
  
                    </div>
                  </div>
  
                  <div class="applicant-card">
                    <div class="heading">記事コンテンツへの掲載記事作成</div>
  
                    <div class="main">
                      <div class="basic-info">
                        <div class="avatar">
                          <img srcset="/joinus/img/avatar-2.png 2x" alt="">
                        </div>
  
                        <div class="text">
                          <h5 class="name">佐藤 愛美</h5>
                          <div class="status status-red">お断り</div>
                        </div>
                      </div>
  
                      <div class="detail-info">
                        <div class="info-category">
                          <div class="info-title">ギルド名:</div>
                          <div class="info-content">伊万里市</div>
                        </div>
                        <div class="info-category">
                          <div class="info-title">応募日:</div>
                          <div class="info-content">2021/11/20</div>
                        </div>
                      </div>
  
                      <button class="btn btn-outline view-btn" onclick="location.href='applicant-detail '">詳細を見る</button>
  
                    </div>
                  </div>
                </div>
  
                <nav class="edit-quest-2-pagination" aria-label="...">
                  <ul class="pagination">
      
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                      <a class=" page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
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
  
            </div>
          </div>
  
        </div>
      </div>
  @endsection