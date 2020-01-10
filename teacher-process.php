<?php 

    session_start();
   require ('msql_connect.php');

   $NamHoc = trim($_GET["NamHoc"]);
   $TenLop = trim($_GET["TenLop"]); 
   $TenMH = trim($_GET["TenMH"]);

    $sql = "SELECT SV.Id_SV, SV.TenSV, D.DiemQuaTrinh, D.DiemThi, D.DiemTongKet FROM monhoc MH, diem D, kyhoc KH, sinhvien SV , lop L WHERE KH.Id_KyHoc=MH.Id_KyHoc and MH.Id_MonHoc=D.Id_MonHoc and D.Id_SV=SV.Id_SV and Sv.Id_Lop=L.Id_Lop and KH.NamHoc='$NamHoc' and MH.TenMonHoc='$TenMH' and L.TenLop='$TenLop'";

   $req= mysqli_query($conn, $sql);
   $output="";
   while($row=mysqli_fetch_assoc($req)) {
    $output .= '<tr>
                    <td>'.$row['Id_SV'].'</td>
                    <td>'.$row['TenSV'].'</td>
                    <td>'.$row['DiemQuaTrinh'].'</td>
                    <td>'.$row['DiemThi'].'</td>
                    <td>'.$row['DiemTongKet'].'</td>
                    <td><a href="#">
                        <i class="fas fa-edit"></i>
                    </a> |
                    <a href="#" onclick="return confirm("Bạn có muốn xoá không?");">
                        <i class="fas fa-trash-alt"></i>
                    </a> |
                    <a href="#">
                        <i class="fas fa-plus-square"></i>
                    </a></td>
                </tr>';
    }
    echo json_encode(["output" => $output]);
    mysqli_close($conn);
?>