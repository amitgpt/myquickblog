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
			 <a href="#modal1"class="btn-floating btn-large waves-effect waves-light right btn modal-trigger" id="btnpost" ><i class="mdi-content-add"></i></a>	</br> 
				 <!-- Modal Structure -->
					<div id="modal1" class="modal mymodal">
						<div class="modal-content">
						  <h4 class="center">Post Content</h4>
						  <div class="row">
							@include('errors.validation')
						 </div>
						<div class="row">
							<form class="col s12" action="/admin/addpostcontent" method="post" id="formid" enctype="multipart/form-data">
								<input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}">	
									 
									 <div class="row">
										<div class="input-field col s12">
										  <input type="hidden" name="id" class="id"/>
										</div>
									  </div>
									
									  <div class="row">
										<div class="input-field col s12">
										  <input name="title" class="title" type="text" class="validate">
										  <label for="title">Title</label>
										</div>
									  </div>
									  
									  <div class="row">
										<div class="input-field col s12">
										  <input class="sub_title" name="sub_title" type="text" class="validate">
										  <label for="sub_title">Sub-Title</label>
										</div>
									  </div>
									  
									   <div class="row">
											<div class="input-field col s12">
											  <textarea class="content" name="content" class="materialize-textarea"></textarea>
											</div>
										</div>
									  
									  <div class="row">
										<div class="file-field input-field">
										  <input class="file-path validate" type="text"/>
										  <div class="btn">
											<span>File</span>
											<input type="file" name="file"/>
										  </div>
										  <img src="" width="120px" height="80px" class="postimage">
										</div>
									  </div>
									  
										<div class="row">
											<p>
											  <input type="checkbox" name="checkbox" class="filled-in" class="filled-in-box"/>
											  <label for="filled-in-box">Status</label>
											</p>
										</div>
									</div>
								</div>
									<div class="modal-footer">
										 <button class="waves-effect waves-teal btn-flat" type="submit" name="action">Save</button>
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
								@foreach($post as $getpost)
								  <tr>
									<td>{{$i++}}</td>
									<td>{{$getpost->title}}</td>
									<td>{{$getpost->sub_title}}</td>
									<td>{{$getpost->content}}</td>
									@if($getpost->status==1)
									<td>Active</td>
									@else
									<td>Off</td>
									@endif
									<td><img src="/images/{{$getpost->image}}" width="100px" height="80px"></td>
									<td><a href="#modal1" class="modal-trigger alert-link updatepost" data-id="{{$getpost->id}}" data-title="{{$getpost->title}}" data-sub-title="{{$getpost->sub_title}}" data-content="{{$getpost->content}}" data-image="/images/{{$getpost->image}}" data-status="{{$getpost->status}}">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/admin/post/delete/{{$getpost->id}}" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
								  </tr>
								</tbody>
								@endforeach
						   </table>
						</div>
	</div>
</div>


