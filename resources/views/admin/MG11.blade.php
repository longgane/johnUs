@extends('layout.index')
@section('stylesheet')
<link rel="stylesheet" href="/admin/css/MG11.css?v={{rand(10,1000)}}">


@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>メッセージ一覧</a></li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form onsubmit="return false">
    <div class="container search-form">
        <div class="row w-100 address-bar m-1  px-5">
            <div class="col col-lg-2 ">宛先</div>
            <div class="col ">
                <div class="dropdown-conten">
                    <div class="drop-select" id="selectField">
                        <span class="select" id="selectText">フリーランスを選択</span>
                        <i class="fas fa-caret-down" id="dropdown_icon"></i>
                    </div>
                    
                <div class="drop_hide" id="drop_list">
                    <div class="drop_search pe-4 me-1"><input type="text" class="form-control " placeholder="た" name="た"></div>
                        <div class="drop_scroll">
                            <div class="drop_option" onclick="location.href='/admin/MG20'">
                                <div class="col col-1 d-inline"><input type="checkbox" name="" id=""></div>
                                <div class="col pe-3 d-inline "><img src="/admin/image/avt.svg" alt=""></div>
                                <div class="col col-3 d-inline">田中 優</div>
                            </div>
                            <div class="drop_option" onclick="location.href='/admin/MG20'">
                                <div class="col col-1 d-inline"><input type="checkbox" name="" id=""></div>
                                <div class="col pe-3 d-inline "><img src="/admin/image/avt.svg" alt=""></div>
                                <div class="col col-3 d-inline">田中 優</div>
                            </div><div class="drop_option" onclick="location.href='/admin/MG20'">
                                <div class="col col-1 d-inline"><input type="checkbox" name="" id=""></div>
                                <div class="col pe-3 d-inline "><img src="/admin/image/avt.svg" alt=""></div>
                                <div class="col col-3 d-inline">田中 優</div>
                            </div><div class="drop_option" onclick="location.href='/admin/MG20'">
                                <div class="col col-1 d-inline"><input type="checkbox" name="" id=""></div>
                                <div class="col pe-3 d-inline "><img src="/admin/image/avt.svg" alt=""></div>
                                <div class="col col-3 d-inline">田中 優</div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row m-auto"> 
            <div class="col-dash_one"></div>
            <div class="col-date">10/2/2022</div>
            <div class="col-dash_two"></div>
        </div>   
        <div class="row m-1">
            <div class="form_message px-5">
                <div class="row justify-content-between">
                    <div class="col col-5"><img src="/admin/image/link.svg" class="pe-3" alt=""> ※25MB以下のファイルを選択してください</div>
                    <div class="col col-2 text-end"><button class="message_send">送信</button></div>
                </div>
                <div class="row pe-3 pb-3"><textarea name="" id="" placeholder="メッセージを入力" class="form-control p-4" cols="10" rows="5"></textarea></div>
            </div>    
        </div>    
    </div>
</form>

<script>
function loadListUsers() {
    $.get("/ajax/user.list", function(data) {
        let items = '';

        data.result.forEach(function(data) {

            items += `
                <tr>
                    <td><a href="/admin/US20?user_id=${data['id']}">${data['お名前'] || '未定義'}</a></td>
                    <td>${data['固定電話番号'] || '-'}</td>
                    <td>${data['携帯電話番号'] || '-'}</td>
                    <td class="text-center">${data['本人確認日'] || '-'}</td>
                    <td class="text-center">${data['登録日'] || '-'}</td>
                    <td class="text-center">${data['申込数合計']}</td>
                    <td class="text-center">${data['投資数合計']}</td>
                </tr>
                `
        });

        $("#table_data").find("tr:gt(0)").remove();
        $('#table_data').append(items);
    });
}

$(document).ready(function() {
    loadListUsers();
});
</script>
<script src="/admin/js/tag-select.js"></script>

<script>
    var selectField = document.getElementById("selectField");
    var selectText = document.getElementById("selectText");
    var list = document.getElementById("drop_list");
    var icon = document.getElementById("dropdown_icon");
    var options = document.getElementsByClassName("drop_option");

    // for(option of options){
    //     option.onclick = function(){
    //         selectText.innerHTML = this.textContent;
    //     }
    // }

    selectField.onclick = function(){
        list.classList.toggle("drop_hide");
        icon.classList.toggle("rotate");
    }

    
       
</script>
@endsection