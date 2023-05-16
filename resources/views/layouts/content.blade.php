<div id="img_wrapper">
						<div><img src="{{asset('images/admin.jpg')}}"  class="rounded-circle img"/>
								<p class="text-center">Admin</p>
									
							<a class="nav-link"  href="#"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
							<i class="fa-solid fa-plus" onclick="open_modal()"></i></a>
						</div>
						
					</div>
					<section class="my-content"> 
					@foreach($post as $key)
						
						<div style="border-top:1px solid green" class="post-content">
							<div class="d-flex p-1 mt-3" style="">
								<img src="{{asset('images/admin.jpg')}}" class="rounded-circle img" width="50" height="50"/> 
								<h6 class="p-1">{{$key->user->username}}</br>
												<small>{{$key->user->fullname}}</small></h6>
								<h5 style="margin-left: auto;">
										<i class='fa-solid fa-dot-circle' onclick="open_modal()" data-toggle="modal" data-target="#exampleModalCenter2"></i>
								</h5>

							</div>
							<div>
						
							@foreach($key->images as $img_key)
							<img class="img-fluid myslides" src="{{asset('post/'.$img_key->file_path)}}" style="height:390px;max-width:100%"> 
								
								
							@endforeach
							</div>
							
							<p>{{$key->posts}}</p>
						</div>
					@endforeach
						
					</section>