<?php
session_start();
include("header.php");

echo '<div class="p-5 mb-4 bg-light rounded-3">';
echo '<div class="container-fluid py-5">';
echo '<h1 class="display-5 fw-bold">ClowdyHacks Downloader!</h1>';
echo '<p class="col-md-10 fs-4">To start, paste a url in the correct input box.</p>';
echo '<a onclick="updateContent(\'about\')"><button class="btn btn-outline-primary btn-lg" type="button">More about us!</button></a>';
echo '</div>';
echo '</div>';
echo '<div id="downloaders-block" class="row align-items-md-stretch">';
echo '<div class="col-md-12">';
echo '    <div class="h-100 p-5 text-white bg-gradient rounded-3">';
echo '        <h2>Downloading YouTube Video...</h2>';
echo '        <div class="container p-4">';
echo '            <h6 id="videoURL" class="mb-2 text-light">'.$_SESSION['youtubeSession'].'</h6>';
echo '            <div class="progress" style="height: 25px;">';
echo '                <div id="youtube-progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
echo '            </div>';
echo '        </div>';
echo '        <div class="container d-flex justify-content-end">';
echo '            <a onclick="updateContent(\'home\')"><button class="btn btn-outline-light" type="button" style="margin-right: 10px;">Start Over</button></a>';
echo '            <a id="youtube-download-content" download="new-youtube-video"><button class="btn btn-outline-light" type="button" id="youtube-download-button" disabled>Download</button></a>';
echo '        </div>';
echo '    </div>';
echo '</div>';
echo '</div>';

include ("footer.php");
?>