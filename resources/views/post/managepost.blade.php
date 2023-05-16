@extends('layouts.insta')


@section('content')
<section class="container" id="my-content">
					<h2>Manage Post</h2>
							
					<table id="sortTable" class="tablesorter table table-striped">
						<thead>
						<tr>
							<th>Images</th>
							<th>Post Content</th>
							
							<th>Add Link</th>
							
							
							<th>Delete</th>
						</tr>
						</thead>
						<tbody>
 

					
					@foreach($post as $key)
							
							<tr>
								<td>
								@foreach($key->images as $img_key)
							
									<img class="img-fluid myslide2a" src="post/{{$img_key->file_path}}" style="height:auto;width:120"> 
									
								@endforeach
								</td>
								<td style="width:45%;">{{$key->posts}}</td>
								<td>
									<form action="post/{{$key->id}}" method="post">
										
									 <span style="display:none">
									  {{$link=$key->link}}
									  @if(strlen($link)>0)
									    {{$link="http://127.0.0.1:8000/post/$key->link"}}
									  @endif
									</span>
									@csrf
									<input type="text" class="form-control col-8"  style="margin-bottom:0.2em" value="{{$link}}"name="link"/>
							
									@method('PUT')
									<input type="submit" class="btn btn-primary" type="Add Link">
									
									</form>

								
							
								</td>
								
								<td>
									
									<form action="post/{{$key->id}}" method="post">
									@csrf
									@method('DELETE')
									<button class="btn" type="submit"><i class="fa-solid fa-trash"></i></button>
									
									</form>

								
							
								</td>
								
							</tr>
							
							
							

					
					@endforeach
					</tbody>
						</table>	
					</section>




@endsection
@section('script')

<script>
$(document).ready(function() {	
	//alert('ok')
	$("#sortTable").tablesorter();
 });

 
 </script>
@endsection


