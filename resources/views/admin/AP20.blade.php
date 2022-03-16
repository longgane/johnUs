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


@endsection