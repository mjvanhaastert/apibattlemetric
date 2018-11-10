<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">';
echo '    <div class="container">';
echo '        <a class="navbar-brand" href="index.php">SGoF</a>';
echo '        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">';
echo '            <span class="navbar-toggler-icon"></span>';
echo '        </button>';
echo '        <div class="collapse navbar-collapse" id="navbarResponsive">';
echo '            <ul class="navbar-nav ml-auto">';
echo '                <li class="nav-item active">';
echo '                    <a class="nav-link" href="index.php">Home';
echo '                        <span class="sr-only">(current)</span>';
echo '                    </a>';
echo '                </li>';
echo '                <li class="nav-item">';
echo '                    <a class="nav-link" href="list_search.php">Search/List</a>';
echo '                </li>';
echo '            </ul>';
echo '        </div>';
echo '    </div>';
echo '</nav>';
?>