<?php
include "conn.php"
?>

<center><p>DATA PENGGUNA</p></center>

<a class="p-3" href="add.php">TAMBAH</a>

<div class="table ">
  <div class=" table">
        <table border=2>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAMA PELAJAR </th>
              <th scope="col" >NO KP</th>
              <th scope="col" >NO HP</th>
              <th scope="col">JANTINA</th><br><br>
             </tr>

          </thead>

          <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM info_pelajar ");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr>


              <td><?php echo $info["id"]; ?></td>
              <td><?php echo $info["nama_pelajar"]; ?></td>
              <td><?php echo $info["no_kp"]; ?></td>
              <td><?php echo $info["no_hp"]; ?></td>
              <td><?php echo $info["jantina"]; ?><br></td><br>
              <td>


              <div>
                <button type="button"><a href="update.php?update_id=<?php echo $info["id"]; ?>">UPDATE</a></button>

              <div>
                <button type="button"><a href="delete.php?delete_id=<?php echo $info["id"]; ?>">DELETE</a></button><br><br>
            </div>
        </div>
    </div>
</div>
              </div>
            </td>
              </tr>
             
<?php 
} ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>           