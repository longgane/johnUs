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

            data = data.filter(function(item) {

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



    $("#submit_form").click(function() {
        let btn = $(this);
        btn.addClass('disabled');

        let data = getDataFromForm();

        console.log(data);
        /**
         * Handle data for block サブ画像
         */



        $.ajax({
                url: `/ajax/fund.update.${FUND_ID}`,
                data: JSON.stringify(data),
                type: 'POST',
                contentType: 'application/json',
            })
            .done(function() {
                showMessageSaveSuccessfully();
                btn.removeClass('disabled');
            })
            .fail(function(error) {
                showErrorMessage(error.responseJSON);
                btn.removeClass('disabled');
            });
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