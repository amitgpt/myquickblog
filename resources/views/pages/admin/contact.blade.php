<script type="text/javascript" src="/ckeditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/ckeditor/ckfinder/ckfinder.js"></script>

<script language="JavaScript" type="text/javascript">
window.onload = function() {
  var editor = CKEDITOR.replace('content');
  CKFinder.SetupCKEditor( editor, '/ckfinder/');
 
  
};
</script>
	 <div class="container">
        <div class="section">
				<!-- Modal Trigger -->
				<br><br><br>
				<a href="#modal1" class="btn-floating btn-large waves-effect waves-light blue modal-trigger right"  id="btncontact" data-target="modal1" type="submit" name="action"><i class="mdi-content-add"></i></a>
					<br> 
				 <!-- Modal Structure -->
					<div id="modal1" class="modal mymodal">
						<form class="col s12" action="/admin/addcontactcontent" method="post" id="formid" enctype="multipart/form-data">
						<input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}">	
						<div class="modal-content">
						  <h5 class="center contactheading">Contact Content</h5>
						  <div class="row">
							@include('errors.validation')
						 </div>
					
						 <div class="row">
							<div class="input-field col s12">
							  <input type="hidden" name="id" id="id" class="myinput"/>
							</div>
						  </div>
						
						  <div class="row">
							<div class="input-field col s12">
							  <input name="title" id="title" type="text" value="{{Input::old('title')}}" class="validate myinput">
							  <label for="title">Title</label>
							</div>
						  </div>
						  
						  <div class="row">
							<div class="input-field col s12">
							  <input id="sub_title" name="sub_title" type="text" value="{{Input::old('sub_title')}}" class="validate myinput">
							  <label for="sub_title">Sub-Title</label>
							</div>
						  </div>
						  
						   <div class="row">
								<div class="input-field col s12">
								  <textarea id="content" name="content" value="{{Input::old('content')}}" class="materialize-textarea myinput"></textarea>
								</div>
							</div>
						  
						  <div class="row">
							<div class="file-field input-field">
							  <input class="file-path validate" type="text"/>
							  <div class="btn">
								<span>File</span>
								<input type="file" name="file" value="{{Input::old('file')}}" class="myinput"/>
							  </div>
							  <img src="" width="120px" height="80px" id="contimage">
							</div>
						  </div>
						  
							<div class="row">
								<p>
								  <input type="checkbox" name="checkbox" class="filled-in myinput" id="filled-in-box"/>
								  <label for="filled-in-box">Status</label>
								</p>
							</div>
						</div>
					
						<div class="modal-footer">
							 <button class="waves-effect waves-teal btn-flat savecontact" type="submit">Save</button>
						  <button class="waves-effect waves-teal btn-flat modal-close" type="button" name="action">Cancel</button>
						</div>
					
					 </form>
				</div>
					
				<!-- End Modal Structure -->
						<div class="responsive-table col s10"  style="margin-top:25px;   padding-left:10rem;">
							<table>
								<thead>
								  <tr>
									  <th data-field="id">#</th>
									  <th data-field="name">Title</th>
									  <th data-field="price">Sub-Title</th>
									  <th data-field="price">Content</th>
									  <th data-field="price">Status</th>
									  <th data-field="price">Image</th>
									  <th data-field="price">Action</th>
									</tr>
								</thead>
								<tbody>
									{{--*/	$i=1; /*--}}
								@foreach($contact as $getcontact)
								  <tr>
									<td>{{$i++}}</td>
									<td>{{$getcontact->title}}</td>
									<td>{{$getcontact->sub_title}}</td>
									<td>{{--*/echo $getcontact->content/*--}}</td>
									@if($getcontact->status==1)
									<td>Active</td>
									@else
									<td>Off</td>
									@endif
									<td><img src="/images/{{$getcontact->image}}" width="100px" height="80px"></td>
									<td><a href="#modal1" class="modal-trigger alert-link updatecontact" data-id="{{$getcontact->id}}" data-title="{{$getcontact->title}}" data-sub-title="{{$getcontact->sub_title}}" data-content="{{$getcontact->content}}" data-image="/images/{{$getcontact->image}}" data-status="{{$getcontact->status}}">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/admin/contact/delete/{{$getcontact->id}}" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
								  </tr>
								</tbody>
								@endforeach
						   </table>
							 <div class="right">
									{!! $contact->render() !!}
							</div>
						</div>
					</div>
				</div>



