function formValidate() {
    var regExp = /^([1900-2022])$/;
    var phone = document.getElementById("date").value;
    if (regExp.test(phone))
        alert('ngày tháng hợp lệ');
    else
        alert('ngày tháng không hợp lệ');
}