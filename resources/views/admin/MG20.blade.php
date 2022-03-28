@extends('layout.index')
@section('stylesheet')
<link rel="stylesheet" href="/admin/css/MG11.css?v={{rand(10,1000)}}">
@endsection
@section('title')
<title>MG20</title>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/MG11">メッセージ一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a>佐藤 愛美さんとのメッセージ</a></li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form id="form" onsubmit="return false">
    <div class="container search-form">
        <div class="row w-100 address-bar m-1  px-5">
            <div class="col col-1 "><img src="/admin/image/avt2.svg" width="55px" height="55px" alt=""></div>
            <div class="col fw-bold">佐藤 愛美</div>
        </div>
        <div class="row m-auto"> 
            <div class="col-dash_one"></div>
            <div class="col-date">10/2/2022</div>
            <div class="col-dash_two"></div>
        </div>   
        {{-- MESSAGE CONTENT--}}
        <div class="row">
            <div class="row message_head">
                <div class="col col-1 text-center message_head-avt"><img src="/admin/image/avt2.svg" width="47px" height="47px" alt=""></div>
                <div class="col message_head-name text-name_user" >佐藤 愛美</div>
                <div class="col text-end message_head-time">14:22</div>
            </div>
            <div class="row message_content px-3 ms-3">
                <p>お世話になります、佐藤です。 <br>

                    ご連絡いただきありがとうございます。ぜひ参加させていただけたらと思います！</p>
            </div>
        </div>
        <div class="row">
            <div class="row message_head">
                <div class="col col-1 text-center message_head-avt"><img src="/admin/image/avt.svg" width="47px" height="47px" alt=""></div>
                <div class="col message_head-name text-name_admin" >佐藤 愛美</div>
                <div class="col text-end message_head-time">14:47</div>
            </div>
            <div class="row message_content px-3 ms-3">
                <p>お世話になっております。では、ZoomのURLはこちらになります。
                    <br>
                    https://zoom.us/usfufocakogoagakjoiduare/godaujkirodao
                    </p>
            </div>
        </div>
        <div class="row">
            <div class="row message_head">
                <div class="col col-1 text-center message_head-avt"><img src="/admin/image/avt2.svg" width="47px" height="47px" alt=""></div>
                <div class="col message_head-name text-name_user" >佐藤 愛美</div>
                <div class="col text-end message_head-time">15:00</div>
            </div>
            <div class="row message_content px-3 ms-3">
                {{-- <p>承知いたしました。引き続きどうぞよろしくお願いいたします。</p> --}}
            </div>
        </div>
        {{--  --}}
        <div class="row m-1 form-group" style="padding-left: 0px;">
            <div class="form_message px-5 ">
                <div class="row justify-content-between">
                    <div class="col col-5"><img src="/admin/image/link.svg" class="pe-3" alt=""> ※25MB以下のファイルを選択してください</div>
                    <div class="col col-2 text-end"><button id="submit_form" type="submit" class="message_send">送信</button></div>
                </div>
                <div class="row pe-3 pb-3"><textarea name="message" id="" placeholder="メッセージを入力" class="form-control p-4" cols="10" rows="5"></textarea></div>
            </div>    
        </div>    
    </div>
</form>
<script src="/admin/js/pages/CL20.js"></script>

@endsection