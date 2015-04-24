 <div class="container">
	<div class="section">
			<!-- Modal Trigger -->
			<br><br><br>
			 <a href="#modal1" class="btn-floating btn-large waves-effect waves-light blue right btn modal-trigger"
			 id="btnmenu" ><i class="mdi-content-add"></i></a>
				 
			 <!-- Modal Structure -->
				<div id="modal1" class="modal mymodal">
					<form class="col s12" action="/admin/addmenu" method="post" enctype="multipart/form-data">
						<input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}"/>	
									  
						 <div class="modal-content">
							 <h4 class="center menuheading">Menu</h4>
							   
							   <div class="row">
									@include('errors.validation')
								</div>
								  
									<div class="row">
										 <div class="row">
											<div class="input-field col s6">
											  <input type="hidden" name="id" id="id"/>
											</div>
										  </div>
										
										  <div class="row">
											<div class="input-field col s12">
											  <input name="name" value="{{Input::old('name')}}" id="name" type="text" class="validate">
											  <label for="name">Name</label>
											</div>
										  </div>
										  
										  <div class="row">
											<div class="input-field col s12">
											  <input id="path" name="path" value="{{Input::old('path')}}" type="text" class="validate">
											  <label for="path">Path</label>
											</div>
										  </div>
										  
										  <div class="row">
											  <div class="input-field col s12">
												<p>
												  <input type="checkbox" name="checkbox" class="filled-in" id="filled-in-box"/>
												  <label for="filled-in-box">Status</label>
												</p>
												</div>
											</div>
									</div>
								</div>
								
								<div class="modal-footer">
									<button class="waves-effect waves-teal btn-flat savemenu" type="submit">Save</button>
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
						  <th data-field="name">Name</th>
						  <th data-field="price">Path</th>
						  <th data-field="price">Status</th>
						  <th data-field="price">Action</th>
						</tr>
					</thead>
					<tbody>
						{{--*/	$i=1; /*--}}
					@foreach($menu as $getmenu)
						<tr>
						<td>{{$i++}}</td>
						<td>{{$getmenu->name}}</td>
						<td>{{$getmenu->path}}</td>
						@if($getmenu->status==1)
						<td>Active</td>
						@else
						<td>Off</td>
						@endif
						<td><a href="#modal1" class="modal-trigger alert-link updatemenu" data-id="{{$getmenu->id}}" data-name="{{$getmenu->name}}" data-path="{{$getmenu->path}}" data-status="{{$getmenu->status}}">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/admin/menu/delete/{{$getmenu->id}}" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
					  </tr>
					</tbody>
					@endforeach
			   </table>
			</div>
	</div>
</div>



