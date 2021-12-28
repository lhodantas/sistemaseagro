<?php
require_once(ABSPATH.'config.php');
require_once DBAPI;
 /**
  * enumeração dos portes
  */
 class Atividade extends Database{

   private $id_atividade;
   private $nome;
   private $descricao;
   private $observacao;
   private $limite;
   private $fk_sala;
   private $fk_evento;
   private $fk_turno;

   function __construct(){
  }
    public function getIdAtividade()
    {
        return $this->id_atividade;
    }

    public function setIdAtividade($id_atividade)
    {
        $this->id_atividade = $id_atividade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome= $nome;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao= $descricao;
    }
    public function getObservacao()
    {
        return $this->observacao;
    }

    public function setObservacao($observacao)
    {
        $this->observacao= $observacao;
    }
    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite= $limite;
    }
    public function getSala()
    {
        return $this->fk_sala;
    }

    public function setSala($fk_sala)
    {
        $this->fk_sala= $fk_sala;
    }
    public function getEvento()
    {
        return $this->fk_evento;
    }

    public function setEvento($fk_evento)
    {
        $this->fk_evento= $fk_evento;
    }

    function salvar(){
      $sql = "insert into atividade (nome, descricao, observacao, limite, fk_sala, fk_evento) values (?,?,?,?,?,?)";
      $parametros = array($this->getNome(),$this->getDescricao(),$this->getObservacao(),$this->getLimite(),$this->getSala(),$this->getEvento());
      return $this->insertDB($sql,$parametros);
    }
    function salvarPalestrante($atividade,$palestrante){
      $sql = "insert into palestrante_atividade (fk_atividade, fk_palestrante) values (?,?)";
      $parametros = array($atividade,$palestrante);
      return $this->insertDB($sql,$parametros);
    }

    function buscarSenha($dataAtividade){
      $sql = "select senha from data_atividade where id_data_atividade = ?";
      $parametros = array($dataAtividade);;
      return $this->selectDB($sql,$parametros);
    }

}



 ?>
