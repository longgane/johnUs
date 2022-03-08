@extends('layout.index')

@section('breadcrumb')
<div id="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/AC10">アカウント一覧</a></li>
            <li class="breadcrumb-item active" aria-current="page">アカウント新規作成</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<div class="main-conten">
    <form class="row-conten g-3 " onsubmit="return false">
        <div class="title-main-conten" style="margin-top: 0;">
            <p> アカウント情報</p>
        </div>

        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">氏名</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input class="form-control" name="氏名" placeholder="氏名を入力">
            </div>
        </div>
        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">メールアドレス</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">
                <input name="メールアドレス" class="form-control" placeholder="メールアドレスを入力" type="email">

            </div>
        </div>


        <div class="form-group">
            <div class="coll-md-3 ">
                <label class="form-label">権限</label>
                <div class="nhan">必須</div>

            </div>
            <div class="coll-md-8 edit-padding">

                <select class="form-select" name="権限">
                    <option value="" selected>権限を選択</option>
                    <option value="管理者">管理者</option>
                    <option value="担当者">担当者</option>
                </select>

            </div>
        </div>

        <div class="button-submit">
            <button id="submit_form" type="submit" class="base-button submit-button">招待メールを送る</button>
        </div>
    </form>
</div>

<script>
$.urlParam = function(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)')
        .exec(window.location.search);
    return (results !== null) ? results[1] || 0 : false;
}

function getBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

function loadFundDetailInformation(FUND_ID) {
    /**
     * Get data for edit.
     */
    $.get(`/ajax/fund.detail.${FUND_ID}`, function(data) {
        bindDataForForm(data);
    });
}


function bindDataForForm(data) {
    /**
     * Get data from Form
     */
    $(`#form .form-group`).each(function(index, element) {
        let input = $(element).find('input, select, textarea, radio');

        input.each(async function(index, element) {
            data.forEach(function(item) {
                if (item.column_name === $(element).attr('name')) {

                    if ($(element).attr('type') === 'file') {
                        $(element).replaceWith(`
                                <img style="width: 150px; height: auto;" src="${item.value}" /> 
                            `);
                    } else if ($(element).attr('type') === 'radio') {
                        $(element).val([item.value]).change();
                    } else {
                        $(element).val(item.value).change();
                    }
                }
            })
        });
    });
}

//add product
$(document).on("click", ".add", function() {
    $(this).parent().clone(true).insertAfter($(this).parent());

});
$(document).on("click", ".del", function() {
    var target = $(this).parent();
    if (target.parent().children().length > 2) {
        target.remove();
    }
});

let btn_close = document.querySelector("#btn_close");
let btn_open = document.querySelector("#btn_open");
let menu = document.querySelector(".menu");

btn_close.onclick = function() {
    menu.classList.toggle("active");
}
btn_open.onclick = function() {
    menu.classList.toggle("active");
}

$(document).ready(function() {
    let FUND_ID = $.urlParam('fund_id');

    loadFundDetailInformation(FUND_ID);

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

        let to = setTimeout(function() {
            console.log(data);
            /**
             * Filter out empty data
             */
            data = data.filter(function(item) {
                console.log(item);
                return item.value && item.value.length > 0;
            });

            $.ajax({
                url: `/ajax/fund.update.${FUND_ID}`,
                data: JSON.stringify(data),
                type: 'POST',
                contentType: 'application/json',
                success: function() {}
            });

            clearTimeout(to);
        }, 1500);
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