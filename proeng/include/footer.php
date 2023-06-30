  <!-- Start Footer -->
  <footer class="bg-dark text-light">
    <div class="container">
      <div class="row d-flex flex-column flex-md-row align-items-center">
        <div class="copyright col-md-6 mb-2 mb-md-0 text-center text-md-right">
          &copy; <span id="footer-copyright-year"></span> | <span class="text-primary font-weight-bold"> مدونة موهوبة</span>
        </div>
        <div class="links col-md-6 text-center text-md-left">
          
          <a href="#" target="_blank">
            <i class="fab fa-github"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fas fa-globe-africa"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fab fa-twitter"> </i>
          </a>
          <a href="#" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="mailto:mawaheb300@gmail.com" target="_blank">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Start JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    // New date Object
    let currentDate = new Date();
    // Get Copyright Year Span
    document.getElementById("footer-copyright-year").innerHTML = String(currentDate.getFullYear());
  </script>
  <!-- End JS -->
</body>
</html>
