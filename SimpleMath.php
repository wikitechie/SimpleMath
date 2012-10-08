<?php

$wgHooks['ParserFirstCallInit'][] = 'efMathParserInit';

function efMathParserInit( &$parser )
{
	$parser->setHook( 'math', 'efMathRender' );
	return true;
}

function efMathRender( $input, $args, $parser, $frame )
{
	$input = strip_tags($input);
	return  '<img src="http://www.codecogs.com/eq.latex?'.$input.'" />' ;
}

//	Add extension information to Special:Version
$wgExtensionCredits['parserhook']['SimpleMath'] = array(
	'name' => 'SimpleMath',
	'author' => '[http://wikitechie.net/ WikiTechie]',
	'description' => 'Render mathematical formulas between <nowiki><math> ... </math></nowiki> tags using [http://www.codecogs.com/latex/eqneditor.php codecogs LaTeX eidtor]',
	'url' => 'https://www.mediawiki.org/wiki/Extension:SimpleMath'
	);