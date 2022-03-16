@extends('layout.index')
@section('stylesheet')
<link rel="stylesheet" href="/admin/css/bootstrap-datepicker3.min.css">
{{-- link table --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>応募者一覧</a></li>
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
                    <label class="col-lg-3 fw col-form-label">クエスト名</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="クエスト名を入力" name="クエスト名">
                    </div>
                </div>
                <div class="row" id="sandbox-container">
                    <div class="input-daterange input-group">
                        <label class="col col-lg-3" style="line-height:55px">公開日</label>
                        <div class="col coll-lg-3" style="margin-left: 10.188px;" >
                            <input type="text"  placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="start">
                                
                        </div>
                        <div class="col col-lg-1 divison-icon" style="text-align: center;line-height:55px;width:49px;">~</div>
                        <div class="col coll-lg-3">
                            <input type="text" placeholder="🗓&emsp;終了日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <label for="inputState" class="form-label col-lg-3">ユーザー名</label>
                    <div class="col-lg-8">
                        <input type="text" name="ユーザー名" class="form-control" placeholder="ギルド名を入力" id="">
                    </div>
                </div>
                <div class="row">
                    <label class="col col-lg-3">ステータス</label>
                    <div class="col col-lg-8" style="display: flex; padding-left: 10px;" >
                        <input  type="checkbox" style="transform: scale(1.5);" value="選考中" name="選考中" id="選考中"><label for="選考中" class="me-1 w-25"> 選考中 </label>
                        <input  type="checkbox"style="transform: scale(1.5);" value="依頼済" name="依頼済" id="依頼済"><label for="依頼済" class="me-1 w-25"> 依頼済 </label>
                        <input type="checkbox"style="transform: scale(1.5);" value="お断り" name="お断り" id="お断り"><label for="お断り"> お断り </label>
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
            <button class="base-button action-button" name="CSVダウンロード ">CSVダウンロード</button>
        </div>
        <div class="row">
            <table class="table table-bordered" id="table_data">
                <tr>
                    <th class="th150"style="text-align: center">応募ステータス</th>
                    <th class="th150">応募日</th>
                    <th class="th300">クエスト名</th>
                    <th class="th150">ギルド名</th>
                    <th class="th150" style="text-align: center">応募ユーザー名</th>
                </tr>
            </table>
        </div>
        
    </div>
    <div class="container">
        <div id="pagination-wrapper" class="text-end mt-lg-5"></div>
    </div>
</form>
<script src="/admin/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker.vi.min.js"></script>
    <script src="/admin/js/pages/AP10.js"></script>
@endsection