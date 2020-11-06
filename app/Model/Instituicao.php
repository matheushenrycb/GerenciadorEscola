<?php

namespace App\Model;

use \App\Db\Database;
use PDO;

class Instituicao
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
    public $datacriacao;

    /**
     * @var string
     */
    public $tipo;


    /**
     * metodo que cadastra um novo instituicao
     * @var boolean
     */
    public function cadastrar()
    {
        //definir data  copiar para instituicao
        $this->datacriacao = date('Y-m-d H:i:s');
        // inserir instituicao no banco
        $obDatabase = new Database('instituicao');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'datacriacao' => $this->datacriacao,
            'tipo' => $this->tipo
        ]);
        return true;

        // print_r($this);

        //atribuir o id de instituicao na instancia

        //retornar sucesso
    }

    /**
     * metodo que atualiza o instituicao no banco
     * @return boolean
     * 
     */
    public function atualizar()
    {
        return (new Database('instituicao'))->update('id=' . $this->id, [
            'nome' => $this->nome,
            'datacriacao' => $this->datacriacao,
            'tipo' => $this->tipo

        ]);
    }
    /**
     * metodo responsavel por obter os instituicaos do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     * 
     */
    public static function getInstituicoes($where = null, $order = null, $limit = null)
    {
        return (new Database('instituicao'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }



    /**
     * metodo responsavel por encontrar instituicao atraves do id
     * @param integer
     * @return instituicao
     * 
     */
    public static function getInstituicao($id)
    {
        return (new Database('instituicao'))->select('id=' . $id, null, null, '*')
            ->fetchObject(self::class);
    }

    public function excluir()
    {
        return (new Database('instituicao'))->delete('id = ' . $this->id);
    }
}
