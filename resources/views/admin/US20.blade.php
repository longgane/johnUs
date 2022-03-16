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
                
            </table>
        </div>
        <div class="container">
            <div id="pagination-wrapper" class="text-end mt-lg-5"></div>
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
            <table class="table table-bordered" id="table_data1">
                <tr>
                    <th class="th150">応募ステータス</th>
                    <th class="th150" style="text-align: center;">応募日</th>
                    <th class="th300">クエスト名</th>
                    <th class="th150" style="text-align: center;">ギルド名</th>
                    <th class="th150" style="text-align: center;">感謝ポイント</th>
                </tr>
               
            </table>
        </div>
        <div class="container">
            <div id="pagination-wrapper1" class="text-end mt-lg-5"></div>
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
<script src="/admin/js/pages/US20.js"></script>
<script src="/admin/js/pages/US20_1.js"></script>
<script src="/admin/js/pages/AC20.js"></script>

@endsection