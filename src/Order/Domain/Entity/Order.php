<?php
declare(strict_types=1);

namespace App\Order\Domain\Entity;

class Order 
{
    /**
     * @var int id
     */
    protected $id;

    /**
     * @var float $value
     */
    protected $value;

    /**
     * Order constructor
     *
     * @param string $id
     * @param float $value
     */
    public function __construct(string $id, float $value)
    {
        $this->id = $id;
        $this->value = $value;
    }

    /**
     * Getter for ID
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Getter for value
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Setter for value
     *
     * @param float $value
     * @return Order
     */
    public function setValue(float $value): Order
    {
        $this->value = $value;
        return $this;
    }

    // some actions
}