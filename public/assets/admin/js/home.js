$( document ).ready(function() {
$('#btnadd').click(function(){
	
	$('#modal1').openModal();
	$('.addupdate').text('Add');
	$('.modalheading').text('Add Home Content');
	$('.err').hide();
	$('.title').val('');
	$('.id').val('');
	$('.sub_title').val('');
	$('.homimage').hide();
	$('#filled-in-box').prop('checked', false);
	
});


$('.updatehome').click(function(){
	
	$('#modal1').openModal();
	$('.addupdate').text('update');
	$('.modalheading').text('Update Home Content');
	$('.homimage').show();
	$('.err').hide();
	$('.id').val($(this).attr('data-id'));
	$('.title').val($(this).attr('data-title'));
	$('.title').focus();
	$('.sub_title').val($(this).attr('data-sub-title'));
	$('.sub_title').focus();
	$('.homimage').attr('src',$(this).attr('data-image'));
	if(($(this).attr('data-status'))=='1')
	$('#filled-in-box').prop('checked', true);
	else
	$('#filled-in-box').prop('checked', false);
});


	if($('.err').text()!="")
	{
		$('#modal1').openModal();
		$('.addupdate').text('Add');
	} 
});
