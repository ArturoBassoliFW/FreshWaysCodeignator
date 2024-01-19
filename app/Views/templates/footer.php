<footer>
  <div class="py-5 bg-bluefresh1000">
    <div class="container my-5">
      <div class="row justify-content-between align-items-center">


        <!-- Logo and social -->


        <div class="col-lg-3">
          <div class="logo mb-4"><?php echo file_get_contents('asset/images/svg/FreshWaysLogo.svg'); ?></div>
          <p class="bold text-regular clgight mb-2">Seguici</p>
          <div class="row social">
            <div class="col-auto col-lg-3">
              <img src="asset/images/svg/linkedinLogo.svg" alt="Linkedin">
            </div>
            <div class="col-auto col-lg-3">
              <img src="asset/images/svg/instagramLogo.svg" alt="Instagram">
            </div>
          </div>
        </div>


        <!-- Footer form -->


        <div class="col-lg-6 logo">
          <h2 class="bold text-large cl-light mb-3">Rimani aggiornato</h2>

          <?= form_open('footer_form', ['id' => 'footer_form']) ?>

          <?= form_hidden('current_page', current_url()); ?>

          <div class="form-group">
            <?= form_label('Email*', 'email', array('class' => 'cl-light mb-1')) ?>
            <?= form_input(array(
              'type' => 'email',
              'name' => 'email',
              'id' => 'email',
              'class' => 'form-control',
              'placeholder' => 'latua@email.com',
              'value' => (session()->get('form_name') == 'footer_form' && isset(session()->get('form_data')['email']) && session()->get('form_data')['email'] != '') ? session()->get('form_data')['email'] : '',
            )) ?>


            <?php if ($errors = session()->getFlashdata('footer_form_errors')) : ?>
              <div class="error"><?= $errors['email'] ?? '' ?></div>
            <?php endif; ?>
          </div>

          <div class="form-group form-check mt-2">
            <?= form_checkbox(array(
              'name' => 'privacyCheck',
              'id' => 'privacyCheck',
              'class' => 'form-check-input',
              'value' => '1',
              'checked' => session()->get('form_name') == 'footer_form' && isset(session()->get('form_data')['privacyCheck']) && session()->get('form_data')['privacyCheck'] == '1' ? TRUE : FALSE,
            )) ?>
            <?= form_label('I agree to the <a href="#">privacy policy</a>', 'privacyCheck', array('class' => 'form-check-label cl-light')) ?>
          </div>
          <?php if ($errors = session()->getFlashdata('footer_form_errors')) : ?>
            <div class="error"><?= $errors['privacyCheck'] ?? '' ?></div>
          <?php endif; ?>

          <?= form_submit('mysubmit', 'Subscribe', 'class="btn btn-secondary mt-4"') ?>

          <?= form_close() ?>
        </div>
      </div>
    </div>
  </div>


  <!-- legal info -->


  <div class="bg-bluefresh1000 py-2">
    <div class="container disclaimer">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto text-center">
          <p class="text-small">Tutti i contenuti intellettuali del sito sono di esclusiva proprietà di Fresh Ways Srl</p>
          <span class="text-small cl-light"><a href="#">P.Iva IT05392140967</a> - <a href="">Privacy</a> - <a href="">Coockie policy</a> - <a href="">Note legali</a> - <a href="">Adozione del modello 231</a></span>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Scripts -->


<script src="asset/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="asset/jquery/jquery.js"></script>
<script src="asset/general.js"></script>
</body>

</html>