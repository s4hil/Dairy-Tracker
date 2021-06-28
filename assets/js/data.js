$(document).ready(()=>{

	// Check if the user is logged in
	function checkLogin() {
		if (sessionStorage.getItem('loginStatus') != 'true') {
			$(".wrapper").remove();
		}
	}
	checkLogin();


	$(".load").click((e)=>{
		e.preventDefault();

		let month = $("#month").val();
		let data = { month:month };
		let dataJSON = JSON.stringify(data);
		let output = "";

		$.ajax({
			url: "assets/php/fetchByMonth.php",
			method: "POST",
			data: dataJSON,
			dataType: "json",
			success: function (data) {
				x = data;
				for(let i = 0; i < x.length; i++){
					let sno = i+1;
					output += "<tr><td>"+ sno +"</td><td>"+ x[i].date +"</td><td>"+ x[i].quantity +"</td></tr>";
				}
				$("#table-body").html(output);
			},
			error: function () {
				console.log("error with fetch request.");
			}
		});

	});

	// Generate Summary
	$(".genSum").click((e)=>{
		e.preventDefault();

		// Reset Fields
		$("#purchased-items").html("");
		$("#sold-items").html("");
		$("#error-1").text("");
		$("#error-2").text("");

		let month = $("#month").val();
		let data = { month:month };
		let dataJSON = JSON.stringify(data);

		$.ajax({
			url: "assets/php/genSum.php",
			method: "POST",
			data: dataJSON,
			dataType: "json",
			success: function (data) {
				x = data;
				
				$("#monthYear").text(month+"/2021");

				if(x.tbl_err === 1){
					$("#error-1").text('No Monthly Record Found!');
				}
				else {
					let soldItems = "Total Litres: <b>"+ x.totalLitres+"</b><br>Litre Price: <b>"+ x.litrePrice +"</b><br>Total Money: <b>"+ x.totalMoney +"</b>";
					$("#sold-items").html(soldItems);
				}
				if (x.sum_err === 1) {
					$("#error-2").text("No Purchased Items!");
				}
				else {
					let purchasedItems = x.purchasedItems;
					let purchasedItemsVal = "";
					for(let i = 0; i < purchasedItems.length; i++){
						purchasedItemsVal += "=>"+purchasedItems[i].date +" - <b>"+ purchasedItems[i].item +"</b> ("+ purchasedItems[i].quantity +")<br>";
					}
					$("#purchased-items").html(purchasedItemsVal);
				}
				
				// Display Loaded Modal
				$("#summary-modal").modal('show');
			},
			error: function () {
				console.log("error with gen sum req");
			}
		});
	});

	// Hide modal
	$("#close-modal").click(()=>{
		$("#summary-modal").modal('hide');
	});
}); //main