$(document).ready(function() {

$('#tabs').tabs();

$('#quantityError').hide();
	console.log("Quantity error hidden");

// Row One
// Column Two
// When the user clicks "Info" on the movie page the "tInfo2" id initialises Dialog
$("#tInfo2").click(function() {
		$('#dialog').dialog('open');
	});

// Dialog Initialised
	$('#dialog').dialog({
			autoOpen: false,
			width: 450,
			modal: true,
			resizeable: false,
			show: "fade",
			hide: "fade",
			dialogClass: "no-close",
			buttons: [{
		      	text: "Close",
			      	click: function() {
			        $( this ).dialog( "close" );
			      	}
	   		}]
	});
// End tInfo2 Dialog


// When the user clicks "Times" on the movie page the #tBook2 id initialises #Dialog2
$("#tBook2").click(function() {

		var bookingStart = []; // movieID, Session Time, shoppingCart ????????

		$('#dialog2').dialog('open');
		$("#chooseTime").show();
	});


	// Dialog 2 initialised
	$('#dialog2').dialog({
			autoOpen: false,
			width: 450,
			height: 420,
			modal: true,
			resizeable: false,
			show: "fade",
			hide: "fade",
	});

// chooseTime --------------------------------------------

	// chooseTime - Cancel Button
	$("#cancel").click(function(){
		$('#dialog2').dialog('close');
	});

	// Any of the movie sessions clicked will go to Select Tickets
	$(".chooseTicket").click(function(){
		$("#chooseTime").hide();
		$("#booking").show();

		$('#dialog2').dialog({	
			autoOpen: false,
			width: 450,
			height: 580,
			modal: true,
			resizeable: false,
			show: "fade",
			hide: "fade",
		});

	});




	
// Select Tickets --------------------------------------------

// This function calculates a price for a cinema booking
function calculateSum(){
  var totalTickets = parseInt(document.getElementById('qty').value);
  
  if (isNaN(totalTickets)){
    console.log('User did not enter a valid quantity.');
    document.getElementById('qty').focus();
    document.getElementById('qty').select();
    return false;
  }

  var ticketPrice = 20;
  salePrice = price * totalTickets;
  document.getElementById('totalPrice').value = salePrice.toFixed(2);

  	document.getElementById('totalPrice').innerHTML = salePrice.toFixed(2);
			return true;
			}


	// Back Button
	$("#backTime").click(function(){
		$("#booking").hide();
		$("#chooseTime").show();

		$('#dialog2').dialog({
			autoOpen: false,
			width: 450,
			height: 420,
			modal: true,
			resizeable: false,
			show: "fade",
			hide: "fade",
		});
	});

	// Cart Button
	$("#cart").click(function(){		
		if( $('qty').val() == 0) {
			$("#subTotalCart").hide();
			$("#booking").show();
			$('#quantityError').show();
				$('#dialog2').dialog({	
					autoOpen: false,
					width: 450,
					height: 580,
					modal: true,
					resizeable: false,
					show: "fade",
					hide: "fade",
				});

		} else {
			$("#booking").hide();
			$("#subTotalCart").show();
				$('#dialog2').dialog({	
					autoOpen: false,
					width: 450,
					height: 300,
					modal: true,
					resizeable: false,
					show: "fade",
					hide: "fade",
				});
		}

		


	}); // End Cart Button


// shoppingCart --------------------------------------------
	// shoppingCart - Back Button
	$("#backTicket").click(function(){
		$("#subTotalCart").hide();
		$("#booking").show();

		$('#dialog2').dialog({	
			autoOpen: false,
			width: 450,
			height: 580,
			modal: true,
			resizeable: false,
			show: "fade",
			hide: "fade",
		});
	});

	// shoppingCart - Pay Button
	$("#purchase").click(function(){
		$("#subTotalCart").hide();
		$("#paymentProcessing").show();
	});



// End tBook2 Dialog
	
















/* 
function updateAmount(){
			var qty = $('#quantity').val();
			var price = $('#ticketType').val();
			var sum = 0.0;

			$('#ticketType').function(){
				var qty = $(this).find('option:selected').val();
				var price = $(this).find('option:selected').val();
				var cartItem = new item(qty*price);
				});	
				
				var totalAmount = document.getElementById("#totalAmount").innerHTML("#cartItem");

			});
		}
*/



/*	var total = 0.0;
		var qty = document.getElementById('#quantity').val();
		var price = document.getElementById('#ticketType').val();
		var added = (qty*price);
		total+=added;*/







/*	$('#add').click(function(){
		calculateSum();
	});		

	$("#add").each(function(){
		$(this).keyup(function(){
			calculateSum();
		});
	});

function calculateSum(){
	var sum = 0;
	$("#add").each(function(){
		if(!isNaN(this.value)&&this.value.length!=0){
			sum+=parseFloat(this.value);
		}
	});

	$("#sum").html(sum.toFixed(2));}*/









/*
// booking
// updateAmount Function
	var qty = $(this).find('#quantity').val();
	var price = $(this).find('#ticketType').val();
	var cartItem = new item(qty*price);
	var shoppingCart = (".cartItem").val();
*/







/*
	// Trevors movie search click code
	$("#movie-search").click(function() {
		$('#progress').html('Searching for movies ...');
			$.post("http://titan.csit.rmit.edu.au/~e54061/wp/movie-service.php", 
				{ name: $("#movie").val(), day: $("#day").val() }, function(data, status) {
					// NOTE: EXPLAIND DATA, STATUS
					$('#progress').html('Times Playing: ');
					$('#output').html(data);
				});
	});
*/




  /*var multipleValues = $( "#multiple" ).val() || [];
  $( "p" ).html( "<b>Single:</b> " + singleValues +
    " <b>Multiple:</b> " + multipleValues.join( ", " ) );
}*/



/*
function displayVals() {
  var qty = $( "#quantity" ).val();
  $( "#shoppingCart" ).innerHTML( "<b>Total Quantity:</b> " + qty);
}
 
$( "select" ).change( displayVals );
displayVals();*/




}); // End document ready 
