let state1 = {};

function pagination1(querySet1, page1, rows1) {
    var trimStart1 = (page1 - 1) * rows1
    var trimEnd1 = trimStart1 + rows1

    var trimmedData1 = querySet1.slice(trimStart1, trimEnd1)

    var pages1 = Math.round(querySet1.length / rows1);

    return {
        'querySet1': trimmedData1,
        'pages1': pages1,
    }
}

function page1Buttons1(pages1) {
    var wrapper1 = document.getElementById('pagination-wrapper1')

    wrapper1.innerHTML = ``

    var maxLeft1 = (state1.page1 - Math.floor(state1.window1 / 2))
    var maxRight1 = (state1.page1 + Math.floor(state1.window1 / 2))

    if (maxLeft1 < 1) {
        maxLeft1 = 1
        maxRight1 = state1.window1
    }

    if (maxRight1 > pages1) {
        maxLeft1 = pages1 - (state1.window1 - 1)

        if (maxLeft1 < 1) {
            maxLeft1 = 1
        }
        maxRight1 = pages1
    }

    for (var page1 = maxLeft1; page1 <= maxRight1; page1++) {
        wrapper1.innerHTML += `<button value=${page1} class="page1 btn btn-sm btn-info">${page1}</button>`
    }


    if (state1.page1 != 1 && pages1 > 5) {
        wrapper1.innerHTML = `<button value=${1} class="page1 btn btn-sm btn-info">&#171; 初め</button>` + wrapper1.innerHTML
    }

    if (state1.page1 != pages1 && pages1 > 5) {
        wrapper1.innerHTML += `<button value=${pages1} class="page1 btn btn-sm btn-info">最後 &#187;</button>`
    }

    // Set color for active button.
    $(`button[value="${state1.page1}"]`).addClass('active1');

    $('.page1').on('click', function() {
        state1.page1 = Number($(this).val())
        buildTable1()
    });
}

function loadTableData1(conditions) {
    $("#table_data1").find("tr:gt(0)").remove();
    $('#table_data1').append(`
                    <tr class="in" style="border-bottom: 0.1rem solid #D6D6D6; ">
                        <td colspan="8" style="padding: 0;  text-align: center;"><img style="width: 60px; height:  60px;" src="/assets/img/form/loading.svg" /></td>
                    </tr>
                    `);
    state1 = {
        'querySet1': [],
        'page1': 1,
        'rows1': 3,
        'window1': 5,
    }

    // ------ DUMMY DATA ----------
    var dummy_data = {
        '応募ステータス': '<button class="base-button load-btn mb-3"> 選考中</button> <button class="base-button used-btn mb-3"> 選考中</button>',
        '応募日': 'xxxx',
        'クエスト名': 'fdsf',
        'ギルド名': 'afgb',
        '感謝ポイント': 'vxv',
    };

    for (var i = 1; i <= 20; i++) {
        dummy_data.id = i;
        state1.querySet1.push(dummy_data);
    }
    // ------ ----------


    buildTable1();


    // $.ajax({
    //         url: "/ajax/admin.list",
    //         data: JSON.stringify(conditions),
    //         type: 'POST',
    //         contentType: 'application/json',
    //     })
    //     .done(function(data) {
    //         state1.querySet1 = data.result;

    //         buildTable();
    //     })
    //     .fail(function(error) {
    //         showErrorMessage(error.responseJSON);
    //     });
}

function buildTable1() {
    let items = '';

    var data = pagination1(state1.querySet1, state1.page1, state1.rows1);
    var chunk = data.querySet1;

    chunk.forEach(function(data) {
        items += `
                <tr>
                    <td><a style="padding-left: 0px;" href="">${data['応募ステータス'] || '-'}</a></td>
                    <td>${data['応募日'] || '-'}</td>
                    <td>${data['クエスト名'] || '-'}</td>
                    <td>${data['ギルド名'] || '-'}</td>
                    <td>${data['感謝ポイント'] || '-'}</td>
                </tr>
                `
    });

    $("#table_data1").find("tr:gt(0)").remove();
    $('#table_data1').append(items);

    page1Buttons1(data.pages1);
}


$(document).ready(function() {
    loadTableData1();
});