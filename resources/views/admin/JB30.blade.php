@extends('layout.index')
@section('stylesheet')
<link rel="stylesheet" href="/admin/css/tags.css?v={{rand(10,1000)}}">
<link rel="stylesheet" href="/admin/css/bootstrap-datepicker3.min.css">
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
@endsection @section('content')
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
                <input type="text" class="form-control" name="ギルド" placeholder="伊万里市">
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
                    <div class="w30">
                        <input type="text"  placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" name="start">
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
                <input class="form-control" name="クエスト名" placeholder="クエスト名を入力" type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">依頼主</label>
            </div>
            <div class="coll-md-8 edit-padding">

                <input data-for-calculating="true" class="form-control" name="依頼主" placeholder="ギルドとは別に依頼主がいる場合は依頼主名を入力" type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">募集背景</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control" name="募集背景" placeholder=" 募集背景を入力" type="text"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ギルド勲章</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control" name="ギルド勲章" placeholder=" 熱い思いをギルド勲章として入力！200文字程度をおすすめします" type="text" maxlength="200"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">開催日時</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding " id="sandbox-container">
                <div class="input-daterange input-group">
                    <div class="w30">
                        <input type="text"  placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" name="start">
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
            <div class="coll-md-8 edit-padding ps-3">
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span>身元確認者希望 </span><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span> シニア歓迎 </span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span>送迎なし </span><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span> ファミリー歓迎 </span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span>女性歓迎 </span><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span> 男性歓迎 </span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span>若者歓迎 </span><br>
                    <input type="checkbox" style="transform: scale(1.3);" name="" id=""> <span> 未経験者歓迎 </span>
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
                    <p style="padding-top:4rem; font-size: 12px;">推奨：150 × 150 px</p>
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
                    <p style="padding-top:4rem; font-size: 12px;">推奨：150 × 150 px</p>
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
<script src="/admin/js/tags.js"></script>
<script src="/admin/js/image-file-uploader.js"></script>
<script>
    function loadFundDetailInformation(FUND_ID) {
        /**
         * Get data for edit.
         */
        $.get(`/ajax/fund.detail.${FUND_ID}`, function(data) {
            bindDataForForm(data);

            let subImageUrls = [];

            /**
             * Initial data for block サブ画像
             */
            for (let i = 1; i <= 5; i++) {
                let item = getFormDataByFieldName(data, 'サブ画像_' + i);

                if (item && item.value) {
                    subImageUrls.push(item.value);
                }
            }
            initialImageFileUploader('サブ画像_img_upload', subImageUrls, 5);

            /**
             * Inital data for block メイン画像
             */
            let img2 = getFormDataByFieldName(data, 'メイン画像');
            initialImageFileUploader('メイン画像_img_upload', img2 && img2.value ? [img2.value] : [], 1);

            /**
             * Inital data for block チラシ画像
             */
            let img3 = getFormDataByFieldName(data, 'チラシ画像');
            initialImageFileUploader('チラシ画像_img_upload', img3 && img3.value ? [img3.value] : [], 1);
        });
    }

    $(document).ready(function() {
        let FUND_ID = $.urlParam('fund_id');

        loadFundDetailInformation(FUND_ID);
        /**
         * Auto saving data when user focus out of fields for calculating
         */
        $('[data-for-calculating="true"]').focusout(function(event) {
            let data = getDataFromForm();
            let element = event.target;

            data = data.filter(function(item) {
                return item.column_name == $(element).attr('name');
            });

            $.ajax({
                    url: `/ajax/fund.update.${FUND_ID}`,
                    data: JSON.stringify(data),
                    type: 'POST',
                    contentType: 'application/json',
                })
                .done(function() {
                    $.get(`/ajax/fund.detail.${FUND_ID}`, function(data) {
                        let target_update_fields = [];

                        $('[data-calculating-result="true"]').each(function(index,
                            element) {
                            target_update_fields.push(element.dataset.model);
                        });

                        data = data.filter(function(item) {
                            return target_update_fields.includes(item.column_name);
                        });

                        bindDataForForm(data);
                    });
                })
                .fail(function(error) {
                    showErrorMessage(error.responseJSON);
                });
        });

        $("#submit_form").click(function() {
            let btn = $(this);
            btn.addClass('disabled');

            let data = getDataFromForm();

            console.log(data);
            /**
             * Handle data for block サブ画像
             */
            let subImages = getDataFromImageFileUploader('サブ画像_img_upload');
            for (let i = 1; i <= 5; i++) {
                if (subImages[i - 1]) {
                    data.push({
                        'column_name': `サブ画像_${i}`,
                        'data_type': subImages[i - 1].dataType,
                        'value': subImages[i - 1].file,
                        'file_name': subImages[i - 1].name,
                    });
                } else {
                    data.push({
                        'column_name': `サブ画像_${i}`,
                        'data_type': 'text',
                        'value': '',
                    });
                }
            }

            /**
             * Handle data for block メイン画像
             */
            let img2 = getDataFromImageFileUploader('メイン画像_img_upload');
            if (img2[0]) {
                data.push({
                    'column_name': `メイン画像`,
                    'data_type': img2[0].dataType,
                    'value': img2[0].file,
                    'file_name': img2[0].name,
                });
            } else {
                data.push({
                    'column_name': `メイン画像`,
                    'data_type': 'text',
                    'value': '',
                });
            }

            /**
             * Handle data for block チラシ画像
             */
            let img3 = getDataFromImageFileUploader('チラシ画像_img_upload');
            if (img3[0]) {
                data.push({
                    'column_name': `チラシ画像`,
                    'data_type': img3[0].dataType,
                    'value': img3[0].file,
                    'file_name': img3[0].name,
                });
            } else {
                data.push({
                    'column_name': `チラシ画像`,
                    'data_type': 'text',
                    'value': '',
                });
            }

            $.ajax({
                    url: `/ajax/fund.update.${FUND_ID}`,
                    data: JSON.stringify(data),
                    type: 'POST',
                    contentType: 'application/json',
                })
                .done(function() {
                    showMessageSaveSuccessfully();
                    btn.removeClass('disabled');
                })
                .fail(function(error) {
                    showErrorMessage(error.responseJSON);
                    btn.removeClass('disabled');
                });
        });

           // lịch
      $('#sandbox-container .input-daterange').datepicker({
            format:"yyyy-mm-dd",
            language:"ru",
            autoclose:"true",
            todayHightlight:true
});
    });
</script>

@endsection