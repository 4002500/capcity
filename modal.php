<?php if($_SERVER['PHP_SELF'] == "/ccot/modal.php") {header("Location: index.php");} ?>
<?php $home_link = false; if($_SERVER['PHP_SELF'] != "/ccot/index.php") { $home_link = true; }  ?>




<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
      <div class="modal-body">
      <div class="location">


<p><?php echo $address ?></p>
<br>

<p class="mb-0"><i class="fa fa-phone mr-3"></i><?php echo $phone_formated ?></p>
<p><i class="fa fa-envelope-o mr-3"></i><?php echo $email ?></p>



</div>

        <form>


          <div class="form-group">
            <label for="full_name" class="col-form-label">Your Name:</label>
            <input type="text" class="form-control" id="full_name">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="Phone_num" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" id="Phone_num">
          </div>
          <div class="form-group">
            <label for="how_did_you_hear_about_us" class="col-form-label">How did you hear about us?</label>
            <input type="text" class="form-control" id="how_did_you_hear_about_us">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a style="border-radius: 10rem;"class="btn btn-secondary" data-dismiss="modal" href="">Close</a>
        <a style="border-radius: 10rem;"class="btn btn-primary" href="#">Send</a>
      </div>
    </div>
  </div>
</div>


