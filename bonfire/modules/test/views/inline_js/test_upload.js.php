var video_id; var options = { target: '', // target element(s) to be
updated with server response beforeSubmit: showRequest, // pre-submit
callback uploadProgress: showProgress, success: showResponse //
post-submit callback // other available options: //url: url // override
for form's 'action' attribute //type: type // 'get' or 'post', override
for form's 'method' attribute //dataType: null // 'xml', 'script', or
'json' (expected server response type) //clearForm: true // clear all
form fields after successful submit //resetForm: true // reset the form
after successful submit // $.ajax options can be used here too, for
example: //timeout: 3000 }; function showRequest(){
$('#test_upload').fadeOut('slow'); } function showResponse(result){
//alert(data); //$('.show_response').html(data); video_id = result;
console.log(video_id);
$('.set_video_info').load('test_upload/set_info'); } var bar =
$('.bar'); var percent = $('.percent'); function showProgress(event,
position, total, percentComplete) { var percentVal = percentComplete +
'%'; //get progress bar.width(percentVal); // change progress percentage
percent.html(percentVal); //show progress }





$("#video_upload").change(function(e){ e.preventDefault();
$('#test_upload').ajaxSubmit(options); return false; });


