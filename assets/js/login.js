$(".login").click( (e) => {
	e.preventDefault();

	let un = $("#username").val();
	let pw = $("#password").val();

	let data = { name:un, pw:pw };
	let dataJSON = JSON.stringify(data);

	$.ajax({
		url: "assets/php/checkLogin.php",
		method: "POST",
		data: dataJSON,
		success: function (response) {
			login = response;
			if (login == "true") {
				window.location = "dashboard.html";
			}
			else {
				$(".form")[0].reset();
				alert("Invald Credentials!");
			}
		},
		error: function() {
			console.log("Err with login req.");
		}
	});
});