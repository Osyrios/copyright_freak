
    <?php include_once('components/header.php');

    $firstname = $_GET['prenom']; //prénom renseigné
    $email = $_GET['email']; // email renseigné
    $legal = $_GET['legal']; // on ou off

    ?>

  <main>
    <section>
      <div class="container-fluid bg-light">
        <div class="container-md">
          <div class="row align-items-center justify-content">
            <div class="p-4 text-center w-100">
              <h1 class="text-uppercase fw-bold fs-1" style="color: orangered;">
                  Merci pour cette inscription <?php echo $firstname ?>
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-black text-light py-5">
        <div class="container-md">
          <div class="align-items-center justify-content">
            <div class="p-4 text-center w-100">
              <h1 class="text-uppercase fw-bold fs-3">C'est quoi la suite ? </h1>
            </div>
            <div class="container-fluid bg-black text-light py-5">
              <div class="container-md d-flex justify-content-center">
                    <a href="Blog.php" class="btn cta">CONSULTER LE BLOG</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </main>

    <?php include_once('components/footer.php')?>

