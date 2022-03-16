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
            <li class="breadcrumb-item"><a>アカウント一覧</a></li>
        </ol>
    </nav>
</div>
@endsection


@section('content')
<!-- Phan Contten ben phai  -->
<form name="myform" id="form" onsubmit="return false">
    <div class="container search-form">
        <div class="row" style="padding-left:2%">
            <div class="col-lg-6">
                <div class="row">
                    <label for="inputEmail3" class="col-lg-3 fw col-form-label">氏名</label>
                    <div class="col-lg-8">
                        <input type="text" id="myInput_name"  class="form-control" placeholder="氏名を入力" name="氏名" >
                    </div>
                </div>

                <div class="row">
                    <label for="inputEmail3" class="col-lg-3 fw col-form-label">メールアドレス</label>
                    <div class="col-lg-8">
                        <input type="text" id="myInput_mail"  class="form-control" placeholder="メールアドレスを入力" name="メールアドレス" data-search-operator="like">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <label for="inputState" class="col col-lg-3">権限</label>
                    <div class="col-lg-8">
                        <select id="inputState" class="form-select"  name="権限" data-search-operator="=">
                            <option value="" selected>権限を選択</option>
                            <option value="管理者">管理者</option>
                            <option value="担当者">担当者</option>
                        </select>
                    </div>
                </div>

                <div class="row "  id="sandbox-container">
                    <div class="input-daterange input-group">
                        <label class="col col-lg-3" style="line-height:55px">登録日</label>
                        <div class="col coll-lg-3" style="margin-left: 10.188px;" >
                            <input type="text"  placeholder="🗓&emsp;開始日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="start" data-search-operator=">=">
                                
                        </div>
                        <div class="col col-lg-1 divison-icon" style="text-align: center;line-height:55px;width:49px;">~</div>
                        <div class="col coll-lg-3">
                            <input type="text" placeholder="🗓&emsp;終了日を入力" autocomplete="off" class="form-control" style="margin-left: 0px;" name="end" data-search-operator=">=">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row action-button-group">
            <button type="reset" class="base-button cancel-button" name="クリア" id="reset_form_button" >クリア</button>
            <button class="base-button submit-button" id="search_button" name="検索">検索</button>
        </div>

        <div class="row table-action-button-group">
            <button  onclick="location.href='/admin/AC20'" class="base-button action-button" name="新規作成">新規作成</button>
        </div>
        <div class="row">
            <table class="table table-bordered" id="table_data">
               
                <tr>
                    <th class="text-start">氏名</th>
                    <th class="text-start">メールアドレス</th>
                    <th class="text-center">権限</th>
                    <th class="text-center">登録日</th>
                    <th class="text-start">最終更新者</th>
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
    <script src="/admin/js/pages/AC10.js"></script>
@endsection