<?php

namespace AM\Bundle\GeshiBundle\Service;

class GeshiService
{
	/**
	 * Parse code through GeSHi
	 * @param string $source
	 * @param string $language
	 */
	public function parse($source, $language)
	{
		$geshi = new \GeSHi($source, $language);
		$geshi->set_header_type(\GESHI_HEADER_PRE);
		$geshi->enable_line_numbers(\GESHI_NORMAL_LINE_NUMBERS);
		$geshi->enable_classes();
		return '<div class="geshi">' . $geshi->parse_code() . '</div>';
	}
}