@extends('layout.index2')
@section('content')
    <div class="container">
        <div class="create-quest-page">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home-logged">ホーム</a></li>
              <li class="breadcrumb-item active" aria-current="page">新規クエスト作成</li>
            </ol>
          </nav>
  
          <div class="create-quest-main">
            <h2 class="big-title">新規クエスト作成</h2>
  
            <div class="nav-tab">
              <div class="nav-item active">
                <a href="#!" class="nav-link">掲載情報</a>
              </div>
              <div class="nav-item">
                <a href="#!" class="nav-link">応募者</a>
              </div>
            </div>
  
            <div class="tab-content">
              <div class="category">
                <h3 class="title">ギルド</h3>
                <div class="content">
                  <div class="input-item">
                    <h4 class="input-title">ギルド名<span class="require-label">必須</span></h4>
                    <input type="text" class="input" placeholder="ギルド名を選択">
                  </div>
                </div>
              </div>
              
              <div class="category">
                <h3 class="title">ギルド</h3>
                <div class="content">
                  <div class="input-item">
                    <h4 class="input-title">ギルド名<small>必須</small></h4>
                    <h4 class="input-title">ギルド名<span class="require-label">必須</span></h4>
                    <div class="group-input">
                      <div class="input-with-btn">
                        <input type="text" class="input" placeholder="開始日を入力">
                        <button class="calender-btn">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M2.5 5.0013V16.668C2.5 17.11 2.67559 17.5339 2.98816 17.8465C3.30072 18.159 3.72464 18.3346 4.16667 18.3346H15.8333C16.2754 18.3346 16.6993 18.159 17.0118 17.8465C17.3244 17.5339 17.5 17.11 17.5 16.668V5.0013C17.5 4.55927 17.3244 4.13535 17.0118 3.82279C16.6993 3.51023 16.2754 3.33464 15.8333 3.33464H14.1667V1.66797H12.5V3.33464H7.5V1.66797H5.83333V3.33464H4.16667C3.72464 3.33464 3.30072 3.51023 2.98816 3.82279C2.67559 4.13535 2.5 4.55927 2.5 5.0013ZM15.8333 16.668H4.16667V6.66797H15.8333V16.668Z"
                              fill="black" />
                          </svg>
    
                        </button>
                      </div>
    
                      <span>~</span>
    
    
                      <div class="input-with-btn">
                        <input type="text" class="input" placeholder="開始日を入力">
                        <button class="calender-btn">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M2.5 5.0013V16.668C2.5 17.11 2.67559 17.5339 2.98816 17.8465C3.30072 18.159 3.72464 18.3346 4.16667 18.3346H15.8333C16.2754 18.3346 16.6993 18.159 17.0118 17.8465C17.3244 17.5339 17.5 17.11 17.5 16.668V5.0013C17.5 4.55927 17.3244 4.13535 17.0118 3.82279C16.6993 3.51023 16.2754 3.33464 15.8333 3.33464H14.1667V1.66797H12.5V3.33464H7.5V1.66797H5.83333V3.33464H4.16667C3.72464 3.33464 3.30072 3.51023 2.98816 3.82279C2.67559 4.13535 2.5 4.55927 2.5 5.0013ZM15.8333 16.668H4.16667V6.66797H15.8333V16.668Z"
                              fill="black" />
                          </svg>
    
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="category">
                <h3 class="title">新規クエスト作成</h3>
                <div class="content">
                  <div class="input-item">
                    <h4 class="input-title">クエスト名<span class="require-label">必須</span></h4>
                    <input type="text" class="input" placeholder="クエスト名を入力">
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">依頼主</h4>
                    <!-- <input type="text" class="input input-resize" placeholder="ギルドとは別に依頼主がいる場合は依頼主名を入力"> -->
                    <textarea class="input textarea-single" name="" id="" cols="30" rows="1" placeholder="ギルドとは別に依頼主がいる場合は依頼主名を入力"></textarea>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">募集背景<span class="require-label">必須</span></h4>
                    <textarea name="" id="" cols="30" rows="10" class="input" placeholder="募集背景を入力"></textarea>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">開催日時<span class="require-label">必須</span></h4>
                    <div class="group-input">
                      <div class="input-with-btn">
                        <input type="text" class="input" placeholder="開始日を入力">
                        <button class="calender-btn">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M2.5 5.0013V16.668C2.5 17.11 2.67559 17.5339 2.98816 17.8465C3.30072 18.159 3.72464 18.3346 4.16667 18.3346H15.8333C16.2754 18.3346 16.6993 18.159 17.0118 17.8465C17.3244 17.5339 17.5 17.11 17.5 16.668V5.0013C17.5 4.55927 17.3244 4.13535 17.0118 3.82279C16.6993 3.51023 16.2754 3.33464 15.8333 3.33464H14.1667V1.66797H12.5V3.33464H7.5V1.66797H5.83333V3.33464H4.16667C3.72464 3.33464 3.30072 3.51023 2.98816 3.82279C2.67559 4.13535 2.5 4.55927 2.5 5.0013ZM15.8333 16.668H4.16667V6.66797H15.8333V16.668Z"
                              fill="black" />
                          </svg>
    
                        </button>
                      </div>
    
                      <span>~</span>
    
    
                      <div class="input-with-btn">
                        <input type="text" class="input" placeholder="開始日を入力">
                        <button class="calender-btn">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M2.5 5.0013V16.668C2.5 17.11 2.67559 17.5339 2.98816 17.8465C3.30072 18.159 3.72464 18.3346 4.16667 18.3346H15.8333C16.2754 18.3346 16.6993 18.159 17.0118 17.8465C17.3244 17.5339 17.5 17.11 17.5 16.668V5.0013C17.5 4.55927 17.3244 4.13535 17.0118 3.82279C16.6993 3.51023 16.2754 3.33464 15.8333 3.33464H14.1667V1.66797H12.5V3.33464H7.5V1.66797H5.83333V3.33464H4.16667C3.72464 3.33464 3.30072 3.51023 2.98816 3.82279C2.67559 4.13535 2.5 4.55927 2.5 5.0013ZM15.8333 16.668H4.16667V6.66797H15.8333V16.668Z"
                              fill="black" />
                          </svg>
    
                        </button>
                      </div>
                    </div>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">開催日時（補足）</h4>
                    <input type="text" class="input" placeholder="例）期間内で2回ほどのお願いをする予定です！">
                  </div>
  
                  <div class="input-item dropdown  input-dropdown">
                    <div class="input-title">開催場所（都道府県） <span class="require-label">必須</span></div>
  
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
                    <h4 class="input-title">クエスト内容<span class="require-label">必須</span></h4>
                    <textarea name="" id="" cols="30" rows="10" class="input" placeholder="実際にお願いする内容を具体的に入力"></textarea>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">クエスト内容 <span class="require-label">必須</span></h4>
                    <div class="checkbox-group">
                      <label class="input-checkbox">身元確認者希望
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
                      <label class="input-checkbox">送迎なし
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
                      <label class="input-checkbox">女性歓迎
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
                      <label class="input-checkbox">若者歓迎
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
                      <label class="input-checkbox">シニア歓迎
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
                      <label class="input-checkbox">ファミリー歓迎
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
                      <label class="input-checkbox">男性歓迎
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
                      <label class="input-checkbox">未経験者歓迎
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
  
                  <div class="input-item">
                    <h4 class="input-title">主に対象となる方<span class="require-label">必須</span></h4>
                    <!-- <input type="text" class="input" placeholder="学生、旅人など具体的に書くとより集まりやすくなります。"> -->
                    <textarea class="input textarea-single" name="" id="" cols="30" rows="1" placeholder="学生、旅人など具体的に書くとより集まりやすくなります。"></textarea>
  
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">お礼<span class="require-label">必須</span></h4>
                    <textarea name="" id="" cols="30" rows="10" class="input" placeholder="お礼としてプレゼントする内容を入力"></textarea>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">備考・メッセージ<span class="require-label">必須</span></h4>
                    <textarea name="" id="" cols="30" rows="10" class="input" placeholder="補足事項やメッセージを記入"></textarea>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">メイン写真<span class="require-label">必須</span></h4>
                    <div class="upload-group">
                      <button class="btn btn-outline upload-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.0008 14.986C11.0008 15.2512 11.1061 15.5056 11.2936 15.6931C11.4812 15.8806 11.7355 15.986 12.0008 15.986C12.266 15.986 12.5203 15.8806 12.7079 15.6931C12.8954 15.5056 13.0008 15.2512 13.0008 14.986V7.828L16.2437 11.071L17.6577 9.657L12.0008 4L6.34375 9.657L7.75775 11.071L11.0008 7.83V14.987V14.986Z" fill="#5488AD"/>
                          <path d="M4 14H6V18H18V14H20V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18V14Z" fill="#5488AD"/>
                          </svg>
                          アップロード
                      </button>
                      <span class="noti">推奨：150 × 150 px</span>
                    </div>
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">その他写真（10枚まで）<span class="require-label">必須</span></h4>
                    <div class="upload-group">
                      <button class="btn btn-outline upload-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.0008 14.986C11.0008 15.2512 11.1061 15.5056 11.2936 15.6931C11.4812 15.8806 11.7355 15.986 12.0008 15.986C12.266 15.986 12.5203 15.8806 12.7079 15.6931C12.8954 15.5056 13.0008 15.2512 13.0008 14.986V7.828L16.2437 11.071L17.6577 9.657L12.0008 4L6.34375 9.657L7.75775 11.071L11.0008 7.83V14.987V14.986Z" fill="#5488AD"/>
                          <path d="M4 14H6V18H18V14H20V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18V14Z" fill="#5488AD"/>
                          </svg>
                          アップロード
                      </button>
                      <span class="noti">推奨：150 × 150 px</span>
                    </div>
                  </div>
  
                  <div class="dropdown-group">
                    <div class="input-item dropdown  input-dropdown">
                      <div class="input-title">クエストカテゴリ <span class="require-label">必須</span></div>
    
                      <button class="btn btn-secondary dropdown-toggle input" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        カテゴリを選択
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
                    <div class="input-item dropdown  input-dropdown">
                      <div class="input-title">お礼カテゴリ <span class="require-label">必須</span></div>
    
                      <button class="btn btn-secondary dropdown-toggle input" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        カテゴリを選択
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
                  </div>
  
                  <div class="input-item">
                    <h4 class="input-title">タグ （10個まで）<span class="require-label">必須</span></h4>
                    <input type="text" class="input" placeholder="タグを入力">
                  </div>
  
                </div>
  
              </div>
              <button class="btn btn-primary app-btn save-btn" >保存する</button>
            </div>
          </div>
  
        </div>
      </div>
  @endsection