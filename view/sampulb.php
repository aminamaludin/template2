      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
      
      <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider')
        M.Slider.init(slider, {
          interval: 4000
        });

        const parallax = document.querySelectorAll('.parallax')
        M.Parallax.init(parallax);


        const dropdown = document.querySelectorAll('.dropdown-trigger')
        M.Dropdown.init(dropdown);

        const modal = document.querySelectorAll('.modal')
        M.Modal.init(modal);
        
        const formSelect = document.querySelectorAll('.select')
        M.FormSelect.init(formSelect);
        // $(".dropdown-trigger").dropdown();
        const datepicker = document.querySelectorAll('.datepicker')
        M.Datepicker.init(datepicker);

       
    //     document.addEventListener('DOMContentLoaded', function() {
    // var elems = document.querySelectorAll('.sidenav');
    // var instances = M.Sidenav.init(elems, options);
        
      </script> 

    </body>
  </html>