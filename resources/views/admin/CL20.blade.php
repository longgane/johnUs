@extends('layout.index')

@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/CL10">ギルド一覧 </a></li>
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
                <input type="text" class="form-control" name="ギルド名" placeholder="サイトに表示するギルド名を入力">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">住所</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
            <input type="text" class="form-control" name="住所" placeholder="サイトに表示する住所や場所を入力">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">URL</label>
                
            </div>
            <div class="coll-md-8 edit-padding">
                <input class="form-control" name="URL" placeholder="サイトに表示するURLを入力" type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">受付担当</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                    <input class="form-control" name="受付担当" placeholder="担当の部署・課や、担当者名を入力" type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">連絡先</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                
                <input data-for-calculating="true" class="form-control" name="連絡先" placeholder="メールアドレスや電話番号を入力"type="text" >
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">連絡可能時間</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">               
                    <input data-for-calculating="true" class="form-control w30" name="連絡可能時間" placeholder="例）平日10-17時"  type="text" >           
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
                <label class="form-label">ロゴ</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8">
                <div class="image-file-select" style="padding-left: 0.5rem;" id="メイン画像_img_upload">
                    <div class="image-upload-placeholder">
                        <label for="メイン画像_image_input_file" class="input-image-placeholder"></label>
                        <input type="file" id="メイン画像_image_input_file" accept="image/*" name="ロゴ" hidden />
                    </div>
                </div>
                <p class="center25" style="padding-left: 2.5rem; font-size: 12px;">推奨：150 × 150 px</p>
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
                    <input class="form-control" name="会社名／団体名" type="text" placeholder="正式社名／団体名を入力 ">
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
                    <input class="form-control w30" name="市区町村" type="text" placeholder="大阪市">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">番地</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                   <input type="text" class="form-control w30" name="番地" placeholder="日の出町１−１−１">
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
                   <input type="number" min="0" class="form-control w30" name="電話番号"placeholder="00-0000-0000">
            </div>
        </div>


        {{-- --------------------------------- --}}
        <div class="title-main-conten">
            <p>担当者</p>
        </div>
        <div class="color-form  edit-padding-colorForm" style="padding-right: 0px;" id="form_body">
            <div class="chil pt-5" style="border-top:1px solid #ffff">
                <div class="form-group-color">
                    <div class="coll-md-3 ">
                        <label class="form-label">担当者名</label>
                        <div class="nhan">必須</div>
                    </div>
                    <div class="coll-md-8-color edit-padding pe-5" >
                        <input class="form-control" name="担当者名" type="text" placeholder="担当者の名前を入力">
                    </div>
                </div>
                <div class="form-group-color">
                    <div class="coll-md-3 ">
                        <label class="form-label">メールアドレス</label>
                        <div class="nhan">必須</div>
                    </div>
                    <div class="coll-md-8-color edit-padding pe-5">
                        <input  class="form-control" name="番地" type="email" placeholder="メールアドレスを入力（保存後に招待メールが送られます）">
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
                <div class="form-group-color justify-content-end" style="margin-top:-60px">
                    <div class="action_container pe-5">
                            <button class="btn btn-danger mb-lg-5 " onclick="remove_tr(this)">
                                削除
                            </button>
                        </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-12">
            <div class="option1 text-end">
                <br />
                <div class="action_container">
                    <label style="text-decoration-line:underline; font-weight:700; color:#3A6CFF; cursor: pointer;" class="success" onclick="create_tr('form_body')">
                        + 担当者を追加
                    </label>
                </div>
               
            </div>
        </div>
        <div class="button-submit" style="text-align: center;">
            <button id="submit_form" type="submit" class="base-button submit-button">保存する</button>
        </div>
    </form>
</div>

<script src="/admin/js/image-file-uploader.js"></script>
<script src="/admin/js/add-item.js"></script>
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