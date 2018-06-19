<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-weight: 100;" id="exampleModalLabel">Want to know more?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<div class="modal-body">
				<h5 style="font-weight: 100;">Give us a call</h5>
				<p><i style="color: var(--main-color); margin-left: 20px; margin-top: 30px; font-size: 24px;" class="fas fa-phone"></i> 02 6685 6797</p>
      </div>
      <div class="modal-body">
				<h5 style="font-weight: 100;">Send us a message</h5>
        <form style="width: 90%; margin: 0 auto;" method="post" action="scripts/email.php" name="contact-model">
				<div class="form-group">
            <label style="font-size: 14px;" for="name" class="col-form-label">Name:</label>
            <input type="text" required class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label  style="font-size: 14px;" for="email" class="col-form-label">Email:</label>
            <input type="email" required class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label  style="font-size: 14px;"  for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="message" required id="message-text"></textarea>
          </div>
          <input type="checkbox" aria-hidden='true' style="position: absolute; left: -5000px;" name="anti_bot" value="" tabindex="-1">
					<div style="padding-right: 0;" class="modal-footer">
       		 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary" style="background-color: var(--main-color); border: none; outline: none;">Send message</button>
      		</div>
        </form>
			</div>

		</div>
  </div>
</div>
