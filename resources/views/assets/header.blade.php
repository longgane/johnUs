<div class="menuLeftWrap">
  <h1 class="logo">
    <a href="/">
      <img src="/assets/img/common/logo.png" alt="彩 -SAI- 不動産クラウドファンディング">
    </a>
  </h1>
  <p class="menuBtn clickTarget sp">
    Menu
  </p>
  <div class="menuList clickTarget">
    <p class="close sp">
      close
    </p>
    <ul>
      <li class="nonmember">
        <a href="/sp10">不動産クラウドファンディングとは</a>
      </li>
      <li class="nonmember">
        <a href="/sp20">ご利用の流れ</a>
      </li>
      <li class="member">
        <a href="">マイページ</a>
      </li>
      <li>
        <a href="/fund/fu10">ファンド一覧</a>
      </li>
      <li class="member">
        <a href="">入出金一覧</a>
      </li>
      <li class="member">
        <a href="">取引履歴</a>
      </li>
      <li class="member">
        <a href="">会員情報</a>
      </li>
      <li class="nonmember">
        <a href="/sp40">運営会社</a>
      </li>
      <li>
        <a href="">問い合わせ</a>
      </li>
      <li>
        <a href="/sp30">FAQ</a>
      </li>
    </ul>
  </div>
</div>
<ul class="loginArea">
  <li class="nonmember log">
    <a href="/login/lg10">ログイン</a>
  </li>
  <li class="nonmember new">
    <a href="/register/rg10">新規会員登録</a>
  </li>
  <li class="member name">
    <a href=""><span>藤田 田</span>様</a>
  </li>
  <li class="member out">
    <a href="">ログアウト</a>
  </li>
</ul>


<script type="text/javascript">
  // menu
  $(function () {
    if (window.matchMedia("(max-width: 768px) and (min-width: 0px)").matches) {
      var menuBtn = $('.menuLeftWrap .menuBtn'),
          menuClose = $('menuLeftWrap .menuList li, .menuLeftWrap .close'),
          menuBody = $('.menuLeftWrap .menuList'),
          fade = $('.menuLeftWrap .menuList li, .menuLeftWrap .close');
       menuBtn.click(function () {
        menuBtn.toggleClass('open');
        if (menuBtn.hasClass('open')) {
          menuBody.addClass('open');
          setTimeout(function () {
            fade.fadeIn();
          }, 300);
        } else {
          fade.fadeOut();
          setTimeout(function () {
            $('.menuLeftWrap .menuList.open').removeClass('open');
          }, 300);
        };
      });
      $('.menuLeftWrap .close, .menuList a').click(function () {
        menuBtn.removeClass('open');
        fade.fadeOut();
        setTimeout(function () {
          $('.menuLeftWrap .menuList.open').removeClass('open');
        }, 300);
      });
      $(document).on('click', function (e) {
        if (!$(e.target).closest('.clickTarget').length) {
          menuBtn.removeClass('open');
          fade.fadeOut();
          setTimeout(function () {
            $('.menuLeftWrap .menuList.open').removeClass('open');
          }, 300);
        }
      });
    };
  });
</script>