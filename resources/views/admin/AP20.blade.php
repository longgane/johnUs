@extends('layout.index')

@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/FD10">ファンド一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page">ファンド編集</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten fund-screen">
    <div class="row w-100 address-bar m-1 p-3">
        <img src="/admin/image/AP20.svg" class="ps-3 pt-1" width="60px" height="60px" style="left:0; width: 90px" alt="">
        <ul class="w-75 ps-lg-5 pt-3" style="font-weight: 700; list-style: none; letter-spacing: 2px; ">
            <li>旅人または、学生サークルの皆さん、JOINUS！！！ </li>
            <li>  神社への宿泊無料を提供します！！</li>
        </ul>
    </div>
    <div class="title-main-conten">  <p><img src="/admin/image/user.svg" alt=""> 応募者情報</p></div>
    <div class="title-recruitment">
        <div class="recruitment-left">
            <img src="/admin/image/imageuser.svg" alt="">
            <ul class="infomation-user">
                <li>吉田 優子</li>
                <li>ニックネーム</li>
                <li>最終ログイン日時</li>
            </ul>
            <ul class="data-user">
                <li>
                    <div class="nhan-recruitment">
                        <p>身元確認済</p>
                    </div>
                </li>
                <li>ゆうこ</li>
                <li>2021/10/14 23:43</li>
            </ul>
        </div>
        <div class="recruitment-right">
            
        </div>
    </div>
    <div class="menu-content">
        <ul>
            <li>
                <a class="color-menu" href="US10?fund_id={{ request()->get('fund_id') }}"> 基本情報</a>
            </li>
            <li>
                <a href="">登録ギルド</a>
            </li>
            <li>
                <a href=""> クエスト </a>
            </li>
        </ul>
    </div>
    <form class="row-conten" id="form" onsubmit="return false">

        <div class="title-main-conten" style="border-bottom:none;">
            <p><img src="/admin/image/user.svg" alt="" > 基本情報</p>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メールアドレス</label>
            </div>
            <div class="coll-md-8 edit-padding">
               <p>yuko@gmail.com</p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">電話番号</label> 
            </div>
            <div class="coll-md-8 edit-padding">
               <p>090-1111-2222</p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">性別</label>
            </div>
            <div class="coll-md-8 edit-padding">
               <p>女</p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">生年月日</label>
            </div>
            <div class="coll-md-8 edit-padding">
               <p>1978年2月11日（42歳）</p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">職業</label>
            </div>
            <div class="coll-md-8 edit-padding">
                <p>会社員（事務職） </p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">興味タグ</label>
            </div>
            <div class="coll-md-8 edit-padding">
                <ul class="tags" >
                   <li>ビジネス</li>
                   <li>釣り</li>
                   <li>福岡</li>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">ひとことメッセージ</label>
            </div>
            <div class="coll-md-8 edit-padding">
                <p>がんばります！</p>
            </div>
        </div>
       
    </form>
</div>

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
});
</script>
@endsection