@extends('layout.index')
@section('stylesheet')
{{-- link table --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
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
            <div class="option">
                <button class="base-button action-button" onclick="location.href='/admin/MG10'" style="width:17rem" for="">メッセージを送る</button>
            </div>
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
            <li>
                <a href=""> 運営側入力</a>
            </li>
        </ul>
    </div>
    <form class="row-conten" id="form" onsubmit="return false">

        <div class="title-main-conten">
            <p><img src="/admin/image/user.svg" alt=""> 基本情報</p>
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
        

        <div class="title-main-conten">
            <p><img src="/admin/image/guild.svg" alt=""> 登録ギルド</p>
        </div>
        <div class="row mt-lg-5 ms-1" style="width: 100%">
            <table class="table table-bordered" id="table_data">
                <thead>
                <tr>
                    <th class="th200">ギルド名</th>
                    <th class="th150">都道府県</th>
                    <th class="th150">担当者</th>
                    <th class="th100" style="text-align: center">クエスト数</th>
                    <th class="th100" style="text-align: center">Join人数</th>
                </tr>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>
        <div class="container">
            <div id="pagination-wrapper"></div>
        </div>
        

        <div class="title-main-conten">
            <p><img src="/admin/image/guild.svg" alt=""> 参加クエスト</p>
        </div>
        <div class="form-group mt-5">
            <div class="col-md-4" style="display: flex">
                <label  class="form-label">平均感謝ポイント</label>
                <div class="pt-1" style="padding-left:15%; font-weight: 600" >6.8</div>
            </div>
            <div class="col-md-7 edit-padding">
                <p class="w-50" style="padding-left: 20%;font-weight: 600; color:black">クエスト達成率</p>
                <p style=" font-weight: 600;color:black">13.2%</p>
            </div>
            
        </div>
        
        <div class="row mt-lg-5 ms-1" style="width: 100%">
            <table class="table table-bordered" id="table_data">
                <tr>
                    <th class="th150">応募ステータス</th>
                    <th class="th150" style="text-align: center;">応募日</th>
                    <th class="th300">クエスト名</th>
                    <th class="th150" style="text-align: center;">ギルド名</th>
                    <th class="th150" style="text-align: center;">感謝ポイント</th>
                </tr>
                <tr>
                    <td style="">
                        <button class="base-button load-btn mb-3"> 選考中</button>    
                    </td>
                    <td style="text-align: center;">2021/11/20</td>
                    <td style="">記事コンテンツへの掲載記事作成</td>
                    <td style="text-align: center;">伊万里市</td>
                    <td style="text-align: center;">12</td>
                </tr>
                <tr>
                    <td style=""> <button class="base-button load-btn mb-3"> 選考中</button>   </td>
                    <td style="text-align: center;">2021/11/20</td>
                    <td style="">記事コンテンツへの掲載記事作成</td>
                    <td style="text-align: center;">伊万里市</td>
                    <td style="text-align: center;">12</td>
                </tr>
                <tr>
                    <td style=""> <button class="base-button load-btn mb-3"> 選考中</button>   </td>
                    <td style="text-align: center;">2021/11/20</td>
                    <td style="">記事コンテンツへの掲載記事作成</td>
                    <td style="text-align: center;">伊万里市</td>
                    <td style="text-align: center;">12</td>
                </tr>
                <tr>
                    <td style=""> <button class="base-button used-btn mb-3"> 選考中</button>   </td>
                    <td style="text-align: center;">2021/11/20</td>
                    <td style="">記事コンテンツへの掲載記事作成</td>
                    <td style="text-align: center;">伊万里市</td>
                    <td style="text-align: center;">12</td>
                </tr>
            </table>
        </div>
        <div class="title-main-conten">
            <p>運営側入力</p>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メモ</label>
                
            </div>
            <div class="coll-md-8 edit-padding">
                <textarea class="form-control" name="メモ" placeholder="メモを入力"></textarea>
            </div>
        </div>
        <div class="form-group-color">
            <div class="coll-md-3 ">
                <label class="form-label">本人確認済</label>
            </div>
            <div class="coll-md-8-color edit-padding">
                <input style="transform: scale(1.2); " class="ms-3" type="checkbox"  name="本人確認済">
            </div>
        </div>
        
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">本人確認書類画像</label>
                
            </div>
            <div class="coll-md-8 ps-lg-5">
                <p>img2039049.jpg</p>
            </div>
        </div>

        <div class="form-group-color">
            <div class="coll-md-3 ">
                <label class="form-label">強制退会</label>
            </div>
            <div class="coll-md-8-color edit-padding">
                <input style="transform: scale(1.2); " class="ms-3" type="checkbox"  name="本人確認済">
            </div>
        </div>
        <div class="button-submit" style="text-align: center;">
            <button id="submit_form" type="submit" class="base-button submit-button">一時保存</button>
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






// nhập liệu bảng 1
var tableData = [{
                'ギルド名':'吉田 優子 ',
                '都道府県':'佐賀県',
               '担当者': '吉田 優作',
                'クエスト数':'123',
                'Join人数':'12',
               
                },
                {
                'ギルド名':'藤田 田 ',
                '都道府県':'佐賀県',
               '担当者': '吉田 優作',
                'クエスト数':'123',
                'Join人数':'12',
                },
                {
               'ギルド名':'藤田 田',
                '都道府県':'佐賀県',
               '担当者': '吉田 優作',
                'クエスト数':'123',
                'Join人数':'12',
                },
                {'ギルド名':'藤田 田',
                '都道府県':'佐賀県',
               '担当者': '吉田 優作',
                'クエスト数':'123',
                'Join人数':'12',
                }
                ]

    var state = {
    'querySet': tableData,
    'page': 1,
    'rows': 4,
    'window': 10,
}


// buildTable()

function pagination(querySet, page, rows) {

    var trimStart = (page - 1) * rows
    var trimEnd = trimStart + rows

    var trimmedData = querySet.slice(trimStart, trimEnd)

    var pages = Math.round(querySet.length / rows);

    return {
        'querySet': trimmedData,
        'pages': pages,
    }
}

function pageButtons(pages) {
    var wrapper = document.getElementById('pagination-wrapper')

    wrapper.innerHTML = ``
	console.log('Pages:', pages)

    var maxLeft = (state.page - Math.floor(state.window / 2))
    var maxRight = (state.page + Math.floor(state.window / 2))

    if (maxLeft < 1) {
        maxLeft = 1
        maxRight = state.window
    }

    if (maxRight > pages) {
        maxLeft = pages - (state.window - 1)
        
        if (maxLeft < 1){
        	maxLeft = 1
        }
        maxRight = pages
    }
    
    

    for (var page = maxLeft; page <= maxRight; page++) {
    	wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-info">${page}</button>`
    }

    if (state.page != 1) {
        wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-info">&#171; 初め</button>` + wrapper.innerHTML
    }

    if (state.page != pages) {
        wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-info">最後 &#187;</button>`
    }

    $('.page').on('click', function() {
        $('#table-body').empty()

        state.page = Number($(this).val())

        buildTable()
    })

}

function buildTable() {
    var table = $('#table-body')

    var data = pagination(state.querySet, state.page, state.rows)
    var myList = data.querySet

    for (var i = 1 in myList) {
        //Keep in mind we are using "Template Litterals to create rows"
        var row = `<tr onclick="location.href='/admin/AC30'">
                  <td>${myList[i].ギルド名}</td>
                  <td>${myList[i].都道府県}</td>
                  <td>${myList[i].担当者}</td>
                  <td style="text-align: center; color: #2F6FC8; text-decoration-line:underline;">${myList[i].クエスト数}</td>
                  <td style="text-align: center; color: #2F6FC8; text-decoration-line:underline;">${myList[i].Join人数}</td>
                  </tr>
                  `
        table.append(row)
    }

    pageButtons(data.pages)
}





$(document).ready(function() {
   
    buildTable();
});
</script>
@endsection