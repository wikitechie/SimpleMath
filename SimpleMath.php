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
$wgExtensionCredits['other'][] = array(
	'name' => 'SimpleMath',
	'author' => "<a href='http://wikitechie.net/'>WikiTechie</a>",
	'description' => "Render mathematical formulas between <math> ... </math> tags using <a href='http://www.codecogs.com/latex/eqneditor.php'>codecogs LaTeX eidtor</a>",
	'url' => 'https://www.mediawiki.org/wiki/Extension:SimpleMath'
	);