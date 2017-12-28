<?php 

namespace MetaTagsPhp;

class Mtp{

	/**
	 * Variavel que guarda as meta tags open graph
	 * @var string
	 * @access private
	 */
	private $tagsOpenGraph;

	/**
	 * Variavel que guarda as meta tags name
	 * @var string
	 * @access private
	 */
	private $tagsMetaName;

	/**
	 * Função que gera e concatenas meta tags na variavel $tagsOpenGraph
	 * @param array $data Array onde o indice é o property e o valor é o conteudo
	 * @access public
	 */
	public function OpenGraph($data){
		foreach($data as $property => $content):

			$tag = '<meta property="og:'.$property.'" content="'.$content.'" />';
			
			$this->tagsOpenGraph .= $tag."\n";

		endforeach;
	}

	/**
	 * Função que gera e concatenas meta tags na variavel $tagsMetaName
	 * @param array $data Array onde o indice é o name e o valor é o conteudo
	 */
	public function MetaName($data){
		foreach($data as $name => $content):

			$tag = '<meta name="'.$name.'" content="'.$content.'" />';
			
			$this->tagsMetaName .= $tag."\n";

		endforeach;
	}

	/**
	 * Metodo que mostra as tags que foram geradas
	 * @return strig Da um echo na string gerada por cada função chamada
	 */
	public function showTags(){
		if(!is_null($this->tagsOpenGraph)):

			echo $this->tagsOpenGraph;

		endif;

		if(!is_null($this->tagsMetaName)):

			echo $this->tagsMetaName;

		endif;
	}
}