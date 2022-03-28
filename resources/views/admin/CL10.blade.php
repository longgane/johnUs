@extends('layout.index')
@section('stylesheet')
{{-- link table --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('title')
<title>CL10</title>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>ギルド一覧</a></li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form name="myform" onsubmit="return false ">
    <div class="container search-form">
        <div class="row" style="padding-left:2%">
            <div class="col-lg-6">
                <div class="row">
                    <label class="col-lg-4 fw col-form-label">ギルド名</label>
                    <div class="col-lg-7">
                        <input type="text" class="form-control" placeholder="メールアドレスを入力" name="ギルド名">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <label class="col-lg-4 fw col-form-label">都道府県</label>
                    <div class="col-lg-7">
                        <input type="text" class="form-control" placeholder="熊本県" name="都道府県">
                    </div>
                </div>
            </div>
        </div>

       

        <div class="row action-button-group">
            <button type="reset" id="reset_form_button" class="base-button cancel-button" name="クリア">クリア</button>
            <button id="search_button" class="base-button submit-button" name="検索">検索</button>
        </div>

        <div class="row table-action-button-group">
            <button class="base-button action-button" onclick="location.href='/admin/CL20'">+ 新規作成</button>
            <button class="base-button action-button" name="CSVダウンロード ">CSVダウンロード</button>
        </div>
        <div class="row">
            <table class="table table-bordered" id="table_data">
                
                <tr>
                    <th class="th200">ギルド名</th>
                    <th class="th100">都道府県</th>
                    <th class="th200">担当者</th>
                    <th class="th100" style="text-align: center">クエスト数</th>
                    <th class="th100" style="text-align: center">Join人数</th>
                </tr>
                
                
            </table>
        </div>
        
    </div>
    <div class="container">
        <div id="pagination-wrapper" class="text-end mt-lg-5"></div>
    </div>
</form>


<script src="/admin/js/pages/CL10.js"></script>
@endsection