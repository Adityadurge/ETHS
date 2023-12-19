
$("#datatable").DataTable();
function getTotal() {
				
	var add=0;
	var minus=0;
	$('.add').each(function() {
		if ($(this).val().length>0)
				add+=parseFloat($(this).val());
	});

	$('.minus').each(function() {
		if ($(this).val().length>0)
				minus+=parseFloat($(this).val());
	});

	$(".Credit").text(""+(add));
	$(".Debit").text(""+(minus));
	$(".Available").text(""+(add-minus));
}



