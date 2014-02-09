<?php

require 'connect.php';
//$obj = json_decode ($_REQUEST['songid'] );
$songid=1; //$obj ->{ 'songid' };

 $sql="SELECT link from songs WHERE songid='$songid'";
		$result = mysql_query($sql) or die(mysql_error());
        
		if(mysql_num_rows($result)>0)
		{
			while ($row = mysql_fetch_assoc($result))
				$output[]=$row;
			print(json_encode($output));
                            
		}
		else
	{
		echo "0";
	}

mysql_close();

?>
        
        
        
        
        
        
       