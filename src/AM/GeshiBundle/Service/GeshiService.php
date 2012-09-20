<?php

namespace AM\GeshiBundle\Service;

class GeshiService
{
	/**
	 * Parse code through GeSHi
	 * @param string $source
	 * @param string $language
	 */
	public function parse($source, $language)
	{
		$geshi = \GeSHi($source, $language);
		return $geshi->parse_code();
	}
}