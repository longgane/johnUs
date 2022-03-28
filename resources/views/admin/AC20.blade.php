@extends('layout.index')
@section('title')
<title>AC20</title>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/AC10">アカウント一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page">アカウント新規作成</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten">
    <form class="row-conten g-3" id="form" onsubmit="return false">
        <div class="title-main-conten" style="margin-top: 0;">
            <p> アカウント情報</p>
        </div>

        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">氏名</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input class="form-control" name="氏名" placeholder="氏名を入力">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メールアドレス</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input name="メールアドレス" class="form-control" placeholder="メールアドレスを入力" type="email">

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

        <div class="button-submit">
            <button id="submit_form" type="submit" class="base-button submit-button">招待メールを送る</button>
        </div>
    </form>
</div>
<script src="/admin/js/pages/AC20.js"></script>

@endsection