<html><head><title>admin</title></head>
<style>
body{font-family: system-ui, sans-serif;}
html{font-family: system-ui, sans-serif;}
  
pre{ 
  font-family: system-ui, sans-serif;
  font-weight: bold;
  background-color: #000;color: #ffffff;
  border: solid 3px; border-color: red; border-radius: 20px; padding : 10px;
  
}

a.white{
	background-color:#ffffff ;
	border: none;
}
a.white:hover{
	background-color:#ffffff ;
}


a{ 	background-color:#ffffff ;
	color: #f00;
	font-size:20px;
	text-decoration:none;
	border: solid 1px;
	border-radius: 5px;
	padding : 2px;
	
}

a:hover{	background-color: #ddd ;
		color:  #000; ;
		text-decoration:none;
}
</style>
<body>
<center>
ADMINISTRATION
<a href = "http://tritech.io" class= "white" ><img src = "home.png" height = "50px" </a>
<a href = "index.php?v=0" class = "menu" >python 3.7* http:8000</a>&nbsp; 
<a href = "index.php?v=1" class = "menu" >python 3.6* http:8000</a>&nbsp;
<a href = "index.php?v=2" class = "menu" >CHECK PS</a>&nbsp; 
<a href = "index.php?v=3" class = "menu" >stop ps http:8000 </a>&nbsp;
<a href = "index.php?v=4" class = "menu" > start tcpdump </a>&nbsp;
<a href = "index.php?v=5" class = "menu" > stop tcpdump </a>&nbsp;
<a href = "index.php?v=6" class = "menu" >html update</a>&nbsp;
<a href = "index.php?v=7" class = "menu" > ls -l </a>&nbsp;
<hr />
<?php 
echo date('m/d/Y H:i:s', time()); 
$filename = date('mdY-His', time());
echo " Filename: $filename" ;
?> 
<hr />
<?php
if (isset($_GET['v'])) {
	$thepost = $_GET['v']; // Default page
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "<pre>OUTPUT";
	echo "$output";
	echo"</pre>";
}
if ($thepost == 0) {
	$output = shell_exec('nohup python3 -m http.server 8000  --directory web >> /dev/null 2>&1 &');
	 echo "<pre>OUTPUT";
	echo "$output";
	echo"</pre>";
}

if ($thepost == 1) {
        $output = shell_exec('cd web; nohup python3 -m http.server 8000  >> /dev/null 2>&1 &');
        echo "<pre>OUTPUT";
	echo "$output";
	echo"</pre>";
}


if ($thepost == 2) {
	$output = shell_exec('ps');
	 echo "<pre>OUTPUT";
	echo "$output";
	echo"</pre>";
}
if ($thepost == 3) {
        $output = shell_exec('pkill  python3');
	 echo "<pre>OUTPUT";
	echo "$output";
	echo"</pre>";
}

if ($thepost == 4) {
	//      tcpdump -w 200306-0937.pcap -i eth0 
		$output = 'nohup  /home/cwc/http/ec2html/admin/tcpdmp.sh >> /dev/null 2>&1 &' ;
		//$tcpdmp = 'nohup tcpdump -w 03122020-013129.pcap -i enp2s0 &';
		
		//$tcpdmp = 'touch /home/cwc/http/ec2html/admin/'.$filename ;
		echo "tcpdump string = $output";
        echo shell_exec('/home/cwc/http/ec2html/admin/tcpdmp.sh');
         echo "<pre>OUTPUT";
        //echo "<pre>$output</pre>";
         print_r($output);
}

if ($thepost == 5) {
      $output = shell_exec('/home/cwc/http/ec2html/admin/tcpdmp.sh');
      print_r($output);
      echo "<pre>OUTPUT";
	//echo "$output";
	echo"</pre>";
}

if ($thepost == 6) {
        $command = '/var/www/html/admin/getec2html.sh';
        $output = shell_exec($command);
        echo "<pre>OUTPUT";
        echo "$output";
        echo"</pre>";
}


if ($thepost == 7) {
	$ls = "ls -l;date;";
	$output = shell_exec($ls);
	echo "<pre>OUTPUT";
	echo "$output";
	echo"</pre>";
}

?>
<hr />
<pre>
	python3 -m http.server 8000
	
	groot:$6$KyrYuoco5ZbWKJ7H$UMrJcnCTaXffVDQFgtUp1RJ5x1mLGCOqR1og8plYagjyxgG
T8Aorts7Vl.N5p2rZKWCzvx3UdKE5fAsJNot1G/:18330:0:99999:7:::


#!/bin/bash
cd /home/zoey/ec2html/;
git pull;
#rm -fR /home/zoey/html/*
cp -fR /home/zoey/ec2html/* /var/www/html/;

add this to /var/www/html/data/.htaccess
Options +Indexes
IndexOptions FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=*


</pre>
</body>
</html>
