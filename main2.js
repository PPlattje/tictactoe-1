function myAjax() {
      $.ajax({
           type: "POST",
           url: 'ajax.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }

function delete_item(field) {
	field.innerHTML = "X";
	console.log("done");
}
function place_token(field) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		field.innerHTML = "X";
	    console.log("done");
    }
  };
 // xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
