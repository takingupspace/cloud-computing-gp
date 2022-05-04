<?php
session_start();
include("header.php");

echo '<div class="p-5 mb-4 bg-light rounded-3">';
echo '	<div class="container-fluid py-5">';
echo '		<h1 class="display-5 fw-bold">ClowdyHacks Downloader!</h1>';
echo '		<p class="col-md-10 fs-4">To start, paste a url in the correct input box.</p>';
echo '		<a onclick="updateContent(\'about\')"><button class="btn btn-outline-primary btn-lg" type="button">More about us!</button></a>';
echo '	</div>';
echo '</div>';
echo '<div id="downloaders-block" class="row align-items-md-stretch">';
echo '	<div class="col-md-12">';
echo '		<div class="h-100 p-5 text-white bg-gradient rounded-3">';
echo '			<h2>YouTube</h2>';
echo '			<h6 class="mb-2 text-dark" id="youtube-desc">paste url to download the video!</h6>';
echo '			<div class="input-group mb-3">';
echo '				<input id="youtube-link" name="youtube-link" type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=dQw4w9WgXcQ" aria-label="youtube url" aria-describedby="youtube-desc">';
echo '			</div>';
echo '			<div class="container d-flex justify-content-end" style="padding: 0 !important">';
echo '				<a onclick="updateContent(\'youtube\')"><button class="btn btn-outline-light" type="submit" name="submit" id="submit">Download</button></a>';
echo '			</div>';
echo '		</div>';
echo '	</div>';
//echo '<div class="col-md-6">';
//echo '<div class="h-100 p-5 text-white bg-gradient rounded-3">';
//echo '<h2>Tiktok</h2>';
//echo '<h6 class="mb-2 text-dark" id="youtube-desc">paste url to download the video!</h6>';
//echo '<div class="input-group mb-3">';
//echo '<input id="tiktok-link" type="text" class="form-control" placeholder="https://www.tiktok.com/@ashleyfrance25/video/7061770624317803823" aria-label="tiktok url" aria-describedby="tiktok-desc">';
//echo '</div>';
//echo '<div class="container d-flex justify-content-end" style="padding: 0 !important">';
//echo '<a onclick="updateContent(\'tiktok\')"><button class="btn btn-outline-light" type="button">Download</button></a>';
//echo '</div>';
//echo '</div>';
//echo '</div>';
echo '</div>';

include ("footer.php");

if(isset($_POST['submit'])) {
	if (isset($_POST['youtubeLink']) && $_POST['youtubeLink'] != "") {
		$youtube = $_POST['youtubeLink'];
		$_SESSION['youtubeSession']=$youtube;
		$command = "python3 /var/www/html/cloud-computing-gp/finalupload.py $youtube";
		$output = passthru($command);
	}
}
?>