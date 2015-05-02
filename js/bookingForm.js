	// addTicket
	var priceList = {
		disc: {
			FA: 25,
			FC: 20,
			SA: 12,
			SP: 10,
			SC: 8,
			B1: 20,
			B2: 20,
			B3: 20,
		}, 
		
		full: {
			FA: 30,
			FC: 25,
			SA: 18,
			SP: 15,
			SC: 12,
			B1: 30,
			B2: 30,
			B3: 30,
			} 
		};


function smartOnPriceChange(day, time){
					
	console.log('Day is: ' + day + ', time is: ' + time);
						
	list = priceList.full;
						
		if((day === 'Monday' | 'Tuesday') || time == '13.00'){ 
			list = priceList.disc;
		}
						
		// Loop through the choose price list
		$.each(priceList, function(key, value) {
							
		console.log( "The key is '" + key + "' and the value is '" + value + "'" );
							
		// Associate the key with the value
		// This is a bit advance, so be careful to understand how 
		// I am using the key to match the ID of the different elements
		// or else it will cause a lot of errors
		$('#price' + key + 'Input').val(value);
		$('#price' + key ).html(value.toFixed(2));
		});
}


function smartUpdateTotalPrice(){
					
	// Set the default value of total
	var total = 0;

	// Loop through every input with the class of subtotal
	$('input.subtotal').each(function(){
						
	// get the value (as an int) of the input add add it to the total
	total += parseInt($(this).val()) || 0;
});
					
	// Print it out to the input and to html
	$('#totalPriceInput').val(total);
	$('#totalPrice').html('$' + total.toFixed(2));
					
	console.log('SMART TOTAL:' + total);
}	

$('.qty').change(function() {
	console.log('qty changed');
					
	// Get the quantity 
	var qty = $(this).val();
					
	// Find the parent tr for that quantity, 
	// this will help us find the price and subtotal associated 
	// for the ticket type we have updated. 
	// By doing this, we can just use a general function,
	// and not have to make a function for each qty
	var tr = $(this).closest('tr');
	var price = tr.find('.price').val();
					
	// Print to console to ensure the price is found
	console.log('qty: ' + qty + ', ticket price: ' + price);
					
	// Work out the subtotal
	var subtotal = price * qty;
					
	// Save this information
	tr.find('input.subtotal').val(subtotal);
	tr.find('span.subtotal').html(subtotal.toFixed(2));
					
	// Now recalculate the total price
	smartUpdateTotalPrice();
					
});	

	smartOnPriceChange();
});	