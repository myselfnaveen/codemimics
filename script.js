
function myFunction() {
var name = document.getElementById("name").value;
var password = document.getElementById("password").value;
var email = document.getElementById("email").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&password1=' + password + '&email1=' + email;
if (name == '' || password == '' || email == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
