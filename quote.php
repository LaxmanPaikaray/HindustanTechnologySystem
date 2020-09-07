<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="default-form contact-form">
                
                <form method="post"  id="enquiry-form">
					<div class="row clearfix">
                        <div class="form-group col-md-6 col-md-offset-3 col-sm-offset-3 col-sm-6 col-xs-12">
                            <input id="mobile" type="number" name="mobile" value="" placeholder="Mobile No *">
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12"><button type="submit" class="theme-btn btn-style-three">Quote Me</button></div>
					</div>
                </form>
                <div id="modal-message" class="text-center"></div>
        </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div> -->
    </div>
  </div>
</div>
<script>
$("#enquiry-form").submit(function(e){
    e.preventDefault();
    if(!$("#mobile").val()) {
        $("#modal-message").text("Enter 10 digit mobile No");
            setTimeout(() => {
                $("#modal-message").text("")
            }, 1000);
        return
    }
    
    $.ajax({
        type: "POST",
        url: "enquiry.php",
        data: $('#enquiry-form').serialize(),
        success: function(res){
            $("#modal-message").text(res);
            setTimeout(() => {
                $("#modal-message").text("")
            }, 2000);
        }
    });
})
</script>