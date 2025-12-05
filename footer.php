  <footer class="py-3 mt-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
      <p class="small mb-1 mb-md-0 text-muted">
        © <span id="year"></span> Sanawell. All rights reserved.
      </p>
      <p class="small mb-0 text-muted">
        Made in India • Health • Fitness • Sports • Nutrition
      </p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>
