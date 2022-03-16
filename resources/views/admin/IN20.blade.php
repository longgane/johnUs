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
                <input type="text" class="form-control" name="お知らせタイトル" placeholder="お知らせタイトルを入力">
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
                <textarea class="form-control" name="お知らせ内容" placeholder="お知らせ内容を入力"></textarea>
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
       
        <div class="button-submit" style="text-align: center;">
            <button id="submit_form" type="submit" class="base-button submit-button">保存する</button>
        </div>
    </form>
</div>

    <script src="/admin/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker.vi.min.js"></script>
    <script src="/admin/js/image-file-uploader.js"></script>
    <script src="/admin/js/pages/IN20.js"></script>

@endsection