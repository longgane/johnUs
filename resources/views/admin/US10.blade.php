@extends('layout.index')
@section('stylesheet')
{{-- ngày --}}
<link rel="stylesheet" href="/admin/css/bootstrap-datepicker3.min.css">
{{-- link table --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>ユーザー一覧</a></li>
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
                    <label class="col-lg-3 fw col-form-label">ユーザー名</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="クエスト名を入力" name="ユーザー名">
                    </div>
                </div>
                <div class="row">
                    <label for="inputState" class="form-label col-lg-3">都道府県</label>
                    <div class="col-lg-8">
                        <input type="text" name="都道府県" class="form-control" placeholder="都道府県を入力" id="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <label class="col col-lg-3">募集期間</label>
                    <div class="col col-lg-8" style="display: flex;padding-left: 10px;">
                        <input  type="checkbox" style="transform: scale(1.5);" value="済" name="済" id="済"><label for="済" class="me-1 w-25"> 済 </label>
                   
                        <input type="checkbox" style="transform: scale(1.5);" value="未" name="未" id="未"><label for="未"> 未 </label>
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
        </div>

        

        <div class="row action-button-group">
            <button type="reset" id="reset_form_button"  class="base-button cancel-button" name="クリア">クリア</button>
            <button id="search_button" class="base-button submit-button" name="検索">検索</button>
        </div>

        <div class="row table-action-button-group">
            <button class="base-button action-button" name="CSVダウンロード ">CSVダウンロード</button>
        </div>
        <div class="row">
            <table class="table table-bordered" id="table_data">
                <thead>
                <tr>
                    <th class="th200">ユーザー名</th>
                    <th class="th100">都道府県</th>
                    <th class="th100">身元確認</th>
                    <th class="th150">登録日</th>
                    <th class="th150" style="text-align: center">応募数</th>
                    <th class="th150" style="text-align: center">Join数</th>
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
    <script src="/admin/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker.vi.min.js"></script>
    <script src="/admin/js/pages/US10.js"></script>

@endsection