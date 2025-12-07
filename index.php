<?php
	function includeFileWithVariables($fileName, $variables) {
		extract($variables);
		include($fileName);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gisela</title>

    <link href="thanos.css" type="text/css" rel="stylesheet" />
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="load-overlay" data-html2canvas-ignore="true">
        <div>
            <span id="load-overlay-text"></span>
        </div>
    </div>

    <div id="start-overlay" data-html2canvas-ignore="true">
        <button class="open-button" onclick="openStartOverlay()">
            Enter
        </button>
        <div class="windows">
            <div class="left window"></div>
            <div class="right window"></div>
        </div>
    </div>

    <div id="main">
        <div class="sections" data-html2canvas-ignore="true">
            <section class="hide" id="learning_n_consulting">
                <iframe src="learning_n_consulting/index.html" style="height: 100vh; width: 100vw; overflow: hidden"></iframe>
            </section>
            <section class="hide" id="accounting">
                <?php include('accounting/index.php') ?>
            </section>
            <section class="hide" id="others">
                <?php include('others/index.php') ?>
            </section>
        </div>
        <div thanos-dissolve class="dissolve section-selector">
            <span data-open="learning_n_consulting">Learning and Consulting</span>
            <span data-open="accounting">Accounting</span>
            <span data-open="others">Blog, Spirituality and more...</span>
        </div>
        <div thanos-effect class="dissolve"></div>
    </div>

    <script src="jquery.min.js"></script>
    <script src="html2canvas.min.js"></script>

    <script src="thanos.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
</body>

</html>