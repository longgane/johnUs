@extends('layout.index')
@section('stylesheet')
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
@endsection

@section('content')
<div class="main-conten fund-screen">
    
    <form class="row-conten" id="form" onsubmit="return false">
       <div class="option"  style="width:100%; text-align:right">
            <button class="base-button action-button" for="">プレビュー</button>
        </div>
        
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">お知らせタイトル</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input type="text" class="form-control" name="お知らせタイトル" placeholder="メンテナンスのお知らせ">
            </div>
        </div>
        <div class="form-group-checkbox">
            <div class="coll-md-3 ">
                <label class="form-label">告知先</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding ps-3">
                    <input type="checkbox" style="transform: scale(1.3); width: 5%" value="ユーザー"  name="ユーザー" id="ユーザー" > <label for="ユーザー" style="width: 10%">ユーザー </label><br>
                    <input type="checkbox" style="transform: scale(1.3); width: 5%" value="ギルド" name="ギルド" id="ギルド" > <label for="ギルド" style="width: 10%"> ギルド </label>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">お知らせ内容</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control" name="お知らせ内容" placeholder="以下の日程でシステムメンテンナンスを実施します。期間中はログインができませんのでご注意ください。  2021/11/15 13:00〜15:00"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">公開日</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding " id="sandbox-container">
                <div class="input-daterange input-group">
                    <div class="w30">
                        <input type="text"  placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" name="start">
                    </div>
                    <div class="or mt-4" style="width: 6.125rem;">〜</div>
                    <div class="w30">
                        <input type="text" placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="end">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">種類</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <div>
                    <select class="form-select" name="種類" type="text" >
                        <option value="">お知らせの種類を選択</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メイン写真</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="image-file-select" id="メイン画像_img_upload">
                    <div class="image-upload-placeholder">
                        <label for="メイン画像_image_input_file" class="input-image-placeholder"></label>
                        <input type="file" id="メイン画像_image_input_file" accept="image/*" name="ロゴ" hidden />
                    </div>
                    <p class="center25" style=" font-size: 12px; padding-top:3.813rem;">推奨：150 × 150 px</p>
                </div>
               
            </div>
        </div>
        <div class="col-md-12">
            <div class="option1 text-end">
                <br />
                <a style="text-decoration-line:underline; color:#979797; font-weight:700;" href=""> <img src="/admin/image/Garbage.svg" alt="">  削除する</a>
               
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