var selectField = document.getElementById("selectField");
var selectText = document.getElementById("selectText");
var list = document.getElementById("drop_list");
var icon = document.getElementById("dropdown_icon");
var options = document.getElementsByClassName("drop_option");

// for(option of options){
//     option.onclick = function(){
//         selectText.innerHTML = this.textContent;
//     }
// }

selectField.onclick = function() {
    list.classList.toggle("drop_hide");
    icon.classList.toggle("rotate");
}