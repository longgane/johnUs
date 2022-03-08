@extends('layout.index')

@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/NE10">お知らせ一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page">お知らせ編集</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten NE20">
    <!-- điền form -->
    <form class="row-conten g-3" id="form">
        <div class="option">
            <button id="open_popup_preview" class="option-left base-button submit-button">
                プレビュー
            </button>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label for="タイトル" class="form-label">タイトル</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <input class="form-control " name="タイトル" placeholder="タイトルを入力してください" type="text">
            </div>
        </div>
        <div class="form-group" style="align-items: baseline;">
            <div class="coll-md-3 ">
                <label for="本文" class="form-label">本文</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding ">
                <div class="h70">
                    <textarea class="form-control h70" name="本文" placeholder="タイトルを入力してください" type="text"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">添付ファイル</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8 edit-padding">
                <div class="form-both1">
                    <input type="file" name="添付ファイル" id="choose-file" />
                </div><br>
                <p class="center25">※ファイルサイズ25MBまで</p>
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">公開期間</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding datetime-picker" onclick="date1()">
                <div class="w30">
                    <input class="form-control w30" name="運用期間_from" placeholder="🗓&emsp; 開始日を入力" id="txtfrom">
                </div>
                <div class="or">〜</div>
                <div class="w30">
                    <input class="form-control w30" name="運用期間_to" placeholder=" 🗓&emsp; 終了日を入力" id="txtto">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="coll-md-3 ">
                <label for="公開先" class="form-label">公開先</label>
                <div class="nhan">必須</div>
            </div>
            <div class="coll-md-8" style="padding-left: 1rem;">
                <input id="1-option" value="新規" name="公開先" type="radio"> <label for="1-option"><b> 全員（マイページ＋TOPページ）
                    </b> </label>
                <input id="2-option" value="継続" name="公開先" type="radio"> <label for="2-option"> <b> 会員マイページのみ
                    </b></label>
            </div>
        </div>

        <div class="button-submit">
            <button id="submit_form" type="submit" class="base-button submit-button">保存</button>
        </div>
    </form>
</div>
<!-- message -->

<!-- Popup upload CSV fun results | FD45_ファンド（結果アップロード） -->
<div class="modal" id="popup_review_notice">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="container">
                <div class="row pop-close m-0 float-end"><label><img id="closeimg" class="p-4" src="/image/x.svg"
                            alt=""></label></div>
                <div class="row pop_contai m-0 px-4">
                    <div class="row pop_title ">
                        <h3 class="col col-lg-12"><b> 練馬区第一号の募集を開始しました </b></h3>
                        <p class="col col-4">2021/12/14 17:32</p>
                        <hr>
                    </div>
                    <div class="row pop_conten ps-3 px-2 pb-5">
                        <p>
                            お客様各位<br />
                            <br />
                            日頃より不動産投資型クラウドファンディングサイト「Jointo α」をご利用いただき厚く御礼申し上げます。<br />
                            以下期日より新規ファンドの抽選申込受付を開始いたしますのでお知らせします。<br />
                            <br />
                            ----------------------------------------------------------------------<br />
                            第20号「アルファアセットファンド京都祇園第4回」<br />
                            　2022年1月17日（月）12：00（正午）抽選申込受付開始（2022年1月18日（火）17：59受付終了）<br />
                            <br />
                            第21号「アルファアセットファンド新梅田第2回」<br />
                            　2022年2月15日（火）12：00（正午）抽選申込受付開始（2022年2月16日（水）17：59受付終了）<br />
                            <br />
                            第22号「アルファアセットファンド学芸大学第2回」<br />
                            　2022年3月15日（火）12：00（正午）抽選申込受付開始（2022年3月16日（水）17：59受付終了）<br />
                            <br />
                            ※「抽選方式」での受付となります。<br />
                            抽選方式については募集物件の「ファンド詳細」の「FAQ」にて記載させていただきました。<br />
                            お申込みを検討される場合は必ずご確認ください。<br />
                            ----------------------------------------------------------------------<br />
                            <br />
                            ＜第20号、第21号、第22号プロジェクトについて＞<br />
                            <br />
                            プロジェクトについては、それぞれ以下区分所有マンション1室の運用によって得られる賃料収入を原資として、投資家の皆様に分配を行います。<br />
                            <br />
                            ＜各ファンド情報＞<br />
                            ・第20号ファンド　対象物件名「プレサンス祇園宮川町」<br />
                            ・第21号ファンド　対象物件名「モンテベルデ新梅田」<br />
                            ・第22号ファンド　対象物件名「アールヴェール学芸大学」<br />
                            <br />
                            詳細については「ファンド一覧」-「ファンド詳細」にてご覧ください。<br />
                            <br />
                            ※出資上限金額はお一人様100万円までとなります。<br />
                            ※投資家の皆様へ利益を優先的に分配する仕組みを採用しているため、比較的安定した収益が見込める投資商品となっております。<br />
                            ※抽選方式での申込受付となります、当選結果については募集終了日の翌日12：00までにメールにて通知いたします。<br />
                            ※ファンド成立までに当選者からのキャンセルが出た場合は事務局にて再抽選を実施いたします。<br />
                            <br />
                            ◆-----------------------------------------◆<br />
                            <br />
                            本サイト上にて募集詳細等をよくご確認の上、申込手続きをお願い致します。<br />
                            <br />
                            ◆-----------------------------------------◆<br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popup upload CSV fun results | FD45_ファンド（結果アップロード） -->

