<?php
// src/Product.php
/**
 * @Entity @Table(name="products")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;

	public function setName($name)
    {
        $this->name = $name;
    }
    // .. (other code)
}