@extends('layout.index')

@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>顧客一覧</a></li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form name="myform" onsubmit="return false">
    <div class="container search-form">
        <div class="row" style="padding-left:2%">
            <div class="col-lg-6">
                <div class="row">
                    <label for="inputEmail3" class="col-lg-4 fw col-form-label">タイトル</label>
                    <div class="col-lg-7">
                        <input type="text" class=" form-control" placeholder="入力してください" name="タイトル" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row datetime-picker">
                    <label class="col col-lg-3">公開期間</label>
                    <div class="col col-lg-4">
                        <input class="form-control" placeholder="🗓&emsp;開始日を入力" type="text" name="公開期間_from"
                            id="txtfrom">
                    </div>
                    <div class="col col-lg-1 divison-icon">~</div>
                    <div class="col col-lg-4">
                        <input class="form-control" placeholder="🗓&emsp;終了日を入力" type="text" name="公開期間_to" id="txtto">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <label for="inputState" class="col-lg-2 fw col-form-label">宛先</label>
            <div class="col-lg-10 d-flex align-items-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="宛先"
                        value="全員（マイページ+TOPページ）">
                    <label class="form-check-label" for="inlineCheckbox1" checked>全員（マイページ+TOPページ）</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="宛先" value="会員マイページのみ">
                    <label class="form-check-label" for="inlineCheckbox2">会員マイページのみ</label>
                </div>
            </div>
        </div>

        <div class="row action-button-group">
            <button class="base-button cancel-button" name="クリア">クリア</button>
            <button class="base-button submit-button" name="検索">検索</button>
        </div>

        <div class="row table-action-button-group">
            <button  onclick="location.href='/admin/NE20'" class="base-button action-button" name="新規作成">新規作成</button>
        </div>

        <div class="row tb">
            <table class="table table-bordered" id="table_data">
                <tr>
                    <th class="time text-start">公開期間</th>
                    <th class="text-start">宛先</th>
                    <th class="text-start">タイトル</th>
                </tr>
                <tr class="row-click-able" onclick="location.href='./NE20'">
                    <td class="time text-start">2021/10/12 〜 2021/10/31</td>
                    <td class="text-start">全員（マイページ+TOPページ）</td>
                    <td class="text-start">分配金入金のお知らせ</td>
                </tr>
                <tr class="row-click-able" onclick="location.href='./NE20'">
                    <td class="time text-start">2021/10/12 〜 2021/10/31</td>
                    <td class="text-start">全員（マイページ+TOPページ）</td>
                    <td class="text-start">分配金入金のお知らせ</td>
                </tr>
            </table>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    
});
</script>
@endsection