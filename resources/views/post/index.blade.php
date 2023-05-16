@extends('layouts.insta')


@section('content')
    @include('layouts.content')


@endsection
@section('script')

<script>
    function copy(){
        if (document.selection) {
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById("code"));
    range.select().createTextRange();
    document.execCommand("copy");
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById("code"));
    window.getSelection().addRange(range);
    document.execCommand("copy");
    alert("Text has been copied, now paste in the text-area")
  }
        
    }
	$('.fa-dot-circle').click(function() {
   //console.log($(this).find(".my-content").html());
    text = $(this).closest(".post-content").html();
    //$("#exampleModalLongTitle").html("<h4 class='btn btn-primary' onclick='copy()'>Copy Code</h4>")  
    $("#code").text(text) 
    $("#modal-dialog").toggleClass("mw-100");
	$("#modal-dialog").toggleClass("w-75");
    
 
});
</script>
@endsection