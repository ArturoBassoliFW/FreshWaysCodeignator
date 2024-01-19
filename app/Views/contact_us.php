<div class="container">
  <div class="row">
    <div class="col mt-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb align-items-center">
          <li class="breadcrumb-item"><a href="home_page"><img src="<?php echo 'asset/images/svg/home.svg'; ?>" style="width: 1.2rem;" alt="Home icon" /></a></li>
          <li class="breadcrumb-item active" aria-current="page">Contacts</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<section class="contactForm">
  <div class="container">
    <div class="row">
      <div class="col">

        <h2 class="bold text-large mb-3">Contact Us</h2>

        <?= form_open('contact_us_form', ['id' => 'contact_us_form']) ?>

        <?= form_hidden('current_page', current_url()); ?>

        <div class="form-group">
          <?= form_label('Email*', 'email', ['class' => 'mb-1']) ?>
          <?= form_input([
            'type' => 'email',
            'name' => 'email',
            'id' => 'email',
            'class' => 'form-control',
            'placeholder' => 'your@email.com',
            'value' => session()->get('form_name') == 'contact_us_form' && isset(session()->get('form_data')['email']) ? session()->get('form_data')['email'] : '',
          ]) ?>
          <?php if ($errors = session()->get('contact_us_form_errors')) : ?>
            <div class="error"><?= $errors['email'] ?? '' ?></div>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <?= form_label('Company Name', 'companyName', ['class' => 'mb-1']) ?>
          <?= form_input([
            'type' => 'text',
            'name' => 'companyName',
            'id' => 'companyName',
            'class' => 'form-control',
            'placeholder' => 'Your Company Name',
            'value' => session()->get('form_name') == 'contact_us_form' && isset(session()->get('form_data')['companyName']) ? session()->get('form_data')['companyName'] : '',
          ]) ?>
          <?php if ($errors = session()->get('contact_us_form_errors')) : ?>
            <div class="error"><?= $errors['companyName'] ?? '' ?></div>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <?= form_label('Inquiry Type*', 'inquiryType', ['class' => 'mb-1']) ?>
          <?= form_dropdown(
            'inquiryType',
            ['' => 'Select Inquiry Type', 'transport' => 'Transport', 'logistic' => 'Logistic', 'customer' => 'Customer', 'other' => 'Other'],
            session()->get('form_name') == 'contact_us_form' && isset(session()->get('form_data')['inquiryType']) ? session()->get('form_data')['inquiryType'] : '',
            'class="form-control"'
          ) ?>
          <?php if ($errors = session()->get('contact_us_form_errors')) : ?>
            <div class="error"><?= $errors['inquiryType'] ?? '' ?></div>
          <?php endif; ?>
        </div>

        <?= form_submit('mysubmit', 'Submit', 'class="btn btn-secondary mt-4"') ?>

        <?= form_close() ?>


      </div>
    </div>
  </div>
</section>

<section class="contact">
  <div class="container phoneContact">
    <div class="row">
      <div class="col mb-5">
        <span class="pretitle">Everything you need</span>
        <h2 class="text-big">Useful documents</h2>
        <p>tel: <a href="tel:+39039635891">+39 039 635891</a></p>
      </div>
    </div>
  </div>
  <div class="container officeLocations">
    <div class="row">
      <div class="col mt-5">
        <div class="row">
          <div class="col mb-4">
            <span class="pretitle">Everything you need</span>
            <h2 class="text-big">Useful documents</h2>
          </div>
          <div class="row gap-4 officeContacts">
            <div class="location col-lg">
              <h3 class="text-large">Bernareggio</h3>
              <a href="tel:+39039635891">
                <p>Viale delle Industrie, 3, 20881 Bernareggio MB</p>
              </a>
            </div>
            <div class="location col-lg">
              <h3 class="text-large">Burago</h3>
              <a href="tel:+39039635891">
                <p>Via Enrico Fermi, 14, 20875 Burago di Molgora MB</p>
              </a>
            </div>
            <div class="location col-lg">
              <h3 class="text-large">Rivalta di Torino</h3>
              <a href="tel:+39039635891">
                <p>Via Terza Strada, 12, 10040 Rivalta di Torino TO</p>
              </a>
            </div>
            <div class="location col-lg">
              <h3 class="text-large">Verona</h3>
              <a href="tel:+39039635891">
                <p>Via Sommacampagna, 63D/E, 37137 Verona VR</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>