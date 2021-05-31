<?php

require 'header.php';
require './inc/cont.inc.php';

?>

  <!-- Main layout -->
  <main>

    <div class="container-fluid users">
      <div class="row">
        <div class="col-md-12">
        <?php 

        $cont = new Cont('','','');

        $afisare = $cont -> afisare();

        foreach($afisare as $row)
        {
          ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['nume']; ?></h5>
              <button type="button" class="btn btn-primary btn-floating message" id-user="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#basicExampleModal"><i class="far fa-comment"></i></button>
            </div>
          </div>
          <?php
        }

        ?>
        </div>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trimiteti un mesaj</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="mesaj">
          <div class="md-form">
            <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
            <label for="form7">Mesaj</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Renunta</button>
        <button type="button" class="btn btn-primary trimite">Trimite</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>

  </main>
  <!-- Main layout -->

<?php

require 'footer.php';

?>
