<?php

namespace App\Model;

use \App\Db\Database;
use PDO;

class Professor
{
    /**
     * @var integer
     */
    public $id;



    /**
     * @var string
     */
    public $nome;


    /**
     * @var string
     */
    public $cpf;


    /**
     * @var string
     */
    public $sala;

    /**
     * @var string
     */
    public $turma;

      /**
     * @var string
     */
    public $materia;


    /**
     * metodo que cadastra um novo professor
     * @var boolean
     */
    public function cadastrar()
    {
       
        // inserir professor no banco
        $obDatabase = new Database('professor');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'sala' => $this->sala,
            'turma' => $this->turma,
            'materia' => $this->materia
            
        ]);
        return true;

                   // print_r($this);
    
        //atribuir o id de professor na instancia

        //retornar sucesso
    }

    /**
     * metodo que atualiza o professor no banco
     * @return boolean
     * 
     */
    public function atualizar(){
        return (new Database('professor'))->update('id='.$this->id,[
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'sala' => $this->sala,
            'turma' => $this->turma,
            'materia' => $this->materia
        ]);
    }
    /**
     * metodo responsavel por obter os professors do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     * 
     */
    public static function getProfessores($where = null, $order=null, $limit=null){
        return( new Database('professor'))-> select($where, $order,$limit)
                                      -> fetchAll(PDO::FETCH_CLASS, self::class);
    }


    
    /**
     * metodo responsavel por encontrar professor atraves do id
     * @param integer
     * @return professor
     * 
     */
    public static function getProfessor($id){
        return( new Database('professor'))-> select('id='.$id)
                                        ->fetchObject(self::class);  

    }      
    
    public function excluir(){
        return(new Database('professor'))->delete('id = '.$this->id);
    }
}
