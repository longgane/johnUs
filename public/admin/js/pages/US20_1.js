//-------------------- table 1--------------------------------------------------------------------------

let state = {};

function pagination(querySet, page, rows) {
    var trimStart = (page - 1) * rows
    var trimEnd = trimStart + rows

    var trimmedData = querySet.slice(trimStart, trimEnd)

    var pages = Math.round(querySet.length / rows);

    return {
        'querySet': trimmedData,
        'pages': pages,
    }
}

function pageButtons1(pages) {
    var wrapper = document.getElementById('pagination-wrapper1')

    wrapper.innerHTML = ``

    var maxLeft = (state.page - Math.floor(state.window / 2))
    var maxRight = (state.page + Math.floor(state.window / 2))

    if (maxLeft < 1) {
        maxLeft = 1
        maxRight = state.window
    }

    if (maxRight > pages) {
        maxLeft = pages - (state.window - 1)

        if (maxLeft < 1) {
            maxLeft = 1
        }
        maxRight = pages
    }

    for (var page = maxLeft; page <= maxRight; page++) {
        wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-info">${page}</button>`
    }


    if (state.page != 1 && pages > 5) {
        wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-info">&#171; 初め</button>` + wrapper.innerHTML
    }

    if (state.page != pages && pages > 5) {
        wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-info">最後 &#187;</button>`
    }

    // Set color for active button.
    $(`button[value="${state.page}"]`).addClass('active');

    $('.page').on('click', function() {
        state.page = Number($(this).val())
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
    state = {
        'querySet': [],
        'page': 1,
        'rows': 2,
        'window': 5,
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
        state.querySet.push(dummy_data);
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
    //         state.querySet = data.result;

    //         buildTable();
    //     })
    //     .fail(function(error) {
    //         showErrorMessage(error.responseJSON);
    //     });
}

function buildTable1() {
    let items = '';

    var data = pagination(state.querySet, state.page, state.rows);
    var chunk = data.querySet;

    chunk.forEach(function(data) {
        items += `
                <tr>
                    <td><a href="">${data['応募ステータス'] || '-'}</a></td>
                    <td>${data['応募日'] || '-'}</td>
                    <td>${data['クエスト名'] || '-'}</td>
                    <td>${data['ギルド名'] || '-'}</td>
                    <td>${data['感謝ポイント'] || '-'}</td>
                </tr>
                `
    });

    $("#table_data1").find("tr:gt(0)").remove();
    $('#table_data1').append(items);

    pageButtons1(data.pages);
}

function doSearch() {
    let search_conditions = getDataFromForm('form');
    loadTableData1(search_conditions);
}

$(document).ready(function() {
    loadTableData1();

    /**
     * Handle press enter key
     */
    $(document).on('keypress', function(e) {
        if (e.which == 13) {
            doSearch();
        }
    });

    $('#reset_form_button').click(function() {
        loadTableData1();
    });

    $('#search_button').click(function() {
        doSearch();
    });
});