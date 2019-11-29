  </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="<?php echo base_url();?>">
                  Ciclimax
                </a>
              </li>
            </ul>
          </nav>
       <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, hecho con <i class="material-icons">favorite</i> por Anthony Sánchez - 17-EIST-1-028, Anthony Lara - 17-EIST-1-029, Luisabeth Diaz - 17-EISM-1-079 y Greidy Reyes - 17-EISN-1-152
      </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
     <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-dashboard.js" type="text/javascript"></script>
</body>
<script type="text/javascript">
         $(document).ready(function(){
          $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove',
        
    }
});
         });
        </script>
</html>
