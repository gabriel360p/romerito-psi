<!doctype html>
<html lang="en">

<head>
  <title>Cart</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container text-center">
      <h1 class="">Carrinho</h1>
      <h5 class="border-bottom">Simple Market</h5>
    </div>
  </header>
  <main>
    <div class="container text-center">
      <span class="h5">Itens do Carrinho:</span>
    </div>

    <div class="row">
      <div class="container mt-4 w-50 text-start">

        <?php
        include 'banco.php';
        $sql = "SELECT rowid, * FROM cart";
        $query = $db->query($sql);

        while ($row = $query->fetchArray()) {

          echo "ID do produto : " . $row['product_id'];

          // $sqlprodutos = "SELECT rowid, * FROM products WHERE id ='"  . $row['product_id'] . "' ";
          $sqlprodutos = "SELECT rowid, * FROM products WHERE rowid ="  . $row['product_id'];

          $queryprodutos = $db->query($sqlprodutos);

          while ($row = $queryprodutos->fetchArray()) {
            echo "Nome do produto : " . $row['name'];
          }


          echo "<hr>";
        }
        ?>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>