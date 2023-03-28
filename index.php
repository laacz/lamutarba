<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
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
			'aizmeža',
			'baznīcas',
			'biržu',
			'buboņu',
			'dibenķiršu',
			'dīķa',
			'dunduru',
			'grābekļu',
			'kaimiņu',
			'krūmu',
			'lieldienu',
			'lutaušu',
			'meža',
			'miķelānu',
			'nabagmājas',
			'pagraba',
			'papeļu',
			'pokaiņu',
			'purva',
			'samazgu',
			'šķūnīšu',
			'šķūņpakaļas',
			'šņabja',
			'sūdabaļļas',
			'tirgus',
			'utu',
			'vircas',
		],
		[
			'babulnieks',
			'badsprāgstnieks',
			'bākšķis',
			'bāmodere',
			'bandžolis',
			'bezde',
			'blagūzis',
			'blākša',
			'bļausnis',
			'bļurgaļa',
			'čabgraba',
			'čamarags',
			'čāpaklis',
			'čaukurs',
			'caurdirša',
			'čība',
			'cūkaris',
			'dakšastis',
			'deivelis',
			'derglis',
			'dirskrādziņš',
			'diršļa',
			'diršļaks',
			'edarkasis',
			'elpesteris',
			'ērceša',
			'ērzelnīca',
			'gābiķis',
			'gaisāklis',
			'gāmars',
			'gatavdirša',
			'glēmausis',
			'gļēmūzis',
			'glemža',
			'gnīdausis',
			'gremzis',
			'grieztaunīca',
			'gulstavnīca',
			'gvelza',
			'īkstoņa',
			'īnaģis',
			'jāklis',
			'jātaļnieks',
			'jērgālis',
			'kaimāksis',
			'kākalnīca',
			'kankarbiksis',
			'karčaunīca',
			'kārkaļa',
			'kārumdirša',
			'ķēkša',
			'ķepasts',
			'ķerstakla',
			'ķirmis',
			'kladaņķis',
			'klamasteris',
			'klemza',
			'klibzaķis',
			'kļocka',
			'knakstaža',
			'krabis',
			'krizdole',
			'kulduris',
			'kuņa',
			'laidaks',
			'lankaris',
			'larkšķis',
			'lebeznieks',
			'lepecis',
			'lešķene',
			'lorķis',
			'lubraks',
			'maistuļa',
			'mantjēcis',
			'mānūžnieks',
			'maukumēbele',
			'maukuris',
			'mesākls',
			'migaža',
			'mindža',
			'mindža',
			'mīzelnīca',
			'mukausis',
			'mūrguļa',
			'nepierīža',
			'ņerga',
			'ņirpsis',
			'nūžala',
			'ošnāsis			',
			'pakaļnīca',
			'pāķis',
			'pežuveste',
			'pidelkaķe',
			'piepe',
			'pimpausis',
			'pipelbrencis',
			'pirža',
			'pīters',
			'pļēgurs',
			'plegzderis',
			'pleika',
			'plenderis',
			'plēsauka',
			'plikatnieks',
			'puktiņš',
			'pundurpūslis',
			'ragana',
			'riekla',
			'rīstuķis',
			'šelderis',
			'slampača',
			'šleberis',
			'šlenderis',
			'šļurbaks',
			'smerdelis',
			'smirluģis',
			'sunkārsis',
			'svelstiķis',
			'tāpslis',
			'temša',
			'timaļa',
			'trāvulis',
			'tūža',
			'ubiķis',
			'ūbiķis',
			'ūksts',
			'žākara',
			'žārgalis',
			'žauklis',
			'žauna',
			'zīdeklis',
			'žlēmēkslis',
			'žnergatabluzga',
			'žūklis',
			'žūpa',
			'žūpacis',
		],
	];

	function make()
	{
		global $tarba;
		return join(' ', [
			$tarba[0][rand(0, count($tarba[0]) - 1)],
			$tarba[1][rand(0, count($tarba[1]) - 1)],
			$tarba[2][rand(0, count($tarba[2]) - 1)]
		]);
	}

	?>
	<div id="container">
		<h1>Viņa/viņš ir <em><span class="select-me">
					<?= make() ?>
				</span></em></h1>

		<p><a href="?ts=<?= microtime(true) ?>">Spied te, lai būtu jauna kombinācija</a></p>

		<p>Ideja un saturs no <a
				href="https://pilsonis.wordpress.com/2017/01/18/aizvainosanas-tabulas-jeb-lamutarbas/">Pilsoņa</a></p>


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
			els[i].addEventListener('click', function (evt) {
				selectText(evt.currentTarget);
			})
		}
	</script>
</body>

</html>