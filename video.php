



<?php








error_reporting(0);
$get_url = $_GET["url"];
if (is_null($get_url))
{
echo "Enter Youtube Link";
}
else
{
// youtube-dl -f best -g IS AUTO SELECTED
$youtube_downloader = "youtube-dl -g ".$get_url." 2>&1";



$stream = exec($youtube_downloader);



 echo $stream;
 

// echo readfile($stream);
// echo readgzfile($stream);



}




?>
