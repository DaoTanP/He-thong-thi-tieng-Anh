<?php
function loadHeader($pageName)
{
    require './source/html/header.html';
}

function loadComponent($path)
{
    require $path;
}
