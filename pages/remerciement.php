

    <?php include_once('components/header.php')?>

  <main>
    <section>
      <div class="container-fluid bg-light">
        <div class="container-md">
          <div class="row align-items-center justify-content">
            <div class="p-4 text-center w-100">
              <?php $firstname = $_GET['prenom']?>
              <h1 class="text-uppercase fw-bold fs-1" style="color: orangered;">
                  Merci pour cette inscription <?php echo $firstname ?>
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-black text-light">
        <div class="container-md">
          <div class="align-items-center justify-content">
            <div class="p-4 text-center w-100">
              <h1 class="text-uppercase fw-bold fs-3">C'est quoi la suite ? </h1>
            </div>

            <div class="container-fluid bg-black text-light">
              <div class="container-md">
                <div class="row align-items-center justify-content">
                  <div class="col" style="width: 50px;height:50px">
                    <h4>step1</h4>
                  </div>
                  <div class="col" style="width: 50px;height:50px">
                    <h4>step2</h4>
                  </div>
                  <div class="col" style="width: 50px;height:50px">
                    <h4>step3</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </main>

    <?php include_once('components/footer.php')?>

  <script src="../javascript/bootstrap.min.js"></script>

</body>