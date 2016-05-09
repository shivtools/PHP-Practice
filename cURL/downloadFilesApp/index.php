<?php 
	class Download{

		const URL_MAX_LENGTH = 2050;

		//clean url 
		protected function cleanUrl($url){
			if(isset($url) && !empty($url)){
				if(strlen($url) < self::URL_MAX_LENGTH){
					return strip_tags($url);
				}
			}
		}

		//is url

		protected function isURL{
			$url = $this->cleanUrl($url);
			if(isset($url)){
				if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
					return $url;
				}
			}
		}

		//get extension of URL if the URL is an actual URL
		protected function returnExtension($url){
			if($this->isUrl($url)){

				//get extension of file - basically everything after .
				$extension = end(preg_split("/[.]+/", $url));

				if(isset($end)){
					return $end;
				}
			}
		}

		//Download file

		public function downloadFile($url){
			if($this->isUrl($url)){
				$extension = $this->returnExtension($url);

				//If extension is not null
				if($extension){

					$ch = curl_init(); //handler 

					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //if set to true, then the data is not going to be returned into browser. If false, then file returned into browser

					//Execute session by passing 
					$return = curl_exec($ch);
					curl_close($ch);

					//create path to downloads folder

					$destination = "downloads/file.$extension";
					$file = fopen($destination, "w+"); //open a file to read and write into
					fputs($file, $return); //put into file the contents

					if(fclose($file)){
						echo "File downloaded";
					}

				}
			}
		}


	}

	$obj = new Download();

	if(isset($_POST['url'])){
		$url = $_POST['url'];
	}
?>





<!-- Basic form -->
<form action="http://localhost/curl/index.php" method="post">
	<input type="text" name="url" maxlength="2000"/>
	<input type="submit" value="Download"/>
</form>

<?php 

if(isset($url)){
	$obj->downloadFile($url);
}
 ?>}
