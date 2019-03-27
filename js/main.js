var dropdown = document.getElementById("dropdown");
dropdown.addEventListener("click",function(){
   var dropdownItem = document.getElementById("dropdown-item");
   dropdownItem.classList.toggle('show');
   var caret = document.getElementsByClassName('fa-caret-right')[0]
   caret.classList.toggle('rotate');
});