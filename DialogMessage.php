<?php require_once 'Pages/Main/DialogMessageProcess.php'
?>
<div class="modal fade" id="Message" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold h5 " id="MessageTitle"><?php echo $title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <p><?php echo $content ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn btn-info pl-3 pr-3" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 