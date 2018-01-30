<?php

namespace Core;

abstract class Tags{

	private $openTag = '<meta ';
	private $closeTag = ' />';

	protected function Og($property, $content){
		return $this->openTag.'property="og:'.$property.'" content="'.$content.'"'.$this->closeTag;
	}

	protected function Name($name, $content){
		return $this->openTag.'name="'.$name.'" content="'.$content.'"'.$this->closeTag;
	}

}