$( document ).ready(function() {
	$('#btnmenu').click(function(){
		$('#modal1').openModal();
		$('.err').hide();
		$('#id').val('');
		$('#name').val('');
		$('#path').val('');
		$('#filled-in-box').val('');
		
		
	});


	$('.updatemenu').click(function(){
		$('#modal1').openModal();
		$('.err').hide();
		$('#id').val($(this).attr('data-id'));
		$('#name').val($(this).attr('data-name'));
		$('#path').val($(this).attr('data-path'));
		$('#name').focus();	
		$('#path').focus();
		if(($(this).attr('data-status'))=='1')
		$('#filled-in-box').prop('checked', true);
		else
		$('#filled-in-box').prop('checked', false);
	});

	
	if($('.err').text()!="")
	{
		$('#modal1').openModal();
	} 
});
