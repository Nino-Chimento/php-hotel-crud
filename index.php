

<?php
  include __DIR__ ."/server.php";
  include __DIR__ ."/header.php"
 ?>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <th>Id</th>
            <th>Numero</th>
            <th>Piano</th>
            <th>Vedi</th>
            <th>Uptade</th>
            <th>Cancella</th>
          <?php if (!empty(rooms)) {
            foreach ($rooms as $stanza) { ?>
              <tr>
                <td> <?php echo $stanza["id"] ?></td>
                <td> <?php echo $stanza["room_number"] ?></td>
                <td> <?php echo $stanza["floor"] ?></td>
                <td><a href="show/show.php?id=<?php echo $stanza["id"] ?>">Vedi</a> </td>
                <td><a href="#">Uptade</a> </td>
                <td>
                  <form class="" action="delete/delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $stanza["id"] ?>">
                    <input type="submit" name="" value="DELETE">
                </form>
              </td>
              </tr>
            <?php } ?>
          <?php } ?>

          </table>
        </div>
      </div>
    </div>
  </body>
</html>
