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
            <li class="breadcrumb-item"><a href="/admin/FD10">ギルド一覧</a></li>
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
                <a  href="CL30?fund_id={{ request()->get('fund_id') }}"> 基本情報</a>
            </li>
            <li>
                <a class="color-menu" href="CL40?fund_id={{ request()->get('fund_id') }}">クエスト</a>
            </li>
        </ul>
    </div>
    <div class="title-main-conten">
        <p>伊万里市　の クエスト</p>

        <div class="option">
            <button class="base-button action-button" onclick="location.href='/admin/CL20'" for=""><b> + 新規作成 </b></button>
        </div>
    </div>  

    <!-- Phan Contten ben phai  -->
    <form id="table_data" name="myform" onsubmit="return false" class="search-form">
        <div class="container">
            <div class="row table-action-button-group">
               
            </div>
            <div class="row">
                <table class="table table-bordered" id="table_data">
                    <thead>
                    <tr>
                        <th class="th300">クエスト名</th>
                        <th class="th150">依頼主</th>
                        <th class="th150">ステータス</th>
                        <th class="th100">掲載期間</th>
                        <th class="th100" style="text-align: center">Join人数</th>
                    </tr>
                    </thead>
                    <tbody id="table-body">
    
                    </tbody>
                </table>
            </div>
           
        </div>
        <div class="container">
            <div id="pagination-wrapper"></div>
        </div>
    </form>
    <!-- Ket thuc phan Contten  -->
</div>



<script>
// điền data table

var tableData = [{
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'1',
               
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'2',
                },
                {
               'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'3',
                },
                {
               'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'4',
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'5', 
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'6',
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'7',
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'8',
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'9',
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'10',
                },
                {
                'クエスト名':'お祭り盛り上げてくれる人募集',
                '依頼主':'よさよさお祭り協会',
               'ステータス': '承認待ち',
                '掲載期間':'2021/10/1〜<br>2021/10/30',
                'Join人数':'11',
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
        var row = `<tr>
                  <td>${myList[i].クエスト名}</td>
                  <td>${myList[i].依頼主}</td>
                  <td>${myList[i].ステータス}</td>
                  <td>${myList[i].掲載期間}</td>
                  <td style="color: #2F6FC8; text-decoration-line:underline; text-align:center">${myList[i].Join人数}</td>
                  `
        table.append(row)
    }

    pageButtons(data.pages)
}


//


$(document).ready(function() {

    buildTable();
    /**
     * Popup mamage lottery information
     */
    $('.edit-lottery-result-btn').click(function() {
        var myModal = new bootstrap.Modal(document.getElementById('FD41_input_lottery_result_modal'));
        myModal.show();
    });

    /**
     * Cacel application
     */
    $('.cancel-application-btn').click(function() {
        var myModal = new bootstrap.Modal(document.getElementById('popup_confirm_cancel_application'));
        myModal.show();
    });

    /**
     * Open popup upload CSV fun results application
     */
    $('#button_upload_csv_fund_results').click(function() {
        var myModal = new bootstrap.Modal(document.getElementById('popup_upload_fund_results'));

        $('#popup_upload_fund_results_step_input').show();
        $('#popup_upload_fund_results_on_success').hide();
        $('#popup_upload_fund_results_header').text('当選結果アップロード');
        $('#fund_result_file_input').val(null);

        myModal.show();
    });

    let fund_result_file;

    $('#fund_result_file_input').on('change', function(input) {
        if (input.target.files && input.target.files[0]) {
            fund_result_file = input.target.files[0];
        }
    });

    $('#upload_fund_result_btn').click(function() {
        if (!fund_result_file) return;

        let FUND_ID = $.urlParam('fund_id');

        var formData = new FormData();
        formData.append('file', fund_result_file);
        $.ajax({
                url: "/ajax/fund.upload_csv.application/" + FUND_ID,
                method: 'POST',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
            })
            .done(function() {
                $('#popup_upload_fund_results_step_input').hide();
                $('#popup_upload_fund_results_on_success').removeClass('d-none').fadeIn();
                $('#popup_upload_fund_results_header').text('');
            });
    });

});
</script>
@endsection