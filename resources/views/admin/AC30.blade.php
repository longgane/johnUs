@extends('layout.index')
@section('title')
<title>AC30</title>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/AC10">アカウント一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page">アカウント編集</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten">
    <form class="row-conten g-3 " onsubmit="return false">
        <div class="title-main-conten" style="margin-top: 0;">
            <p> アカウント情報</p>
        </div>


        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">氏名</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input class="form-control" name="氏名" placeholder="井田 佳子">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メールアドレス</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input name="メールアドレス" class="form-control" placeholder="ida@bibi.com" type="email">

            </div>
        </div>

        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">権限</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <select class="form-select" name="権限">
                    <option value="" selected>権限を選択</option>
                    <option value="管理者">管理者</option>
                    <option value="担当者">担当者</option>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class=" me-5 mt-3 text-end">
                <p><img src="/admin/image/Garbage.svg" alt=""> 削除する</p>
            </div>
        </div>

        <div class="button-submit">
            <button id="submit_form" type="submit" class="base-button submit-button">保存</button>
        </div>
    </form>
</div>

<script>

$(document).ready(function() {
  
});
</script>

@endsection