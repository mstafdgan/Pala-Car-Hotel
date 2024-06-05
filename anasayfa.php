<?php include 'header.php'; ?>

<div id="container" class="container p-5">
    <div class="card p-5">
        <div class="form">
            <h1 class="text-center mb-3">Araç Kayıt</h1>
        <form action="islem.php" method="post">
            <input type="text" name="plaka" class="form-control text-center" placeholder="Plaka Giriniz"><br>
            <select name="kat" class="form-control text-center"><br>
                <option value="">Kat Seçiniz</option>
                <option value="">Kat 1</option>
                <option value="">Kat 2</option>
                <option value="">Kat 3</option>
            </select><br>
            <select name="blok" class="form-control text-center"><br>
                <option value="">Blok Seçiniz</option>
                <option value="A Blok">A Blok</option>
                <option value="B Blok">B Blok</option>
                <option value="C Blok">C Blok</option>
                <option value="D Blok">D Blok</option>
                <option value="E Blok">E Blok</option>
            </select><br>
            <div class="text-center">
            <button type="reset" class="btn bg-danger">Sıfırla</button>
            <button type="submit" name="kaydet" class="btn bg-primary">Kaydet</button>
            </div>
        </div>
    </div>
</div>

  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>