<?php

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Book Catalog</title>

  <link href="<?=$this->get('base_url') . 'assets/css/main.css'?>" rel="stylesheet">

  <!-- BOOTSTRAP 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="main">
    <div class="container-fluid pt-4">
      <div class="row py-3">
        <div class="col text-end">
          <button type="button" class="btn btn-lg btn-success fw-bold px-5" data-bs-toggle="modal" data-bs-target="#addModal">
            Add
          </button>
        </div>
      </div>
      <div class="row py-3">
        <div class="col">
          <table class="table table-bordered table-hover bg-light">
            <thead>
              <tr>
                <th class="text-center">TITLE</th>
                <th class="text-center">ISBN</th>
                <th class="text-center">AUTHOR</th>
                <th class="text-center">PUBLISHER</th>
                <th class="text-center">YEAR PUBLISHED</th>
                <th class="text-center">CATEGORY</th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody id="tbl_books">
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- MODALS -->
  <?php require $this->get('base_url') . 'application/views/modals/add_modal.php'; ?>
  <?php require $this->get('base_url') . 'application/views/modals/edit_modal.php'; ?>
  <?php require $this->get('base_url') . 'application/views/modals/delete_modal.php'; ?>

  <!-- BOOTSTRAP 5 SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var base_url = '<?=$this->get('base_url')?>';
  </script>
  <script type="text/javascript" src="<?=$this->get('base_url') . 'assets/js/main.js'?>"></script>
</body>
</html>