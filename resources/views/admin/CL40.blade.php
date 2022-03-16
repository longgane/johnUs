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
            <li class="breadcrumb-item"><a href="/admin/FD10">ギルド一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page">ギルド詳細</li>
        </ol>
    </nav>
</div>
@endsection


@section('content')
<div class="main-conten fund-screen">
    <div class="menu-content">
        <ul>
            <li>
                <a  href="CL30?fund_id={{ request()->get('fund_id') }}"> 基本情報</a>
            </li>
            <li>
                <a class="color-menu" href="CL40?fund_id={{ request()->get('fund_id') }}">クエスト</a>
            </li>
        </ul>
    </div>
    <div class="title-main-conten">
        <p>伊万里市　の クエスト</p>

        <div class="option">
            <button class="base-button action-button" onclick="location.href='/admin/CL20'" for=""><b> + 新規作成 </b></button>
        </div>
    </div>  

    <!-- Phan Contten ben phai  -->
    <form name="myform" onsubmit="return false ">
        <div class="container search-form mt-lg-5">
           
            <div class="row">
                <table class="table table-bordered" id="table_data">
                    
                    <tr>
                        <th class="th300">クエスト名</th>
                        <th class="th150">依頼主</th>
                        <th class="th150">ステータス</th>
                        <th class="th100">掲載期間</th>
                        <th class="th100" style="text-align: center">Join人数</th>
                    </tr>
                    
                </table>
            </div>
            
        </div>
        <div class="container">
            <div id="pagination-wrapper" class="text-end mt-lg-5"></div>
        </div>
    </form>
    <!-- Ket thuc phan Contten  -->
</div>



<script src="/admin/js/pages/CL40.js"></script>
@endsection