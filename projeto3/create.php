<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  <div class="container text-center">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <span class="display-3 border-bottom">Soma Online</span>
            </div>
            <!-- <div class="col">Column</div>
            <div class="col">Column</div> -->
        </div>
    </div>
  </header>
  <main>
  <div class="container ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <form action="operador.php" method="POST">
                    <div class="mb-3">
                      <label for="" class="form-label">Valor 1</label>
                      <input type="number"
                        class="form-control" name="num1" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Valor 2</label>
                      <input type="number"
                        class="form-control" name="num2" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <button name="" id="" class="btn btn-primary">Somar</button>
                </form>
            </div>
            <!-- <div class="col">Column</div>
            <div class="col">Column</div> -->
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>