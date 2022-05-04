<?php
include("header.php");

echo '<div class="p-5 mb-4 bg-light rounded-3">';
echo '<div class="container-fluid py-5">';
echo '<h1 class="display-5 fw-bold">ClowdyHacks Downloader!</h1>';
echo '<p class="col-md-10 fs-4">We created this project for our final project in Cloud Computing in Spring 2022.</p>';
echo '<p class="col-md-10 fs-4">This project uses Google Cloud technologies and a few Python3 APIs to help us successfully pull information from the web and deliver it to you to download!</p>';
echo '<p class="col-md-10 fs-4">If you have any questions, reach out to us by pulling a <a href="https://github.com/Zaqttack/ClowdyHacks/issues/new" target="_blank">new issue</a> on our GitHub!</p>';
echo '<a onclick="updateContent(\'home\')"><button class="btn btn-primary btn-lg" type="button">Return</button></a>';
echo '</div>';
echo '</div>';

include ("footer.php");
?>