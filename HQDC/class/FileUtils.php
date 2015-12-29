<?php
/**
* 
*/
class FileUtils
{	
	private static $_filepath="upload";
	
	function __construct()
	{
		
	}

	public static function GetPath()
	{
		return self::$_filepath;
	}

	public static function Delete($filename)
	{
		$path = mb_convert_encoding($filename,"gbk", "utf-8");
		$result = @unlink ($path); 
		if ($result == false) { 
			return false;
		} else { 
			return true;
		} 
	}

	public static function CheckType($file,$type)
	{
		if ($file["type"] == "application/pdf")
		{
		  	return true;
		}
		else return false;
	}

	public static function UpFile($file,$isExisted=false)
	{
		if ($file["error"] > 0)
		{
		    // echo "Error! Return Code: " . $file["error"] . "<br />";
		    return false;
		}
	 	 else
	    {
	    	if (!file_exists(self::$_filepath))
	    	{ 
	    	  mkdir(self::$_filepath);
	    	}
	    	$path = self::$_filepath."/" . mb_convert_encoding($file["name"],"gbk", "utf-8");
	    	if(file_exists($path)&&$isExisted)
	    	{
	    		$tmpstr = strrchr($file['name'], ".");
	    		$file['name'] = substr($file['name'],0,strrpos($file['name'],'.'))."- 副本".$tmpstr;
	    		// echo $file['name'];
	    		return self::UpFile($file,$isExisted);
	    	}
	    	// echo "Upload: " . $file["name"] . "<br />";
	    	// echo "Type: " . $file["type"] . "<br />";
	    	// echo "Size: " . ($file["size"] / 1024) . " Kb<br />";
	    	// echo "Temp file: " . $file["tmp_name"] . "<br />";
	      if(move_uploaded_file($file["tmp_name"],$path))
	      {
	      	// echo "Stored in: " . $path."<br />";
	      	return $file['name'];
	      }
	      else {
	      	echo "Stored Error!<br />";
	      	return false;
	      }
	    }
	}
}
?>