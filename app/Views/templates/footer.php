<footer>
  <div class="py-5 bg-bluefresh1000">
    <div class="container my-5">
      <div class="row justify-content-between align-items-center">
        <div class="col-3">
          <div class="logo mb-4"><?php echo file_get_contents('asset/images/svg/FreshWaysLogo.svg'); ?></div>
          <p class="bold text-regular cl-light mb-2">Seguici</p>
          <div class="row">
            <div class="col-3">
              <img src="asset/images/svg/linkedinLogo.svg" alt="Linkedin">
            </div>
            <div class="col-3">
              <img src="asset/images/svg/instagramLogo.svg" alt="Instagram">
            </div>
          </div>
        </div>
        <div class="col-6 logo">
          <h2 class="bold text-large cl-light mb-3">Rimani aggiornato</h2>
          <form>
            <div class="form-group">
              <label for="email" class="cl-light mb-1">Email*</label>
              <input type="email" class="form-control" id="email" placeholder="latua@email.com" required>
            </div>
            <div class="form-group form-check mt-2">
              <input type="checkbox" class="form-check-input" id="privacyCheck" required>
              <label class="form-check-label cl-light" for="privacyCheck">I agree to the <a href="#">privacy policy</a></label>
            </div>
            <button type="submit" class="btn btn-secondary mt-4">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-light py-2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto text-center">
          <p class="text-small">Tutti i contenuti intellettuali del sito sono di esclusiva proprietà di Fresh Ways Srl</p>
          <span class="text-small"><a href="#">P.Iva IT05392140967</a> - <a href="">privacy</a> - <a href="">coockie policy</a> - <a href="">note legali</a> - <a href="">adozione del modello 231</a></span>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="asset/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="asset/jquery/jquery.js"></script>
<script src="asset/general.js"></script>
</body>

</html>