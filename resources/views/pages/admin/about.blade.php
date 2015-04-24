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
			  <a class="btn-floating btn-large waves-effect waves-light blue modal-trigger right" href="#modal1" id="btnabout"><i class="mdi-content-add"></i></a>
			  <!-- Modal Structure -->
			  <div id="modal1" class="modal mymodal">
				 <form class="col s12" action="/admin/addaboutcontent" method="post" id="formid" enctype="multipart/form-data">
					<input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}">	
				  <div class="modal-content">
				   <h5 class="center aboutheading">About Content</h5>
					  <div class="row">
						@include('errors.validation')
					   </div>
						
						<div class="row">
							<div class="input-field col s12">
							  <input type="hidden" name="id" class="id myinput"/>
							</div>
						  </div>
						
						  <div class="row">
							<div class="input-field col s12">
							  <input name="title" class="title myinput validate" value="{{Input::old('title')}}" type="text">
							  <label for="title">Title</label>
							</div>
						  </div>
						  
						  <div class="row">
							<div class="input-field col s12">
							  <input class="sub_title myinput validate" name="sub_title" value="{{Input::old('sub_title')}}" type="text">
							  <label for="sub_title">Sub-Title</label>
							</div>
						  </div>
						  
						   <div class="row">
								<div class="input-field col s12 addcontent">
								  <textarea class="content myinput materialize-textarea" name="content" value="{{Input::old('content')}}"></textarea>
								</div>
							</div>
						  
						  <div class="row">
							<div class="file-field input-field">
							  <input class="file-path validate" type="text"/>
							  <div class="btn">
								<span>File</span>
								<input type="file" name="file" value="{{Input::old('file')}}" class="myinput"/>
							  </div>
							  <img src="" width="120px" height="80px" class="abtimage">
							</div>
						  </div>
						  
							<div class="row">
								<p>
								  <input type="checkbox" name="checkbox" class="filled-in myinput"  id="filled-in-box"/>
								  <label for="filled-in-box">Status</label>
								</p>
							</div>
				</div>
				<div class="modal-footer">
					<button class="waves-effect waves-teal btn-flat saveabout" type="submit">Save</button>
				  <button class="waves-effect waves-teal btn-flat modal-close" type="button" name="action">Cancel</button>		  
				</div>
				</form>
			  </div>
			  <br>
			  
		  <div class="responsive-table col s10"  style="margin-top:25px;   padding-left:10rem;">
			<table>
				<thead>
				  <tr>
					  <th data-field="id">#</th>
					  <th data-field="name">Title</th>
					  <th data-field="price">Sub-Title</th>
					  <th data-field="price">Status</th>
					  <th data-field="price">Image</th>
					  <th data-field="price">Action</th>
					</tr>
				</thead>
				<tbody>
						{{--*/	$i=1; /*--}}
					@foreach($about as $getabout)
					  <tr>
						<td>{{$i++}}</td>
						<td>{{$getabout->title}}</td>
						<td>{{$getabout->sub_title}}</td>
						<td>{{--*/echo $getabout->content/*--}}</td>
						@if($getabout->status==1)
						<td>Active</td>
						@else
						<td>Off</td>
						@endif
						<td><img src="/images/{{$getabout->image}}" width="100px" height="80px"></td>
						<td><a href="#modal1" class="modal-trigger alert-link updateabout" data-id="{{$getabout->id}}" data-title="{{$getabout->title}}" data-sub-title="{{$getabout->sub_title}}" data-content="{{$getabout->content}}" data-image="/images/{{$getabout->image}}" data-status="{{$getabout->status}}">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/admin/about/delete/{{$getabout->id}}" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
					  </tr>
				</tbody>
				@endforeach
		   </table>
		   <div class="right">
					{!! $about->render() !!}
			</div>
		</div>
			
		</div>  
	  </div>
