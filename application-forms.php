<div class="application-forms-container">
  <div class="flex-row">
    Upload File: &nbsp;&nbsp;&nbsp;
    <input type="file" accept="image/*" name="image" id="file">

    <button type="button" name="button" id="btn-upload">Upload</button>
  </div>

  <div class="flex-row">
    <table>
      <thead>
        <tr>
          <th>File Name</th>
          <th>Date Uploaded</th>
          <th>Uploader</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lnu_grad_school";
        $con = mysqli_connect($servername,$username,$password,$dbname);

        $select_file = $con->query("SELECT * FROM forms");
        while ($row = mysqli_fetch_assoc($select_file)) {
          ?>
            <tr>
              <td><?= $row['fileName'] ?></td>
              <td><?= $row['dateUploaded'] ?></td>
              <td><?php
              $id = $row['uploader'];
                $select_uploader = $con->query("SELECT * FROM user_tbl WHERE id = '$id'");
                $uploader = $select_uploader->fetch_assoc();
                echo $uploader['uname'];
               ?></td>
               <td>
                 <a href="download.php?doc=<?= $row['id'] ?>">Download</a>
                 &nbsp;&nbsp;&nbsp;
                 <a href="delete_file.php?doc=<?= $row['id'] ?>">Delete</a>
               </td>
            </tr>
          <?php
        }

         ?>
      </tbody>
    </table>
  </div>
</div>
