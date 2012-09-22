<?php

namespace AM\Bundle\GeshiBundle\Twig\Extension;

use AM\Bundle\GeshiBundle\Service\GeshiService;

class GeshiExtension extends \Twig_Extension
{
	/**
	 * The service instance
	 * @var GeshiService
	 */
	protected $service;
	
	/**
	 * Constructor
	 * @param GeshiService $service
	 */
	public function __construct(GeshiService $service)
	{
		$this->service = $service;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Twig_Extension::getFilters()
	 */
	public function getFilters()
	{
		return array(
			'geshi' => new \Twig_Filter_Method($this, 'parse') ,
		);
	}
	
	/**
	 * Parse a string of code with geshi
	 * @param string $strCode the code to highlight
	 * @param string $language the language to highlight
	 * @return string
	 */
	public function parse($strCode, $language)
	{
		return $this->service
					->parse($strCode, $language);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Twig_ExtensionInterface::getName()
	 */
	public function getName()
	{
		return 'am_geshi_extension';
	}
}