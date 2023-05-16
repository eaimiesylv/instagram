<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" id="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create new post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body" style="display:flex; overflow:auto">
			<div style="height:400px;position:relative;width:100%;border-style:dotted">
			<form method="POST" action="/post/store" enctype='multipart/form-data'>
			@csrf
			<label class="custom-file-upload">
			<i class="fa-solid fa-file-upload" 
					style=""></i>
					<input type="file" style="position:absolute;" id="file-upload"  name="file_upload[]" multiple>

					Select from your device
			</label>
					<div id="preview-images"></div>
					<!--<button type="submit">Upload</button>-->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<div id="msg">

					<textarea class="form-control mb-3" name="posts" style="height:91%" placeholder="Type your story"></textarea>
					<input type="submit" class="btn btn-primary" style="width:100%;margin-top:-1em" value="Submit">
			</div>
			</form>
      </div>
      <div class="modal-footer">
      
        <button type="button" id="modal-footer" class="btn btn-primary"  onclick="next()">Next</button>
      </div>
    </div>
  </div>
</div>