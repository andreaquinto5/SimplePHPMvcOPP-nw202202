<?php
/**
 * PHP Version 7
 * Modelo de Datos para modelo
 *
 * @category Data_Model
 * @package  Models${1:modelo}
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 *           Colaboración con alumna: Andrea Nicold Aleman Quinto <an_alemanq@unicah.edu>
 * @license  Comercial http://
 *
 * @version 1.0.0
 *
 * @link http://url.com
 */

namespace Dao\Mnt;

use Dao\Table;

/**
 * Modelo de Datos para la tabla de Pianos
 *
 * @category Data_Model
 * @package  Dao.Table
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 *           Colaboración con alumna: Andrea Nicold Aleman Quinto <an_alemanq@unicah.edu>
 * @license  Comercial http://
 *
 * @link http://url.com
 */
class Pianos extends Table
{
    /*
        `pianoid` bigint NOT NULL AUTO_INCREMENT,
        `pianodsc` varchar(60) DEFAULT NULL,
        `pianobio` varchar(5000) DEFAULT NULL,
        `pianosales` int DEFAULT NULL,
        `pianoimguri` varchar(128) DEFAULT NULL,
        `pianoimgthb` varchar(128) DEFAULT NULL,
        `pianoprice` decimal(13,2) DEFAULT NULL,
        `pianoest` char(3) DEFAULT NULL,
    */
    /**
     * Obtiene todos los registros de Pianos
     *
     * @return array
     */
    public static function getAll()
    {
        $sqlstr = "Select * from pianos;";
        return self::obtenerRegistros($sqlstr, array());
    }
    /**
     * Get Pianos By Id
     *
     * @param int $pianoid Codigo del Piano
     *
     * @return array
     */
    public static function getById(int $pianoid)
    {
        $sqlstr = "SELECT * from `pianos` where pianoid=:pianoid;";
        $sqlParams = array("pianoid" => $pianoid);
        return self::obtenerUnRegistro($sqlstr, $sqlParams);
    }

    /**
     * Insert into Pianos
     *
     * @param [type] $pianoid        description
     * @param [type] $pianodsc       description
     * @param [type] $pianobio       description
     * @param [type] $pianosales     description
     * @param [type] $pianoimguri    description
     * @param [type] $pianoimgthb    description
     * @param [type] $pianoprice     description
     * @param [type] $pianoest       description
     *
     * @return void
     */


//*********************** INSERT************************************//

    public static function insert(
        $pianoid,
        $pianodsc,
        $pianobio,
        $pianosales,
        $pianoimguri,
        $pianoimgthb,
        $pianoprice,
        $pianoest
    ) {
        $sqlstr = "INSERT INTO `pianos`
        (`pianoid`, `pianodsc`, `pianobio`, `pianosales`,
        `pianoimguri`, `pianoimgthb`, `pianoprice`, `pianoest`)
        VALUES
        (:pianoid, :pianodsc, :pianobio, 
        :pianosales, :pianoimguri, :pianoimgthb, 
        :pianoprice, :pianoest);
    ";
        $sqlParams = [
            "pianoid" => $pianoid ,
            "pianodsc" => $pianodsc ,
            "pianobio" => $pianobio ,
            "pianosales" => $pianosales ,
            "pianoimguri" => $pianoimguri ,
            "pianoimgthb" => $pianoimgthb ,
            "pianoprice" =>  $pianoprice ,
            "pianoest" => $pianoest
        ];
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

//*********************** UPDATE ************************************//
    /**
     * Updates pianos
     *
     * @param [type] $pianoid        description
     * @param [type] $pianodsc       description
     * @param [type] $pianobio       description
     * @param [type] $pianosales     description
     * @param [type] $pianoimguri    description
     * @param [type] $pianoimgthb    description
     * @param [type] $pianoprice     description
     * @param [type] $pianoest       description
     *
     * @return void
     */
    public static function update(
        $pianoid,
        $pianodsc,
        $pianobio,
        $pianosales,
        $pianoimguri,
        $pianoimgthb,
        $pianoprice,
        $pianoest
    ) {
        $sqlstr = "UPDATE `pianos` SET
    `pianoid`=:pianoid, `pianodsc`=:pianodsc,`pianobio`=:pianobio, 
    `pianosales`=:pianosales, `pianoimguri`=:pianoimguri,
    `pianoimgthb`=:pianoimgthb,`pianoprice`=:pianoprice,`pianoest`=:pianoest
    where `pianoid` = :pianoid;";

        $sqlParams = array(
            "pianoid" => $pianoid,
            "pianodsc" => $pianodsc,
            "pianobio" => $pianobio,
            "pianosales" => $pianosales,
            "pianoimguri" => $pianoimguri,
            "pianoimgthb" => $pianoimgthb,
            "pianoprice" => $pianoprice,
            "pianoest" => $pianoest
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }


//*********************** DELETE ************************************//

    /**
     * Undocumented function
     *
     * @param [type] $pianoid description
     *
     * @return void
     */
    public static function delete($pianoid)
    {
        $sqlstr = "DELETE from `pianos` where pianoid = :pianoid;";
        $sqlParams = array(
            "pianoid" => $pianoid
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

}
