//window.setInterval(updatefield, 5000)

//function updatefield() {
//	const req = new XMLHttpRequest()
//	req.onload = function() {
//		if (this.status == 200) {
//			const field = JSON.parse(this.responseText)
//}	

//gives a event handler to all 9 locations		
places = document.querySelectorAll("td")
for(var i=0; i<places.length; i++) {
places[i].onclick = place_token2
}
function delete_item(field) {
	field.innerHTML = "X";
	console.log("done");
}

function place_token2(clickEvent) {
	clickEvent.preventDefault();
	const location = clickEvent.target;
	
	const req = new XMLHttpRequest();
	
	req.onload = function() {
		if (this.status == 200) {
			location.innerHTML = "x";
			console.log("done");
		} else {
			console.log(this.responseText);
		}
	}
	const formData = new FormData()
    formData.append('ajax', 'true')
	req.open("POST", "token2.php")
	req.send(formData)
}
