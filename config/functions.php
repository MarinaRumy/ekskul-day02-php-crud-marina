<?php

    function siswa_create(){
        // your codes here
    }

    function siswa_read() {

        include __DIR__ . './connection.php';   
        
        $sql = "SELECT * FROM ekskul";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo '
                <tr>
                <td>'.$no.'</td>
                <td>'.$row["judul"].'</td>
                <td>'.$row["keterangan"].'</td>
                <td>
                    <a href="?menu=ekskul&page=read-detail&id='.$row["id"].'" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-eye"></i></a>
                    <a href="?menu=ekskul&page=update&id='.$row["id"].'" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-pencil"></i></a>
                    <a href="?menu=ekskul&page=delete&id='.$row["id"].'" class="btn btn-sm btn-outline-danger" onClick="return confirm(Anda yakin ingin hapus?)"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
                ';
                $no++;
            }
            } else {
                echo "0 results";
            }

    }

    function siswa_read_detail(){
        include __DIR__ . './connection.php'; 
        
        $get_id = $_GET['id'];

       

        $sql = "SELECT * FROM ekskul WHERE id=$get_id";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              

                echo '
                    <ul class="list-group">
                                
                        <li class="list-group-item">
                            Judul
                            <span class="d-block fw-bold">
                                '. $row["judul"] .'
                            </span>
                        </li>
                        <li class="list-group-item">
                            Keterangan
                            <span class="d-block fw-bold">
                                '.  $row["keterangan"] .'
                            </span>
                        </li>
                    
                        </li>
                </ul>
                ';

            }
          } else {
            echo "0 results";
          }
          $conn->close();
    }

    function siswa_update(){
       
        include __DIR__ . './connection.php'; 
        
        $get_id = $_GET['id'];

       

        $sql = "SELECT * FROM ekskul WHERE id=$get_id";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              

                echo '

                    <form action="?action=update&id=0" method="post">
                            <ul class="list-group">
                            <li class="list-group-item">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control form-control-lg" value="'. $row["judul"] .'">
                        </li>

                        <li class="list-group-item">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control form-control-lg" value="'.  $row["keterangan"] .'">
                        </li>
                        
                        <li class="list-group-item">
                        <button type="submit" class="btn btn-lg btn-success w-100"><i class="fa-solid fa-pencil me-2"></i> Update</button>
                    </li>
                        </li>
                    
                        </li>
                        </ul>
                    </form>

                ';

            }
          } else {
            echo "0 results";
          }
          $conn->close();

    }

    function siswa_update_proses(){
        // your codes here
    }

    function siswa_delete(){
        // your codes here
    }