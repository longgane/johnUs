@extends('layout.index2')
@section('content')
<div class="container">
    <div class="message-2-page">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">ホーム</a></li>
          <li class="breadcrumb-item active" aria-current="page">ここも</li>
        </ol>
      </nav>

      <div class="message-2-main">
        <h2 class="big-title">メッセージ</h2>

        <div class="guild-heading">
          <div class="guild-logo">
            <img srcset="/joinus/img/guild-logo-2.png 2x" alt="">
          </div>
          <div class="guild-name">Join:us本部</div>

          <div class="back-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M15 4L17 6L11 12L17 18L15 20L7 12L15 4Z" fill="black"/>
              </svg>
              
          </div>
        </div>

        <div class="message-block">
          <div class="search-box">
            <div class="heading">宛先</div>

            <div class="search-main">
              <div class="search-input">
                <input type="text" class="input" placeholder="宛先検索">
                <div class="search-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.5006 14.0006H14.7106L14.4306 13.7306C15.6306 12.3306 16.2506 10.4206 15.9106 8.39063C15.4406 5.61063 13.1206 3.39063 10.3206 3.05063C6.09063 2.53063 2.53063 6.09063 3.05063 10.3206C3.39063 13.1206 5.61063 15.4406 8.39063 15.9106C10.4206 16.2506 12.3306 15.6306 13.7306 14.4306L14.0006 14.7106V15.5006L18.2506 19.7506C18.6606 20.1606 19.3306 20.1606 19.7406 19.7506C20.1506 19.3406 20.1506 18.6706 19.7406 18.2606L15.5006 14.0006ZM9.50063 14.0006C7.01063 14.0006 5.00063 11.9906 5.00063 9.50063C5.00063 7.01063 7.01063 5.00063 9.50063 5.00063C11.9906 5.00063 14.0006 7.01063 14.0006 9.50063C14.0006 11.9906 11.9906 14.0006 9.50063 14.0006Z"
                      fill="#5488AD" />
                  </svg>
                </div>
              </div>

              <div class="guild-list">
                <div class="guild-item active">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-1.png 2x" alt="">
                  </div>

                  <div class="guild-name">Join:us本部</div>
                </div>
                <div class="guild-item">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-2.png 2x" alt="">
                  </div>

                  <div class="guild-name">Guild南砺市</div>
                </div>
                <div class="guild-item">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-3.png 2x" alt="">
                  </div>

                  <div class="guild-name">青幡神社</div>
                </div>
                <div class="guild-item">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-4.png 2x" alt="">
                  </div>

                  <div class="guild-name">青幡神社</div>
                </div>
              </div>
            </div>
          </div>

          <div class="message-box">
            <div class="heading">メッセージ内容</div>

            <div class="message-box-main">
              <div class="message message-receive">
                <div class="avatar">
                  <img srcset="/joinus/img/avatar.jpg 2x" alt="">
                </div>

                <div class="message-content">
                  <div class="time">10:16</div>
                  <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est eu donec faucibus
                    aliquam magna libero, tellus est egestas. Pulvinar odio viverra at et nec imperdiet. Velit blandit
                    facilisi ac et, pharetra et. A amet egestas nunc, interdum sed mi. Nulla nunc, id pulvinar aliquam
                    cras dui id tincidunt vitae. Condimentum quisque enim nulla.</div>
                </div>
              </div>

              <div class="message message-send">
                <div class="message-content">
                  <div class="time">10:16</div>
                  <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget molestie posuere
                    gravida sed ut morbi penatibus faucibus blandit. Curabitur leo nunc felis malesuada tellus. Lectus
                    morbi ornare ac nisi, cursus. Facilisi amet.</div>
                </div>
              </div>

              <div class="message message-receive">
                <div class="avatar">
                  <img srcset="/joinus/img/avatar.jpg 2x" alt="">
                </div>

                <div class="message-content">
                  <div class="time">10:16</div>
                  <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est eu donec faucibus
                    aliquam magna libero, tellus est egestas. Pulvinar odio viverra at et nec imperdiet. Velit blandit
                    facilisi ac et, pharetra et. A amet egestas nunc, interdum sed mi. Nulla nunc, id pulvinar aliquam
                    cras dui id tincidunt vitae. Condimentum quisque enim nulla.</div>
                </div>
              </div>

              <div class="message-input">
                <input type="text" placeholder="メッセージ作成">

                <div class="action">
                  <div class="attach-btn"><svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M25.014 12.8898L14.2923 23.6115C12.9788 24.9249 11.1974 25.6628 9.33983 25.6628C7.48228 25.6628 5.70081 24.9249 4.38733 23.6115C3.07385 22.298 2.33594 20.5165 2.33594 18.659C2.33594 16.8014 3.07385 15.0199 4.38733 13.7065L15.109 2.98478C15.9847 2.10913 17.1723 1.61719 18.4107 1.61719C19.649 1.61719 20.8367 2.10913 21.7123 2.98478C22.588 3.86044 23.0799 5.04808 23.0799 6.28645C23.0799 7.52481 22.588 8.71246 21.7123 9.58812L10.979 20.3098C10.5412 20.7476 9.94735 20.9936 9.32816 20.9936C8.70898 20.9936 8.11516 20.7476 7.67733 20.3098C7.2395 19.872 6.99353 19.2781 6.99353 18.659C6.99353 18.0398 7.2395 17.4459 7.67733 17.0081L17.5823 7.11478"
                        stroke="#3273B9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>

                  <button class="btn btn-primary send-btn">
                    <span>送信</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5625 16.3125L17.4375 9L0.5625 1.6875V7.3125L11.8125 9L0.5625 10.6875V16.3125Z" fill="white"/>
                      </svg>
                      
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  @endsection