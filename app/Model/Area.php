<?php

namespace App\Model;

use \App\Db\Database;
use PDO;

class Area
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
     * metodo que cadastra um novo area
     * @var boolean
     */
    public function cadastrar()
    {
        //definir data  copiar para instituicao
        
        // inserir area no banco
        $obDatabase = new Database('area');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome
        ]);
        return true;

       
    }

    /**
     * metodo que atualiza o area no banco
     * @return boolean
     * 
     */
    public function atualizar()
    {
        return (new Database('area'))->update('id=' . $this->id, [
            'nome' => $this->nome
           
        ]);
    }
    /**
     * metodo responsavel por obter os areas do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     * 
     */
    public static function getAreas($where = null, $order = null, $limit = null)
    {
        return (new Database('area'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }



    /**
     * metodo responsavel por encontrar area atraves do id
     * @param integer
     * @return area
     * 
     */
    public static function getArea($id)
    {
        return (new Database('area'))->select('id=' . $id, null, null, '*')
            ->fetchObject(self::class);
    }

    public function excluir()
    {
        return (new Database('area'))->delete('id = ' . $this->id);
    }
}
