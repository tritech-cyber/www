<html><head><title>tritech.io</title></head>
<style>
body{font-family: system-ui, sans-serif;}
html{font-family: system-ui, sans-serif;}
  
pre{ 
  background-color: #ddd; color: #000;
  border: solid 1px; border-radius: 20px; padding : 10px;
}



a.white{
	background-color:#ffffff ;
}
a.white:hover{
	background-color:#ffffff ;
}

a{ 	background-color:#ff0000 ;
	color: #fff;
	font-size:20px;
	text-decoration:none;
	border: solid 1px;
	border-radius: 5px;
	padding : 2px;
	
}

a:hover{	background-color: #dc322f; ;
		color:  #fdf6e3; ;
		text-decoration:none;
}
</style>
<body>
<center>
<a href = "localhost" class= "white" ><img src = "home.png" height = "50px" </a>
<a href = "https://www.tcpdump.org/" >tcpdump.org</a>&nbsp; 
<a href = "https://www.redhat.com"  >REDHAT</a>&nbsp; 
<a href = "https://www.centos.org/"  >CENTOS </a>&nbsp;
<a href = "https://getfedora.org/"  >FEDORA </a>&nbsp;
<hr />
<a href = "files/"  >files </a>&nbsp;
<a href = "data/"  >data </a>&nbsp;

<hr />
<a href = "admin/"  > ADMINISTRATION </a>&nbsp;

<hr />
<?php
if (isset($_GET['v'])) {
	$thepost = $_GET['v']; // Default page
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 0) {
	$output = shell_exec('nohup python3 -m http.server 8000  --directory web >> /dev/null 2>&1 &');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 1) {
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 2) {
        $output = shell_exec('pkill  python3');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 3) {
        $output = shell_exec('cat DataOutput.txt');
         echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 4) {
        $output = shell_exec('./LinuxTestBuildV1_51.x86_64');
			//     ./LinuxTestBuildV1_32.x86_64
         echo "OUTPUT";
        echo "<pre>$output</pre>";
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
