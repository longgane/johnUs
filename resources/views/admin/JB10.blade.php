@extends('layout.index')
@section('stylesheet')
{{-- link ngày --}}
<link rel="stylesheet" href="/admin/css/bootstrap-datepicker3.min.css">
{{-- link table --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>クエスト一覧</a></li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<form name="myform" onsubmit="return false ">
    <div class="container search-form">
        <div class="row" style="padding-left:2%">
            <div class="col-lg-6" >
                <div class="row">
                    <label class="col-lg-3 fw col-form-label">クエスト名</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="入力してください" name="クエスト名">
                    </div>
                </div>
           
                <div class="row" id="sandbox-container">
                    <div class="input-daterange input-group">
                        <label class="col col-lg-3" style="line-height:55px">掲載期間</label>
                        <div class="col coll-lg-3" style="margin-left: 10.188px;" >
                            <input type="text"  placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="start">
                                
                        </div>
                        <div class="col col-lg-1 divison-icon" style="text-align: center;line-height:55px;width:49px;">~</div>
                        <div class="col coll-lg-3">
                            <input type="text" placeholder="🗓&emsp;終了日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="end">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-lg-3 fw col-form-label">都道府県</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="入力してください" name="都道府県">
                    </div>
                </div>
            </div> 
            <div class="col-lg-6" >
                <div class="row">
                    <label class="col-lg-3 fw col-form-label">ギルド名</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="入力してください" name="ギルド名">
                    </div>
                </div>
            
                <div class="row">
                    <label class="col-lg-3 fw col-form-label">依頼主名</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="入力してください" name="依頼主名">
                    </div>
                </div>
            
                <div class="row">
                    <label  class="col-lg-3 fw col-form-label" >ステータス</label>
                    <div class="col-lg-8" style="padding-left: 10px;">
                        <input type="checkbox" style="transform: scale(1.5);"  name="作成中" value="作成中" id="作成中"> <label for="作成中"> 作成中 </label> &emsp;
                        <input type="checkbox" style="transform: scale(1.5);"  name="承認待ち" value="承認待ち" id="承認待ち"> <label for="承認待ち"> 承認待ち </label> &emsp;
                        <input type="checkbox" style="transform: scale(1.5);"  name="承認済" value="承認済" id="承認済"> <label for="承認済"> 承認済 </label> <br>   
                        <input type="checkbox" style="transform: scale(1.5);"  name="掲載中" value="掲載中" id="掲載中"> <label for="掲載中"> 掲載中 </label> &emsp;
                        <input type="checkbox" style="transform: scale(1.5);"  name="掲載終了" value="掲載終了" id="掲載終了"> <label for="掲載終了"> 掲載終了 </label> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row action-button-group">
            <button type="reset" id="reset_form_button" class="base-button cancel-button" name="クリア">クリア</button>
            <button id="search_button" class="base-button submit-button" name="検索">検索</button>
        </div>

        <div class="row table-action-button-group">
            <button class="base-button action-button" onclick="location.href='/admin/JB20'">+ 新規作成</button>
            <button class="base-button action-button" name="CSVダウンロード ">CSVダウンロード</button>
        </div>


        <div class="row">
            <table class="table table-bordered" id="table_data">
                <thead>
                <tr>
                    <th class="th300">クエスト名</th>
                    <th class="th100">都道府県</th>
                    <th class="th100">ギルド名 </th>
                    <th class="th150">依頼主</th>
                    <th class="th150">ステータス</th>
                    <th class="th100">掲載期間</th>
                    <th class="th100" style="text-align: center">Join人数</th>
                </tr>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>
        
    </div>
    <div class="container">
        <div id="pagination-wrapper" class="text-end mt-lg-5"></div>
    </div>
</form>
{{-- ngày --}}
    <script src="/admin/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker.vi.min.js"></script>
    {{-- ---------------- --}}
    <script src="/admin/js/pages/JB10.js"></script>

@endsection