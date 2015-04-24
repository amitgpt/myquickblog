 <div class="container">
        <div class="section">
			 <!-- Modal Trigger -->
				<br><br><br>
			   <a href="#modal1" class="btn-floating btn-large waves-effect waves-light blue right btn modal-trigger  " id="btnadd" ><i class="mdi-content-add"></i></a>
				<!-- Modal Trigger -->
			  <!-- Modal Structure -->
			  <div id="modal1" class="modal mymodal">
			  <form class="col s12" action="/admin/addhomecontent" method="post" enctype="multipart/form-data">
				<input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}"/>	
				<div class="modal-content">
				  <h5 class="center modalheading">Home Content</h5>
						<div class="row">
							@include('errors.validation')
						</div>
						<div class="row">
							<div class="input-field col s9">
							  <input type="hidden" name="id" class="id myinput"/>
							</div>
						  </div>
						<div class="row">
							<div class="input-field col s6">
							  <input name="title" class="title myinput validate"  type="text" value="{{Input::old('title')}}">
							  <label for="title">Title</label>
							</div>
						  </div>
						  
						  <div class="row">
							<div class="input-field col s6">
							  <input class="sub_title myinput validate" name="sub_title" value="{{Input::old('sub_title')}}" type="text">
							  <label for="sub_title">Sub-Title</label>
							</div>
						  </div>
						  <div class="row">
							<div class="file-field input-field">
							  <input class="file-path validate" type="text"/>
								  <div class="btn">
									<span>File</span>
									<input type="file" name="file" class="myinput"/>
								  </div>
							  <img src="" width="120px" height="80px" class="homimage">
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
					<button class="waves-effect waves-teal btn-flat addupdate" type="submit"></button>
				  <button class="waves-effect waves-teal btn-flat modal-close" type="button">Cancel</button>	  
				</div>
				</form>	
			  </div>
			  <br>
			  
		  <div class="responsive-table col s10"  style="margin-top:25px;   padding-left:12rem;">
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
				@foreach($home as $gethome)
				  <tr>
					<td>{{$i++}}</td>
					<td>{{$gethome->title}}</td>
					<td>{{$gethome->sub_title}}</td>
					@if($gethome->status==1)
					<td>Active</td>
					@else
					<td>Off</td>
					@endif
					<td><img src="/images/{{$gethome->image}}" width="100px" height="80px"></td>
					<td><a href="#modal1" class="modal-trigger alert-link updatehome test" data-id="{{$gethome->id}}" data-title="{{$gethome->title}}" data-sub-title="{{$gethome->sub_title}}" data-image="/images/{{$gethome->image}}" data-status="{{$gethome->status}}">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/admin/home/delete/{{$gethome->id}}" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
				  </tr>
				</tbody>
				@endforeach
				</table>
			</div>
			<div class="right">
					{!! $home->render() !!}
			</div>
		</div>
	</div>
	
					
	
	 


