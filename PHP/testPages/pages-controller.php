<?php

$emploiXML = simplexml_load_file('https://www.lemonde.fr/emploi/rss_full.xml');
$entrepriseXML = simplexml_load_file('https://www.lemonde.fr/entreprises/rss_full.xml');
$industrieXML = simplexml_load_file('https://www.lemonde.fr/industrie/rss_full.xml');
$economieFrancaiseXML = simplexml_load_file('https://www.lemonde.fr/economie-francaise/rss_full.xml');
$economieXML = simplexml_load_file('https://www.lemonde.fr/economie/rss_full.xml'); 


$emploi = $emploiXML->channel;
$entreprise = $entrepriseXML->channel;
$industrie = $industrieXML->channel;
$economieFrancaise = $economieFrancaiseXML->channel;
$economie = $economieXML->channel;

$emploiImg = $emploi->item[0]->children('media', true)->content->attributes();
$entrepriseImg = $entreprise->item[0]->children('media', true)->content->attributes();
$industrieImg = $industrie->item[0]->children('media', true)->content->attributes();
$economieFrancaiseImg = $economieFrancaise->item[0]->children('media', true)->content->attributes();
$economieImg = $economie->item[0]->children('media', true)->content->attributes();

$page = $_GET[$emploi];
$emploiTitle = $emploi->title;
$entrepriseTitle = $entreprise->title;
$industrieTitle = $industrie->title;
$economieFrancaiseTitle = $economieFrancaise->title;
$economieTitle = $economie->title;

$articles = array( 0 => $emploi, $entreprise, $industrie, $economieFrancaise, $economie);


