<?php 

namespace Core;

class Mtp extends Tags{

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

			$this->tagsOpenGraph .= Tags::Og($property, $content)."\n";

		endforeach;
	}

	/**
	 * Função que gera e concatenas meta tags na variavel $tagsMetaName
	 * @param array $data Array onde o indice é o name e o valor é o conteudo
	 */
	public function MetaName($data){
		foreach($data as $name => $content):

			$this->tagsMetaName .= Tags::Name($name, $content)."\n";

		endforeach;
	}

	/**
	 * Metodo que mostra as tags que foram geradas
	 * @return strig Da um echo na string gerada por cada função chamada
	 */
	public function ShowTags(){
		if(!is_null($this->tagsOpenGraph)):

			echo $this->tagsOpenGraph;

		endif;

		if(!is_null($this->tagsMetaName)):

			echo $this->tagsMetaName;

		endif;
	}
}