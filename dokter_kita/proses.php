<html>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Berat Badan Ideal</title>
<p>&nbsp;</p>
<p>&nbsp;</p><br><br><br><br>
<table width="25%" height="229" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#99CC99">
<tr> 
    <td width="4%" align="right"><img src="./img/kiri.jpg"></td>
    <th width="100%" bgcolor="#9CCE17" ><div align="center"><strong><font face="verdana" size="2" color="#FFFFFF">FORM HITUNG BERAT BADAN</font></strong></div></th>
    <td width="4%"><img src="./img/kanan.jpg"></td>
</tr>
<tr>
    <td background="./img/b-kiri.jpg">&nbsp; </td>
    <td>
    <table width="486" align="center">
        <tr><td width="231"><font face="verdana" size="2">&nbsp;
        </font>
<form action="index.php" method="post">
          <table width="100%" height="100%" border="0px" align="center">
          <tr>
            <td width="207" rowspan="4" valign="top"><div align="center"><img src="img/badan.jpg" width="150" height="93" align="top"></div></td>
            <th><font size="2" face="verdana">Nama  Anda  : </font></th> 
            
                        <?php
                             $nama_anda = $_POST['nama'];
                             echo "<td>";
                             echo "<font face='Agency FB' size='2' color='red'>";
                             echo " $nama_anda";
                             echo "</font>";
                             echo "</td>";
                             ?>
                            
            </tr>
          <tr>
            <th><font size="2" face="verdana">Tinggi Anda : </font></th> 
                        <?php
                             $tinggi_anda = $_POST['tinggi'];
                             echo "<td>";
                             echo "<font face='Agency FB' size='2' color='red'>";
                             echo " $tinggi_anda";
                             echo " Centimeter";
                             echo "</font>";
                             echo "</td>";
                             ?>
                       
            </tr>
          <tr>
            <th><font size="2" face="verdana">Berat Anda :</font></th>
                        <?php
                        $tinggi_anda = $_POST['tinggi'];
                        $berat_badan = ( $tinggi_anda  - 100 );
                        $hasil_ideal = $berat_badan  - ( $berat_badan * 0.1 ) ;
                        echo "<td>";
                        echo "<font face='Agency FB' size='2' color='red'>";
                        echo " $hasil_ideal";
                        echo " Kilogram";
                        echo "</font>";
                        echo "</td>";
                        ?>
            
          </tr>
          
          <tr>
            
                <th><font size="2" face="verdana"> Kate'gorye  :
              </font></th>
              <?php
              $tinggi_anda = $_POST['tinggi'];
              $berat_badan = ( $tinggi_anda - 100 );
              $hasil_ideal = $berat_badan - ( $berat_badan * 0.1 ) ;
              echo "<td>";
              if ($hasil_ideal < 50 ){
            
              echo "<font face='Agency FB' size='2' color='red'>";
              echo "Kurus";
              echo "</font>";        
              }else if($hasil_ideal  > 50 ){
              echo "<font face='Agency FB' size='2' color='red'>";
              echo "Gemuk";
              echo "</font>";
              echo "</td>";
              }
              
              ?>

              
          </tr>
          
          <tr>
              <td height="38"><div align="center"><font size="1" face="Arial, Helvetica, sans-serif">Masukkan Data Dengan Benar</font></div></td>
            <td>
           </td>
           <td>
           <font size="4" face="verdana">
                <input type="submit" value="Back">
              </font>
              </td>
          </tr>
          </table>
        </form>
        
                
        </td></tr>
    </table>
    </td>
    <td background="./img/b-kanan.jpg">&nbsp;</td>
    <td width="1%"></td>
</tr>
<tr> 
    <td align="right"><img src="./img/kib.jpg"></td>
    <td bgcolor="#9DCF18" ><div align="center"><strong><font face="verdana" size="3"></font></strong></div></td>
    <td><img src="./img/kab.jpg"></td>
</tr>
</table>

<div align="center">
  <p><font face="verdana" size="1" align="center" title="By : Muhammmad Imam Makhrus" color="#999999">Created By : Muhammmad Imam Makhrus</font></p>
  <p>
  <font size="1" face="verdana" color="#999999">
  
    <?php
echo $waktu=date("d-m-Y H:i:s");
echo "<br>";
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    echo 'IP Anda : ',$_SERVER['HTTP_X_FORWARDED_FOR'],'<br>';
}else{
    echo 'IP Anda : ',$_SERVER['REMOTE_ADDR'],"<br>";
}
echo "<br>";
?>
    </font>
  </p>
</div>
</body>
</html>