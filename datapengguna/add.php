<?php
include "conn.php";
$data = mysqli_query($conn, "SELECT * FROM info_pelajar");
$rowcount = mysqli_num_rows($data);
$rowcount++;
if (isset($_POST["update"])){
    $IC = $_POST["IC"];
    $NAMA = $_POST["NAMA"];
    $HP = $_POST["HP"];
    $JANTINA = $_POST["JANTINA"];
    $result = mysqli_query(
        $conn,
        "INSERT INTO info_pelajar SET id='$rowcount',nama_pelajar='$NAMA',no_kp='$IC', no_hp='$HP', jantina='$JANTINA'"
    );
     
}
?>
<div>
    <a class="row2" href="create.php">BACK</a>
</div> 
<div>
    <div>
        <h3 class="maklumat">ADD MAKLUMAT</h3>
        <form method="post" enctype='multipart/form-data'>
            <div class="mt-4">
            <div class="mt-4">
                <label class="block">IC</label>
                <input maxlength="12" name="IC" type="text">  
                </div>
                <div class="mt-4">
                <label class="block">Nama</label>
                <input name="NAMA" type="text" >  
                </div>
                <label class="block">HP</label>
                <input name="HP" type="text">  
                </div>
                <div class="mt-4">
                <label class="block">Jantina</label>
                <select name="JANTINA" required>
                <option disabled selected value> -- select an option -- </option>  
                <option value="Lelaki">Lelaki</option>
                  <option value="Perempuan">Perempuan</option>
      </select>  
                </div>
                <div class="submit">
                    <button type="submit" name="update">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>