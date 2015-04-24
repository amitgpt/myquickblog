$( document ).ready(function() {
	$('#btncontact').click(function(){
		$('#modal1').openModal();
		$('.contactheading').text('Add Contact Content');
		$('.savecontact').text('Add');
		$('.err').hide();
		$('#id').val('');
		$('#title').val('');
		$('#sub_title').val('');
		CKEDITOR.instances['content'].setData('');
		$('#contimage').hide();
		
	});



	$('.updatecontact').click(function(){
		$('#modal1').openModal();
		$('.contactheading').text('Update Contact Content');
		$('.savecontact').text('Update');
		$('#contimage').show();
		$('.err').hide();
		$('#id').val($(this).attr('data-id'));
		$('#title').val($(this).attr('data-title'));
		$('#sub_title').val($(this).attr('data-sub-title'));
		$('#title').focus();	
		$('#sub_title').focus();
		CKEDITOR.instances['content'].setData($(this).attr('data-content'));
		$('#contimage').attr('src',$(this).attr('data-image'));
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
