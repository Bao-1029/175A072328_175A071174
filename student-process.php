<?php 

    session_start();
   require ('msql_connect.php');

   $Masv = trim($_GET["Masv"]);
   $SCMT = trim($_GET["SCMT"]); 

   $sql1="SELECT SV.TenSV FROM sinhvien SV where SV.ID_SV ='$Masv'";
   $req1=mysqli_query($conn, $sql1);
   $num= (mysqli_num_rows($req1));
   if($num == 1) {
   
    $_row = mysqli_fetch_array($req1);
    $sql = "SELECT MH.TenMonHoc,KH.HocKy ,MH.SoTinChi, D.DiemQuaTrinh, D.DiemThi, D.DiemTongKet FROM monhoc MH, diem D, kyhoc KH, sinhvien SV WHERE KH.Id_KyHoc=MH.Id_KyHoc and MH.Id_MonHoc=D.Id_MonHoc and D.Id_SV=SV.Id_SV and SV.Id_SV='$Masv' and SV.CMT='$SCMT'";

   $req= mysqli_query($conn, $sql);
   $output="";
   while($row=mysqli_fetch_array($req)) {
    $output .= '<tr>
               <td>'.$row['TenMonHoc'].'</td>
               <td>'.$row['HocKy'].'</td>
               <td>'.$row['SoTinChi'].'</td>
               <td>'.$row['DiemQuaTrinh'].'</td>
               <td>'.$row['DiemThi'].'</td>
               <td>'.$row['DiemTongKet'].'</td>
               </tr>';
    }
    echo json_encode(['status' => true, "output"=> $output, "tensv" => $_row['TenSV'] ]);
    } else {
    echo json_encode(['status' => false, 'code'=> 1]);
    }
    mysqli_close($conn);
?>