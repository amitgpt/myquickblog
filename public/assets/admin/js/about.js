$( document ).ready(function() {
	
$('#btnabout').click(function(){
	
	$('#modal1').openModal();
	$('.aboutheading').text('Add About Content');
	$('.saveabout').text('Add');
	$('.err').hide();
	$('.id').val('');
	$('.title').val('');
	$('.sub_title').val('');
	 CKEDITOR.instances['content'].setData('');
	$('.abtimage').hide();
	$('#filled-in-box').prop('checked', false);
	
});



$('.updateabout').click(function(){
	$('#modal1').openModal();
	$('.aboutheading').text('Update About Content');
	$('.saveabout').text('Update');
	$('.abtimage').show();
	$('.err').hide();
	$('.id').val($(this).attr('data-id'));
	$('.title').val($(this).attr('data-title'));
	$('.sub_title').val($(this).attr('data-sub-title'));
	$('.title').focus();	
	$('.sub_title').focus();
	  CKEDITOR.instances['content'].setData($(this).attr('data-content'));
	$('.abtimage').attr('src',$(this).attr('data-image'));
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
