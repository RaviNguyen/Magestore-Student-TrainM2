<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 11/16/16
 * Time: 8:48 AM
 */

namespace Magestore\Student\Api\Data;


interface StudentInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const STUDENT_ID = 'id';
    const STUDENT_CLASS = 'class';
    const NAME = 'name';
    const UNIVERSITY = 'university';
    /**#@-*/

    /**
     * Returns the student ID.
     *
     * @return int ID.
     */
    public function getId();

    /**
     * Sets the student ID.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);


    /**
     * Returns the student name.
     *
     * @return string Student name.
     */
    public function getName();

    /**
     * Sets the student name.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Returns the student class.
     *
     * @return string Student class.
     */
    public function getClass();

    /**
     * Sets the student class.
     *
     * @param string $class
     * @return $this
     */
    public function setClass($class);

    /**
     * Returns the student university.
     *
     * @return string Student university.
     */
    public function getUniversity();

    /**
     * Sets the student University.
     *
     * @param string $university
     * @return $this
     */
    public function setUniversity($university);
}