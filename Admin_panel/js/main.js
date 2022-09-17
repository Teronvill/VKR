(function ($) {

	"use strict";


})(jQuery);

// function login(){ //обработчик входа
// 	let loginN=document.querySelector('.name');
// 	localStorage.saveItem('savedLogin', loginN.value);
//    }
// check=document.querySelector('checkbox');
// function   initLogin(){ //при заходе на страницу
// 	window.onload = function() {let loginN=document.querySelector('.name');
// 	loginN.value = localStorage.getItem('savedLogin') || ''; //loginInput это html input
// }
//   }
//   initLogin();



function getCookie(c_name) {
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1) {
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1) {
		c_value = null;
	} else {
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1) {
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start, c_end));
	}
	return c_value;
}
// let checkboxStatus=false;
// function setCookie(c_name, value, exdays,checkboxStatus) {
// 	if (document.querySelector('.checkbox')=='')
// 	var chbx=document.querySelector('.acheckbox');
// 	if (chbx.checked){
// 		console.log(chbx.value);

// 		checkboxStatus=false;
// 		if (checkboxStatus===false) {
// 			var exdate = new Date();
// 			exdate.setDate(exdate.getDate() + exdays);
// 			var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
// 			document.cookie = c_name + "=" + c_value;
// 		} 
// }
// $('.acheckbox').on('click', function () {
// 	checkboxStatus = $(this).prop('checked');
// 	console.log(checkboxStatus);
// });
function checkCookie() {
	// var chbx=document.querySelector('.acheckbox');
	// console.log(chbx.value);
	// let checkboxStatus = $(this).prop('checked')
	var username = getCookie("username");
	if (username != null && username != "") {
		document.querySelector('.name').value = username;
	}
}