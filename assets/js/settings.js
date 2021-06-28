$(document).ready(()=>{
	// Check if the user is logged in
	function checkLogin() {
		if (sessionStorage.getItem('loginStatus') != 'true') {
			$(".wrapper").remove();
		}
	}
	function loadOldPrice(){
		$.ajax({
			url: "assets/php/fetchOldPrice.php",
			method: "GET",
			dataType: "json",
			success: function (data) {
				$("#price").val(data.pricePerLitre);
			},	
			error: function (){
				console.log("error with fetch old price");
			}
		});
	}
	loadOldPrice();

	// Update price 
	$("#updatePrice").click((e)=>{
		e.preventDefault();

		let price = $("#price").val();
		let data = { newPrice:price };
		let dataJSON = JSON.stringify(data);
		$.ajax({
			url: "assets/php/updateLitrePrice.php",
			method: "POST",
			data: dataJSON,
			dataType: "json",
			success: function (data){
				$(".msg").html("<div class='alert alert-warning'><i class='fas fa-info-circle'></i> "+ data +"</div>");
				loadOldPrice();
			},
			error: function (){
				console.log('error with update req');
			}
		});
	});	

}); //Main