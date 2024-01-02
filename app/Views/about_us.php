<div class="bg-menoventi100">
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item"><a href="home_page"><img src="<?php echo 'asset/images/svg/home.svg'; ?>" style="width: 1.2rem;" alt="Home icon" /></a></li>
            <li class="breadcrumb-item active" aria-current="page">About us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<main>
  <h1 class="visually-hidden">About us</h1>
  <section class="companyHistory bg-menoventi100">
    <div class="container">
      <div class="row cloudHistoryContainer">
        <div class="col">
          <?php echo file_get_contents('asset/images/svg/cloud.svg'); ?>
          <p class="cloud d-flex flex-column">
            <span><strong>Fresh Ways</strong> was born in</span>
            <span class="bold" style="font-size: 8rem; margin-block: -3rem -1rem;">2007</span>
            <span style="display: block; text-align: right;">from an idea by Nicola Sorace<br>and Stefano Lattarulo</span>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="sectionImage col-lg order-lg-1 d-flex justify-content-center align-items-center cloudTail d-none d-lg-inline">
          <?php echo file_get_contents('asset/images/svg/cloudTail.svg'); ?>
        </div>
        <div class="sectionContent col-lg order-lg-2">
          <span class="pretitle text-small">Get to know each other</span>
          <h2 class="text-big mb-4">Who are we?</h2>
          <p>Explore the journey of Fresh Ways, from our humble beginnings to where we stand today. Learn about our history and the values that drive us.<br><br>
            Meet the dedicated individuals who power Fresh Ways. Uncover the heart of our operations at our headquarters. Discover more about our team and the passion that fuels our logistics services.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="offices"  id="offices">
    <div class="container">
      <div class="row">
        <div class="sectionImage col-lg order-lg-2 d-flex justify-content-center align-items-center mb-5 mb-lg-0">
          <img style="width: 80%;" src="asset/images/offices.png" alt="Our offices" />
        </div>
        <div class="sectionContent col-lg order-lg-1">
          <span class="pretitle text-small">Discover our locations</span>
          <h2 class="text-big mb-4">Our offices</h2>
          <p>With strategically located offices throughout Italy and the United Kingdom, we are always in close proximity to you. Our Italian network stretches across the country while our UK offices guarantee trustworthy service. Wherever you are, we're available to meet your logistics requirements.<br><br>
            Our offices in Italy and England serve as vital components of our european network. Our proficient teams are acquainted with local regulations, ensuring swift transportation. Fresh Ways is your go-to provider of bespoke logistics solutions.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="locations">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-big mb-4">Our locations</h2>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col-sm col-lg-auto py-3 py-sm-0"><?php echo file_get_contents('asset/images/svg/flags/it.svg'); ?></div>
        <div class="col-sm col-lg-auto py-3 py-sm-0"><?php echo file_get_contents('asset/images/svg/flags/uk.svg'); ?></div>
        <div class="col-sm col-lg-auto py-3 py-sm-0"><p class="bold text-big">Next to come...</p></div>
      </div>
    </div>
  </section>
  <section class="team sectionNoSpaceUp sectionNoSpaceDown"  id="team">
    <div class="container">
      <div class="row sevenDots">
        <div class="col">
          <p class="text-large">There where <span class="bold">7 of us</span></p>
          <?php echo file_get_contents('asset/images/svg/sevenDots.svg'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <span class="pretitle text-small">Your trusted logistics partners</span>
          <h2 class="text-big mb-4">Meet our team</h2>
          <p>At Fresh Ways, our teams are committed partners. We provide a full range of services to fulfil all your logistics requirements. Our experts are always at hand to assist you with customs clearance and secure transportation. Our goal is to ensure your logistics journey is seamless and productive. <br><br>
            Our teams serve as the foundation of your logistics operations, providing unwavering assistance throughout the process. Whether you require help with your supply chain or temperature-controlled shipment, we possess the experience and expertise to meet your needs. At Fresh Ways, we strive to be more than just a service provider; we are your trusted logistics partners.
          </p>
        </div>
      </div>
    </div>
    <div class="andNowContainer">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="bold text-large">And now...</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-auto w-100 p-0">
            <?php echo file_get_contents('asset/images/svg/lotDots.svg'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="workWithUs sectionNoSpaceDown">
    <div class="container">
      <div class="row">
        <div class="sectionContent col-lg-6">
          <span class="pretitle text-small">A career with Fresh Ways</span>
          <h2 class="text-big mb-4">Join our growing team</h2>
          <p>At Fresh Ways, we operate as a team. Our corporate culture is founded on fostering friendships and mutual support. When you choose to work with us, you become an integral member of a team that highly regards your individuality. Our welcoming atmosphere stimulates advancement and originality, creating an environment to thrive in one's career.<br><br>
            We acknowledge that contented employees are the foundation of our achievements and we pledge to ensure you receive the appreciation, drive, and backing you deserve. We offer prospects for personal and proficient expansion, creating a supportive environment where you can flourish. Join us in our mission.
          </p>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-auto text-center">
          <p class="bold mb-4">💪 join the fresh ways teamteamteamteamteamteamteamteamteamteam</p>
          <a class="d-grid d-lg-block" href="">
            <button type="button" class="btn btn-primary">View all services</button>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>