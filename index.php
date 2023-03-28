<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Lamutarba</title>

    <style>

    body {
    	font-family: sans-serif;

    }

    #container {
    	width: 500px;
    	max-width: 90%;
    	margin: 0 auto;
    }

    h1 {
    	color: #666;
    }

    h1 em {
    	color: #000;
    }
    </style>
</head>
<body>
<?php

$tarba = [
    'he' => [
        [
            'dullais',
            'sasmakušais',
            'puvušais',
            'perversais',
            'tizlais',
            'nesmukais',
            'tuklais',
            'kaulainais',
            'zilais',
            'riebīgais',
            'nabadzīgais',
            'čaganais',
	    'apjātais',
        ],
        [
        	'pagraba',
        	'utu',
        	'sūdabaļļas',
        	'miķelānu',
        	'samazgu',
        	'dibenķiršu',
        	'meža',
        	'pokaiņu',
        	'dunduru',
        	'lutaušu',
        	'papeļu',
            	'šņabja',
		'šķūņpakaļas',
		'aizmeža',
        ],
        [
        	'žūpa',
        	'pļēgurs',
        	'jāklis',
        	'ķirmis',
        	'smerdelis',
        	'žūklis',
        	'pāķis',
        	'zīdeklis',
        	'krabis',
        	'ūksts',
        	'pīters',
        	'šļurbaks',
		'pimpausis',
		'dirskrādziņš',
		'maukumēbele',
		'diršļaks',
        ]
    ],
    'she' => [
    	[
    		'glupā',
    		'īgnā',
    		'runīgā',
    		'dullā',
    		'neķītrā',
    		'nevainīgā',
    		'garā',
    		'kārnā',
    		'garlaicīgā',
    		'viltīgā',
    		'bezkaunīgā',
    		'dusmīgā',
		'nošņurkusī',
    	],
    	[
    		'kaimiņu',
    		'lieldienu',
    		'šķūnīšu',
    		'biržu',
    		'dīķa',
    		'grābekļu',
    		'purva',
    		'tirgus',
    		'buboņu',
    		'krūmu',
    		'vircas',
    		'baznīcas',
		'nabagmājas',
    	],
    	[
    		'kārkaļa',
    		'mindža',
    		'piepe',
    		'migaža',
    		'ragana',
    		'pirža',
    		'čība',
    		'žauna',
    		'krizdole',
    		'ķēkša',
    		'kļocka',
    		'bezde',
		'pežuveste',
		'diršļa',
    	]
    ]
];

function make($gender) {
	global $tarba;
	return join(' ', [
		$tarba[$gender][0][rand(0, count($tarba[$gender][0])-1)],
		$tarba[$gender][1][rand(0, count($tarba[$gender][1])-1)],
		$tarba[$gender][2][rand(0, count($tarba[$gender][2])-1)]
		]);
}

?>
<div id="container">
<h1>Viņa ir <em><span class="select-me"><?=make('she')?></span></em></h1>
<h1>Viņš ir <em><span class="select-me"><?=make('he')?></span></em></h1>

<p><a href="?ts=<?=microtime(true)?>">Spied te, lai būtu jauna kombinācija</a></p>

<p>Ideja un saturs no <a href="https://pilsonis.wordpress.com/2017/01/18/aizvainosanas-tabulas-jeb-lamutarbas/">Pilsoņa</a></p>


</div>
<script>
	/**
	 * Function selects element. Taken from SO: http://stackoverflow.com/questions/11128130/select-text-in-javascript
	 */
	function selectText(text) {
		var doc = document;
	    if (doc.body.createTextRange) { // ms
	        var range = doc.body.createTextRange();
	        range.moveToElementText(text);
	        range.select();
	    } else if (window.getSelection) { // moz, opera, webkit
	        var selection = window.getSelection();            
	        var range = doc.createRange();
	        range.selectNodeContents(text);
	        selection.removeAllRanges();
	        selection.addRange(range);
	    }
	}


	var els = document.querySelectorAll('.select-me');
	for (var i = 0; i < els.length; i++) {
		els[i].addEventListener('click', function(evt) {
			selectText(evt.currentTarget);
		})
	}
</script>
</body>
</html>
