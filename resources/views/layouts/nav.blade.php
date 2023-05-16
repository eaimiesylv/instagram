	<ul class="">	
						<li class="nav-item" id="logo" style="position:relative;">
							<img src="{{asset('logos/logo.png')}}" width="50" height="50"/>
						</li>

						<!--<span><i class="fa-solid fa-bars mobile"></i></span>-->


						<li class="nav-item desktop-li">
							<i class="fa-solid fa-home"></i><a class="nav-link" href="/home">Home</a>
						</li>
						<!--<li class="nav-item desktop-li" onclick="welcome()">
							<i class="fa-solid fa-search"></i><a class="nav-link" id="search" href="#">Search</a>
							<div class="search " style="overflow:auto"> 
								 <form style="margin-top:1em">
								  <div class="input-group mb-3">
									<div class="input-group-prepend">
									  <span class="input-group-text">Default</span>
									</div>
									<input type="text" class="form-control">
								  </div>
								</form>
								<div></div>
							</div>
						</li>-->
						<li class="nav-item desktop-li">
							<i class="fa-solid fa-plus"></i>
							<a class="nav-link" href="#" class="btn btn-primary"  onclick="open_modal()" data-toggle="modal" data-target="#exampleModalCenter">
							Create</a>
						</li>
						<li class="nav-item desktop-li">
							<i class="fa-solid fa-cog"></i><a class="nav-link" href="/post_all">Manage Post</a>
						</li>
						<li class="nav-item">
                                

						 <i class="fa-solid fa-sign-out" onclick="submit()"></i>
                           <a class="desktop-li" href="{{ route('logout') }}" 
						   	 style="margin-left:0.8em;text-decoration:none;" onclick="submit()">
                                        {{ __('Logout') }}
                                    </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                
                        </li>
					</ul>
		<script>

		 function submit(){
			event.preventDefault(); document.getElementById('logout-form').submit();
		 }

	</script>