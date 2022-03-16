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
            <li class="breadcrumb-item"><a>メッセージ一覧</a></li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form onsubmit="return false">
    <div class="container search-form">
        <div class="row" style="padding-left:2%">
            <div class="col-lg-6">
                <div class="row">
                    <label for="inputEmail3" class="col-lg-3 fw col-form-label">ユーザー名</label>
                    <div class="col-lg-8 fw">
                        <input type="email" class="form-control" placeholder="ユーザー名を入力" id="email"
                            name="ユーザー名を入力">
                    </div>
                </div>
            </div>
            
        </div>

        

        <div class="row action-button-group">
            <button id="reset_form_button"  type="reset" class="base-button cancel-button" name="クリア">クリア</button>
            <button id="search_button" class="base-button submit-button" name="検索">検索</button>
        </div>

        <div class="row table-action-button-group">
            <label class="w-25 me-auto mt-5">64件中の10件表示</label>
            <button class="base-button action-button" onclick="location.href='/admin/MG11'"  name="+新規メッセージ ">+新規メッセージ</button>
        </div>
        <div class="row">
            <table class="table table-bordered" id="table_data">
               
                <tr>
                    <th class="w-25">ユーザー名</th>
                    <th class="">メッセージ</th>
                    <th class="w-25 text-center">メッセージ日時</th>
                </tr>
            </table>
        </div>
        
    </div>
     <div class="container">
        <div id="pagination-wrapper" class="text-end mt-lg-5"></div>
    </div>
</form>

<script src="/admin/js/pages/MG10.js"></script>
@endsection