<?php

function public_url($suburl='')
{
    return base_url('project-root/public/'.$suburl);
}

function assets_url($suburl='')
{
    return public_url('assets/'.$suburl);
}

function bixcontroller_url($suburl='')
{
    return public_url('Bixcontroller/'.$suburl);
}

?>