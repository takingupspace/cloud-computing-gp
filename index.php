<?php
include("functions.php");
echo '<!doctype html>';
echo '<html>';
include("head.php");
echo '<body data-new-gr-c-s-check-loaded="14.1056.0" data-gr-ext-installed="" onload="ChangeColorOnLoad()">';
echo '<main id="mainContent" class="container py-4">';
include("home.php");
echo '</main>';
echo '<script src="./assets/js/background.js"></script>';
echo '<script src="./assets/js/chat.js"></script>';
echo '</body>';
echo '</html>';
?>
<script>
function matchYoutubeUrl(url) {
    var p = /^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
    if(url.match(p)){
        return true;
    }
    return false;
}

var i = 0;
function move(progressBarURL) {
	if (i == 0) {
		i = 1;
		var elem = document.getElementById(progressBarURL);
		var width = 1;
		var id = setInterval(frame, 10);
		function frame() {
			if (width >= 100) {
				clearInterval(id);
				i = 0;
			} else {
				width++;
				elem.style.width = width + "%";
			}
		}
	}
}

function updateContent(page) {
    $.ajax({
        type: 'post',
        url: 'https://ec2-18-208-211-38.compute-1.amazonaws.com/cloud-computing-gp/' + page + '.php',
        success: function(data){
			switch (page){
                case "home":
					document.title = "ClowdyHacks | HOME"
                    break;
                case "about":
					document.title = "ClowdyHacks | ABOUT"
                    break;
                case "youtube":
					// run code here to handle the input of the URL
					var videoURL = document.getElementById('youtube-link').value;
					if(!matchYoutubeUrl(videoURL)) {
						return;
					}
					document.title = "ClowdyHacks | YOUTUBE"
                    break;
                case "tiktok": // NOT currently used or have a working page for
					document.title = "ClowdyHacks | TIKTOK"
                    break;
                default:
					document.title = "ClowdyHacks | HOME"
                    break;
            };
            $('#mainContent').html(data); // Show fetched data
			
			// set elements to correct data
			if(page === "youtube") {
//				document.getElementById('videoURL').innerHTML = videoURL;
				move("youtube-progress");
			}
        }
    });
};
</script>