<script>
$(document).ready(function() {
    $('#open_popup_preview').click(function(event) {
        event.preventDefault();
        var myModal = new bootstrap.Modal(document.getElementById('popup_review_notice'));
        myModal.show();
    });

    $("#form").submit(function(event) {
        event.preventDefault();
        let data = [];

        /**
         * Get data from Form
         */
        $("#form .form-group").each(function(index, element) {
            let input = $(element).find('input, select, textarea, radio');

            input.each(function(index, element) {
                var dataType = $(element).attr('type') || 'text';
                if (dataType === 'radio') {
                    dataType = 'text';
                }

                if (dataType === 'file') {
                    let list_files = $(element).prop('files');

                    for (let i = 0; i < list_files.length; i++) {
                        data.push({
                            'column_name': $(element).attr('name'),
                            'data_type': dataType,
                            'value': list_files[i],
                        });
                    }
                } else {
                    data.push({
                        'column_name': $(element).attr('name'),
                        'data_type': dataType,
                        'value': $(element).val(),
                    });
                }
            });
        });

        /**
         * Filter out empty data
         */
        data = data.filter(function(item) {
            return item.value !== '';
        });

        // Set default status.
        data.push({
            'column_name': 'ファンドステータス',
            'data_type': 'text',
            'value': '作成中',
        });

        console.log(data);

        $.ajax({
            url: '/ajax/fund.create',
            data: JSON.stringify(data),
            type: 'POST',
            contentType: 'application/json',
            success: function() {

            }
        });
    });

    $("#txtfrom").datepicker({
        numberOfMonths: 1,
        dateFormat: 'yy/mm/dd',
        onSelect: function(selectdate) {
            var dt = new Date(selectdate);
            dt.setDate(dt.getDate() + 1)
            $("#txtto").datepicker("option", "minDate", dt);
        }
    });

    $("#txtto").datepicker({
        numberOfMonths: 1,
        dateFormat: 'yy/mm/dd',
        onSelect: function(selectdate) {
            var dt = new Date(selectdate);
            dt.setDate(dt.getDate() - 1)
            $("#txtfrom").datepicker("option", "maxDate", dt);
        }
    });

    $("#txtfrom2").datepicker({
        numberOfMonths: 1,
        dateFormat: 'yy/mm/dd',
        onSelect: function(selectdate) {
            var dt = new Date(selectdate);
            dt.setDate(dt.getDate() + 1)
            $("#txtto2").datepicker("option", "minDate", dt);
        }
    });

    $("#txtto2").datepicker({
        numberOfMonths: 1,
        dateFormat: 'yy/mm/dd',
        onSelect: function(selectdate) {
            var dt = new Date(selectdate);
            dt.setDate(dt.getDate() - 1)
            $("#txtfrom2").datepicker("option", "maxDate", dt);
        }
    });

    $("#txtfrom3").datepicker({
        numberOfMonths: 1,
        dateFormat: 'yy/mm/dd',
        onSelect: function(selectdate) {
            var dt = new Date(selectdate);
            dt.setDate(dt.getDate() + 1)
            $("#txtto3").datepicker("option", "minDate", dt);
        }
    });

    $("#txtto3").datepicker({
        numberOfMonths: 1,
        dateFormat: 'yy/mm/dd',
        onSelect: function(selectdate) {
            var dt = new Date(selectdate);
            dt.setDate(dt.getDate() - 1)
            $("#txtfrom3").datepicker("option", "maxDate", dt);
        }
    });



    $(function() {
        $("#txtdate").datepicker({
            numberOfMonths: 1,
            dateFormat: 'yy/mm/dd',
            onSelect: function(selectdate) {
                var dt = new Date(selectdate);
            }
        });
    });
});
</script>
@endsection