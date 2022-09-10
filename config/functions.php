<?php

    

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