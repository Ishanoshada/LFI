<?php
ini_set('max_execution_time', 10200);
ini_set('memory_limit','8048M');
date_default_timezone_set('Asia/Kolkata');
$now = date('Ymd', time())."H";
$mydir = getcwd(); 
if(isset($_GET['d'])) // delete zip
{
	unlink($_GET['d']);
	header("Location:index.php");
}

if(isset($_GET[$now]))
{

	if(isset($_POST['backbtn']))
	{
	date_default_timezone_set('Asia/Kolkata');
	$my_time = date('YmdHis', time()).'backup.zip';
	$re =  zipData(''.$mydir, $my_time);
	if($re==1){echo "<br>Backup file create successfull - <a href='".$my_time."'>Download</a> &nbsp; <a href='?d=".$my_time."'>Delete</a> ";}
	}
	else if(isset($_POST['backDel']))
	{
	$r =  delete_directory($mydir);
	if($r==1){ echo "Delete Successfull"; }
	}
	else  if(isset($_POST['backsql']))
	{
		echo sqlBackup();
	}
	else
	{
	?>
   
		<form method="post">	  
		<!--input type="submit" name="backsql" id="backsql" value="SQL Backup" /-->
		<input type="submit" name="backbtn" id="backbtn" value="Download Zip" />
		<input type="submit" name="backDel" id="backDel" value="Delete File" />
		</form>
      
	<?php
	}

}

if(isset($_GET['down']))
{
    $image = $_GET['down'];
$file = $image;
header('Content-Description: File Transfer');
    header('Content-Type: application/jpeg');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: public');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
readfile($file);

}

function delete_directory($dirname) {
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
     if (!$dir_handle)
          return false;
     while($file = readdir($dir_handle)) {
           if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file))
                     unlink($dirname."/".$file);
                else
                     delete_directory($dirname.'/'.$file);
           }
     }
     closedir($dir_handle);
     rmdir($dirname);
     return true;
}




function zipData($source, $destination) {
	
        if (extension_loaded('zip')) {
            if (file_exists($source)) {
                $zip = new ZipArchive();
                if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
                    $source = realpath($source);
                    if (is_dir($source)) {
                        $iterator = new RecursiveDirectoryIterator($source);
                        // skip dot files while iterating 
                        $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
                        $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
                        foreach ($files as $file) {
                             $file = realpath($file);
						
                            if (is_dir($file)) {
                                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                            } else if (is_file($file)) {
                                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                            }
                        }
                    } else if (is_file($source)) {
                        $zip->addFromString(basename($source), file_get_contents($source));
                    }
                }
                return $zip->close();
            }
        }
        return false;
    }



function sqlBackup()
{
    
   $para = array(
	'db_host'=> 'localhost',  //mysql host
	'db_uname' => 'onlineso_root',  //user
	'db_password' => 'R@V2NhhJ5WAZYua', //pass
	'db_to_backup' => 'onlineso_solution', //database name
	'db_backup_path' => getcwd(), //where to backup
	'db_exclude_tables' => array('wp_comments','wp_w3tc_cdn_queue') //tables to
);
return __backup_mysql_database($para);

}

function __backup_mysql_database($params)
{
	$mtables = array(); $contents = "-- Database: `".$params['db_to_backup']."` --\n";
	
	$mysqli = new mysqli($params['db_host'], $params['db_uname'], $params['db_password'], $params['db_to_backup']);
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	$results = $mysqli->query("SHOW TABLES");
	
	while($row = $results->fetch_array()){
		if (!in_array($row[0], $params['db_exclude_tables'])){
			$mtables[] = $row[0];
		}
	}

	foreach($mtables as $table){
		$contents .= "-- Table `".$table."` --\n";
		
		$results = $mysqli->query("SHOW CREATE TABLE ".$table);
		while($row = $results->fetch_array()){
			$contents .= $row[1].";\n\n";
		}

		$results = $mysqli->query("SELECT * FROM ".$table);
		$row_count = $results->num_rows;
		$fields = $results->fetch_fields();
		$fields_count = count($fields);
		
		$insert_head = "INSERT INTO `".$table."` (";
		for($i=0; $i < $fields_count; $i++){
			$insert_head  .= "`".$fields[$i]->name."`";
				if($i < $fields_count-1){
						$insert_head  .= ', ';
					}
		}
		$insert_head .=  ")";
		$insert_head .= " VALUES\n";		
				
		if($row_count>0){
			$r = 0;
			while($row = $results->fetch_array()){
				if(($r % 400)  == 0){
					$contents .= $insert_head;
				}
				$contents .= "(";
				for($i=0; $i < $fields_count; $i++){
					$row_content = 	str_replace("\n","\\n",$mysqli->real_escape_string($row[$i]));
					
					switch($fields[$i]->type){
						case 8: case 3:
							$contents .=  $row_content;
							break;
						default:
							$contents .= "'". $row_content ."'";
					}
					if($i < $fields_count-1){
							$contents  .= ', ';
						}
				}
				if(($r+1) == $row_count || ($r % 400) == 399){
					$contents .= ");\n\n";
				}else{
					$contents .= "),\n";
				}
				$r++;
			}
		}
	}
	
	if (!is_dir ( $params['db_backup_path'] )) {
            mkdir ( $params['db_backup_path'], 0777, true );
     }
	
	$backup_file_name = $params['db_to_backup']."_".date( "d-m-Y_H-i-s").".sql";
		$val=''; 
	$fp = fopen($backup_file_name ,'w+');
	if (($result = fwrite($fp, $contents))) {
		$val = "Backup file created '$backup_file_name'  - <a href='backup.php?down=$backup_file_name'>Download</a>"; 
	}
	fclose($fp);
	return $val;
}



?>
