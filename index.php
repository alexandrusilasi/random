<?php

require 'header.php';

?>

  <!-- Main layout -->
  <main>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <!-- Material form subscription -->
<div class="card">

<!--Card content-->
<div class="card-body px-lg-5">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" id="profil">

        <!-- Name -->
        <div class="md-form mt-3">
            <input type="text" id="nume" name="nume" class="form-control" required="required">
            <label for="nume">Nume<sup>*</sup></label>
        </div>

        <!-- E-mai -->
        <div class="md-form">
            <input type="email" id="email" name="email" class="form-control" required="required">
            <label for="email">E-mail<sup>*</sup></label>
        </div>

        <!-- Parola -->
        <div class="md-form">
            <input type="password" id="parola" name="parola" class="form-control">
            <label for="parola">Parola</label>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-block z-depth-0 my-4 waves-effect" type="submit"><i class="far fa-save"></i> Salveaza</button>

    </form>
    <!-- Form -->

</div>

</div>
<!-- Material form subscription -->
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

  </main>
  <!-- Main layout -->

<?php

require 'footer.php';

?>
