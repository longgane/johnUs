@extends('layout.index')
@section('stylesheet')
<link rel="stylesheet" href="/admin/css/tags.css?v={{rand(10,1000)}}">

<link rel="stylesheet" href="/admin/css/bootstrap-datepicker3.min.css">
@endsection
@section('title')
<title>JB20</title>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/JB10">クエスト一覧  </a></li>
            <li class="breadcrumb-item active" aria-current="page">クエスト詳細</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten fund-screen">
    <div class="menu-content">
        <ul>
            <li>
                <a class="color-menu" href="JB30?fund_id={{ request()->get('fund_id') }}"> 掲載情報</a>
            </li>
            <li>
                <a href="#">応募者</a>
            </li>
        </ul>
    </div>
    <form class="row-conten" id="form" onsubmit="return false">

        <div class="title-main-conten">
            <p>サイト表示情報</p>
            <div class="option">
                <button class="base-button action-button" for="">プレビュー</button>
                <button class="base-button cancel-button" for="">承認依頼</button>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ギルド</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input type="text" class="form-control" name="ギルド" placeholder="ギルド名を選択">
            </div>
        </div>

        {{-- -------------- --}}
        <div class="title-main-conten">
            <p>掲載情報</p>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ステータス</label>
                
            </div>
            <div class="coll-md-8 edit-padding">
                <p style="color:black;">作成中</p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">掲載期間</label>
                
            </div>
            <div class="coll-md-8 edit-padding " id="sandbox-container">
                <div class="input-daterange input-group">
                    <div class="ms-2">
                        <input type="text"  placeholder="🗓&emsp;開始日を入力" style="margin-left: 0px" autocomplete="off" class="form-control" name="start">
                    </div>
                    <div class="or mt-4" style="width: 6.125rem;">〜</div>
                    <div class="w30">
                        <input type="text" placeholder="🗓&emsp;終了日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="end">
                    </div>
                </div>
            </div>
        </div>
        {{-- -------------- --}}
        <div class="title-main-conten">
            <p>クエスト</p>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">クエスト名</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                    <input class="form-control" name="クエスト名" placeholder="クエスト名を入力" type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">依頼主</label>
            </div>
            <div class="coll-md-8 edit-padding">
                
                <input data-for-calculating="true" class="form-control" name="依頼主" placeholder="ギルドとは別に依頼主がいる場合は依頼主名を入力"type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">募集背景</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">               
                <textarea class="form-control" name="募集背景" placeholder="募集背景を入力" type="text" ></textarea>        
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ギルド勲章</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control" name="ギルド勲章" placeholder="熱い思いをギルド勲章として入力！200文字程度をおすすめします" type="text" maxlength="200"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">開催日時</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding " id="sandbox-container">
                <div class="input-daterange input-group">
                    <div class="ms-2">
                        <input type="text"  placeholder="🗓&emsp;開始日を入力" style="margin-left: 0px" autocomplete="off" class="form-control" name="start">
                    </div>
                    <div class="or mt-4" style="width: 6.125rem;">〜</div>
                    <div class="w30">
                        <input type="text" placeholder="🗓&emsp;終了日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="end">
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">開催日時（補足）</label>
               
            </div>
            <div class="coll-md-8 edit-padding ">
                    <input class="form-control" name="開催日時（補足）" type="text" placeholder="例）期間内で2回ほどのお願いをする予定です！ ">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">開催場所（都道府県）</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="w30">
                    <select name="開催場所（都道府県）" class="form-select" id="">
                        <option value="">都道府県</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">開催場所（住所）</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <input type="text" class="form-control" placeholder="具体的な住所や場所を入力" name="開催場所（住所）" id="">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3">
                <label class="form-label">クエスト内容</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                    <textarea class="form-control " name="市区町村" type="text" placeholder="実際にお願いする内容を具体的に入力"></textarea>
            </div>
        </div>
        <div class="form-group-checkbox">
            <div class="coll-md-3 ">
                <label class="form-label">希望条件</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding ps-3 d">
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" value="身元確認者希望" name="身元確認者希望" id="1"> <label for="1">身元確認者希望 </label><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="シニア歓迎" id="2"> <label for="2"> シニア歓迎 </label>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="送迎なし" id="3"> <label for="3">送迎なし </label><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="ファミリー歓迎" id="4"> <label for="4"> ファミリー歓迎 </label>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="女性歓迎" id="5"> <label for="5">女性歓迎 </label><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="男性歓迎" id="6"> <label for="6"> 男性歓迎 </label>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="若者歓迎" id="7"> <label for="7">若者歓迎 </label><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="未経験者歓迎" id="8"> <label for="8"> 未経験者歓迎 </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">主に対象となる方</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                   <input type="text" class="form-control " name="主に対象となる方" placeholder="学生、旅人など具体的に書くとより集まりやすくなります。">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">お礼</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control " name="お礼" type="text" placeholder="お礼としてプレゼントする内容を入力"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">備考・<br> メッセージ</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control " name="備考・メッセージ" type="text" placeholder="補足事項やメッセージを記入"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メイン写真</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="image-file-select" style="padding-left: 0.5rem;" id="メイン画像_img_upload">
                    <div class="image-upload-placeholder">
                        <label for="メイン画像_image_input_file" class="input-image-placeholder"></label>
                        <input type="file" id="メイン画像_image_input_file" accept="image/*" name="メイン写真" hidden />
                    </div>
                    <p  style="padding-top:4rem; font-size: 12px;">推奨：150 × 150 px</p>
                </div>
                
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">その他写真 <br>
                    （10枚まで）</label>
                
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="image-file-select" style="padding-left: 0.5rem;" id="メイン画像_img_upload">
                    <div class="image-upload-placeholder">
                        <label for="メイン画像_image_input_file" class="input-image-placeholder"></label>
                        <input type="file" id="メイン画像_image_input_file" accept="image/*" name="その他写真（10枚まで）" hidden />
                    </div>
                    <p  style="padding-top:4rem; font-size: 12px;">推奨：150 × 150 px</p>
                </div>
                
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">クエストカテゴリ</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="w30">
                    <select name="クエストカテゴリ" class="form-select" id="">
                        <option value="">カテゴリを選択</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">お礼カテゴリ</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="w30">
                    <select name="お礼カテゴリ" class="form-select" id="">
                        <option value="">カテゴリを選択</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">タグ <br>
                    （10個まで）</label>

            </div>
            <div class="coll-md-8 edit-padding">
                 
                    <div class="wrapper-tag">
                        <div class="content">
                            <ul id="ul"><input type="text" id="input" name="タグ（10個まで）" placeholder="タグを入力" spellcheck="false" maxlength="50" autocomplete="off"></ul>
                        </div>
                        <div class="details">
                            <p><span>10</span> タグが残っています</p>
                            {{-- <button>Remove All</button> --}}
                        </div>
                    </div>
            </div>
        </div>

       
       
        <div class="button-submit" style="text-align: center;">
            <button id="submit_form" type="submit" class="base-button submit-button">保存する</button>
        </div>
    </form>
</div>
<script src="/admin/js/bootstrap-datepicker.min.js"></script>
<script src="/admin/js/bootstrap-datepicker.vi.min.js"></script>
<script src="/admin/js/image-file-uploader.js"></script>
<script src="/admin/js/validate.js"></script>
<script src="/admin/js/tags.js"></script>
<script src="/admin/js/dataTag.js"></script>
<script src="/admin/js/pages/JB30.js"></script>

@endsection