<?php
    $title = "GWC Hobbies";
    $content = <<<EOF
    <a href="/hobbies/computers.php"><div class="interestrow front" style="background-image: url(images/electronics.jpg);">
        <span>Computers</span>
    </div></a>
    <a href="/hobbies/photos.php"><div class="interestrow front" style="background-image: url(images/photo.jpg);">
        <span>Photography</span>
    </div></a>
    <a href="http://steamcommunity.com/id/captainglac1er/"><div class="interestrow front" style="background-image: url(images/minecraft.png);">
        <span>Gaming</span>
    </div></a>
EOF;
    include("php/template.php");

?>
