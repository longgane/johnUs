// Restricts input for the set of matched elements to the given inputFilter function.
(function($) {
    $.fn.inputFilter = function(inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    };
}(jQuery));

/**
 * Get query param from URL 
 * @param {string} name 
 * @returns 
 */
$.urlParam = function(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)')
        .exec(window.location.search);
    return (results !== null) ? results[1] || 0 : false;
}

/**
 * Do not allow input text in input number field
 */
function initFilterInputNumber() {
    $('input[type="number"]').inputFilter(function(value) {
        return /^\d*$/.test(value); // Allow digits only, using a RegExp
    });
}

/**
 * Binding data to form
 * @param {array} data 
 */
function bindDataForForm(data) {
    /**
     * Get data from Form
     */
    $(`#form .form-group`).each(function(index, element) {
        let input = $(element).find('input, select, textarea, radio');

        input.each(async function(index, element) {
            data.forEach(function(item) {
                if ($(`[data-model="${item.column_name}"]`).length > 0) {
                    let el = $(`[data-model="${item.column_name}"]`)[0];

                    if (el.dataset.outputFormat == 'number') {
                        $(`[data-model="${item.column_name}"]`).text(new Intl.NumberFormat().format(item.value));
                    } else {
                        $(`[data-model="${item.column_name}"]`).text(item.value);
                    }
                }

                if (item.column_name === $(element).attr('name')) {
                    if ($(element).attr('type') === 'file') {
                        // $(element).replaceWith(`
                        //     <img style="width: 150px; height: auto;" src="${item.value}" /> 
                        // `);
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


function getDataFromForm($formId) {
    let data = [];

    if (!$formId) {
        $formId = '#form .form-group';
    }

    /**
     * Get data from Form
     */
    $($formId).each(function(index, element) {
        let input = $(element).find('li, input, select, textarea, radio');
        input.each(function(index, element) {
            var dataType = $(element).attr('type') || 'text';
            var test = $(element).attr('title');

            if (test == "tags") {
                data.push({
                    'column_name': $(element).attr('name'),
                    'data_type': dataType,
                    'value': $(element).attr('value'),
                });
            } else if (dataType == 'radio') {
                if ($(element).is(":checked")) {
                    data.push({
                        'column_name': $(element).attr('name'),
                        'data_type': dataType,
                        'value': $(element).val(),
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

    return data;
}

function getBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

function showMessageSaveSuccessfully() {
    return $.toast({
        text: '編集が完了しました。',
        showHideTransition: 'slide', // It can be plain, fade or slide
        bgColor: '#30e18f', // Background color for toast
        textColor: '#fff', // text color
        allowToastClose: true, // Show the close button or not
        hideAfter: 2000, // `false` to make it sticky or time in miliseconds to hide after
        stack: 5, // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
        textAlign: 'left', // Alignment of text i.e. left, right, center
        position: 'top-center' // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
    });
}

function showMessageCreateSuccessfully() {
    return $.toast({
        text: '新規作成が完了しました。',
        showHideTransition: 'slide', // It can be plain, fade or slide
        bgColor: '#30e18f', // Background color for toast
        textColor: '#fff', // text color
        allowToastClose: true, // Show the close button or not
        hideAfter: 2000, // `false` to make it sticky or time in miliseconds to hide after
        stack: 5, // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
        textAlign: 'left', // Alignment of text i.e. left, right, center
        position: 'top-center' // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
    });
}

function showErrorMessage(error) {
    let errorMessage = error.message || 'エラーが発生しました。';

    $.toast({
        text: errorMessage,
        showHideTransition: 'slide', // It can be plain, fade or slide
        bgColor: '#DA678C', // Background color for toast
        textColor: '#fff', // text color
        allowToastClose: true, // Show the close button or not
        hideAfter: false, // `false` to make it sticky or time in miliseconds to hide after
        stack: 5, // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
        textAlign: 'left', // Alignment of text i.e. left, right, center
        position: 'top-center' // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
    });
}

/**
 * Generate random string
 * 
 * @param {number} length 
 * @returns 
 */
function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() *
            charactersLength));
    }
    return result;
}

/**
 * Code need to run when website is ready.
 */
$(document).ready(function() {
    initFilterInputNumber();
    $('ul').on('click', 'li', function() {
        console.log($(this).html());
    });
});