@extends('layout.index')

@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/FD10">ギルド一覧 </a></li>
            <li class="breadcrumb-item active" aria-current="page">ギルド詳細</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten fund-screen">
    <div class="menu-content">
        <ul>
            <li>
                <a class="color-menu" href="CL30?fund_id={{ request()->get('fund_id') }}"> 基本情報</a>
            </li>
            <li>
                <a href="CL40?fund_id={{ request()->get('fund_id') }}">クエスト</a>
            </li>
        </ul>
    </div>
    <form class="row-conten" id="form" onsubmit="return false">

        <div class="title-main-conten">
            <p>サイト表示情報</p>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ギルド名</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input type="text" class="form-control" name="ギルド名" placeholder="伊万里市役所">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">住所</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
            <input type="text" class="form-control" name="住所" placeholder="佐賀県伊万里市立花町１３５５−１">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">URL</label>
                
            </div>
            <div class="coll-md-8 edit-padding">
                <input class="form-control" name="URL" placeholder="https://imarishi.com" type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">受付担当</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                    <input class="form-control" name="受付担当" placeholder="総合政策部　商工振興課　林
                    " type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">連絡先</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                
                <input data-for-calculating="true" class="form-control" name="連絡先" placeholder="0955-23-2111"type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">連絡可能時間</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">               
                    <input data-for-calculating="true" class="form-control" name="連絡可能時間" placeholder="平日10‐17時"  type="text" >           
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ギルド勲章</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control" name="ギルド勲章" placeholder="地域の行事イベント等を「非日常的な余暇の過ごし方」となる体験メニューとしてサイト登録し、都市部等の人材を新たな担い手として募集し、関係人口を創出していくものを目指します。 伊万里市の魅力に触れていただく機会を当ギルドは創出します。" type="text" maxlength="200"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ロゴ</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <img src="./image/logo.svg" class="pe-lg-5" alt="">
                <div class="image-file-select" id="メイン画像_img_upload">
                    <div class="image-upload-placeholder">
                        <label for="メイン画像_image_input_file" class="input-image-placeholder"></label>
                        <input type="file" id="メイン画像_image_input_file" accept="image/*" name="ロゴ" hidden />
                    </div>
                    <p class="center25" style=" font-size: 12px; padding-top:3.813rem;">推奨：150 × 150 px</p>
                </div>
               
            </div>
        </div>

{{-- ------------------------------------ --}}

        <div class="title-main-conten">
            <p>ギルド本部</p>
        </div>

        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">会社名／団体名</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding datetime-picker">
                    <input class="form-control" name="会社名／団体名" type="text" placeholder="佐賀県伊万里市役所 ">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">郵便番号</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="w30">
                    <input type="number" min="0" id="post" name="郵便番号" placeholder="111-2222"
                    class="p-postal-code form-control w30" size="8" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">都道府県</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="w30">
                    <select class="form-select w30" name="都道府県">
                        <option value="" selected>----</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3">
                <label class="form-label">市区町村</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="w30">
                    <input class="form-control w30" name="市区町村" type="text" placeholder="伊万里市">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">番地</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                   <input type="text" class="form-control w30" name="番地" placeholder="立花町１３５５−１">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">建物名</label>
            </div>
            <div class="coll-md-8 edit-padding">
                   <input type="text" class="form-control w30" name="建物名" placeholder="建物名を入力">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">電話番号</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                   <input type="number" min="0" class="form-control w30" name="電話番号"placeholder="0955-23-2111">
            </div>
        </div>


        {{-- --------------------------------- --}}
        <div class="title-main-conten">
            <p>担当者</p>
        </div>
        <div class="color-form  edit-padding-colorForm">
            <div class="form-group-color">
                <div class="coll-md-3 ">
                    <label class="form-label">担当者名</label>
                    <div class="nhan">必須</div>
                </div>
                <div class="coll-md-8-color edit-padding">
                    <input class="form-control" name="担当者名" type="text" placeholder="林 修">
                </div>
            </div>
            <div class="form-group-color">
                <div class="coll-md-3 ">
                    <label class="form-label">メールアドレス</label>
                    <div class="nhan">必須</div>
                </div>
                <div class="coll-md-8-color edit-padding">
                    <input  class="form-control" name="番地" type="text" placeholder="hayashi@imarishi.go.jp">
                </div>
            </div>
            <div class="form-group-color">
                <div class="coll-md-3 ">
                    <label class="form-label">削除フラグ</label>
                </div>
                <div class="coll-md-8-color edit-padding">
                    <input style="transform: scale(1.5); "  class="ms-2" type="checkbox"  name="番地">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="option1 text-end">
                <br />
                <a style="text-decoration-line:underline; font-weight:700" href=""> + 担当者を追加</a>
               
            </div>
        </div>
        <div class="button-submit" style="text-align: center;">
            <button id="submit_form" type="submit" class="base-button submit-button">保存する</button>
        </div>
    </form>
</div>

<script src="/admin/js/image-file-uploader.js"></script>
<script src="/admin/js/pages/CL30.js"></script>
@endsection