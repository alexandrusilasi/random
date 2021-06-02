 <!-- Footer -->
  <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
      </div>
    </div>

  </footer>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <!-- Initializations -->
  <script>
   $(document).ready(() => {
				// SideNav Button Initialization
				$(".button-collapse").sideNav();
					// SideNav Scrollbar Initialization
					var sideNavScrollbar = document.querySelector('.custom-scrollbar');
					var ps = new PerfectScrollbar(sideNavScrollbar);

        new WOW().init();

        $("button.message").on("click" , function(){
          $("input[name='dest']").val($(this).attr("id-user"));
        });
        $("form#profil").on("submit" , function(e){
          e.preventDefault();
          $.ajax({
            url:'./utilizator.php',
            type: 'post',
            data: $(this).serialize(),
            success: function(d)
            {
              toastr.info(d);
            }
          });
        });
        $("button.trimite").on("click" , function(){
          $("form#mesaj").trigger("submit");
        });
        $("form#mesaj").on("submit" , function(e){
          e.preventDefault();
          $.ajax({
            url:'./inc/mesaje.inc.php',
            type: 'post',
            data: $(this).serialize(),
            success: function(d)
            {
              toastr.info(d);
            }
          });
        });
    });

  </script>

</body>

</html>
