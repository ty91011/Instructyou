<?php

if(!isset($headerContent))
{
    $headerContent = "";
}
$this->load->view("layouts/header", array("content" => $headerContent));


echo $content;

if(!isset($footerContent))
{
    $footerContent = "";
}
$this->load->view("layouts/footer", array("content" => $footerContent));