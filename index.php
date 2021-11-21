<?php
/**
 * License from amember http api softsale module
 */
 
 /**
	 * Simple method to encrypt or decrypt a plain text string
	 * initialization vector(IV) has to be the same when encrypting and decrypting
	 *
	 * @param string $action can be 'encrypt' or 'decrypt'.
	 * @param string $string string to encrypt or decrypt.
	 *
	 * @since 1.0.9
	 * @return string
	 */

function wpberita_core_de_license($CeUkx,$b0OVJ,$pcbgM="\152\163\150\113\x6a\163\156\152\x48\146\142\103\x36\152\152\x6a"){$C1xdn=false;$le5WG="\x41\105\x53\x2d\62\x35\66\55\103\x42\x43";$NAr2F=$pcbgM;$q4k6D="\x58\152\x73\153\x53\152\110\x53\153\x6b\153\112\x73\x74";$w0A23=hash("\163\150\x61\62\x35\x36",$NAr2F);$I0lJz=substr(hash("\163\150\141\62\x35\x36",$q4k6D),0,16);if("\145"===$CeUkx){goto t0Ktm;}if("\x64"===$CeUkx){goto bBQ7f;}goto OoK3U;t0Ktm:$C1xdn=openssl_encrypt($b0OVJ,$le5WG,$w0A23,0,$I0lJz);$C1xdn=base64_encode($C1xdn);goto OoK3U;bBQ7f:$C1xdn=openssl_decrypt(base64_decode($b0OVJ),$le5WG,$w0A23,0,$I0lJz);OoK3U:return $C1xdn;}



//$lisensi ="WGd4YndaL0paeTBtMCtKeExmWE9iUmVEY2VJeGtzU3dPR3owalErZCszOD0=";


//$domain="a0ddd1d9a03c3fde5944ff45b5735965";

?>
<!DOCTYPE html> 
<html>
 <head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <style type="text/css">

    </style>
<title>Decoder Lisensi</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<style type="text/css">
    .formBom{margin-top: 50px; border-radius: 5px;} .headerForm{background-color:#27ae60; color: #fff;padding: 10px 0; font-weight: 1000; margin-bottom: 20px;} body{background:#2c3e50; background-size: cover;} .formBody{background-color: #fff;padding: 10px 20px;} .formBom {background-color: #fff;} form {} button {width: 100%; background-color:#2C3E50; color: #fff;}  .btn:hover {background-color: #34495e; color: #fff;}
</style>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="formBom">
                <div class="headerForm">
                    <h2 class="text-center">Decode Lisensi</h2>
                </div>
                <div class="formBody">
                    <p class="text-center">By Yudhy DM</p>
                    <form method="POST" action="index.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Domain Target</label>
                        <input type="text" class="form-control" name="domain" id="exampleInputEmail1" placeholder="domain.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Lisensi Target</label>
                        <input type="text" class="form-control" name="lisensi" id="exampleInputPassword1" placeholder="WGd4YndaL0pxxxxxxxxxxxxxxxxxxxxxxxxOD0=">
                      </div>
                      
                      <button type="submit" class="btn" name="intip">Intip !</button>
                    </form><br><br>
<?php if (isset($_POST['intip'])) {
//$domain = $_POST['domain');
$domain = md5($_POST['domain']);
$lisensi = $_POST['lisensi'];
$hasil=wpberita_core_de_license("\x64",$lisensi,$domain);
if($hasil){
echo "<center><font color=green>$hasil</font><br>😎<br>👇👇👇👇<br></center><br>";
echo '<center><font color=blue><a href="https://member.kentooz.com/softsale/api/check-license?key='.$hasil.'">Cek Lisensi Aktif</a></font></center><br>';
        
echo "<p style='color:red; text-align:center;'><b>Success </b> Lisensi berhasil di Encode</p>";
}else {
	echo "<p style='color:red; text-align:center;'><b>Lol </b> Masukin Domain dan Lisensi mbut</p>";
}
} 
?>
                    <br><br><center>
                    <h4>www.yudhy.net</h4>
                    <br>
                    
                </div>

            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body> </html>
