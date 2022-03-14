function create_tr(table_id) {
    let form_body = document.getElementById(table_id),
        first_tr = form_body.firstElementChild
    tr_clone = first_tr.cloneNode(true);
    form_body.append(tr_clone);
    clean_first_tr(form_body.firstElementChild);

}

function clean_first_tr(firstTr) {
    let children = firstTr.children;

    children = Array.isArray(children) ? children : Object.values(children);
    children.forEach(x => {
        if (x !== firstTr.lastElementChild) {
            x.firstElementChild.value = '';
        }
    });
}



function remove_tr(This) {
    if (This.closest('.color-form').childElementCount == 1) {
        alert("これを削除することはできません。");
    } else {
        This.closest('.chil').remove();
    }
}