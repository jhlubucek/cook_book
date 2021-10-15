<?php

namespace App\Entity;

use App\Repository\RecipeHasIngredientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeHasIngredientRepository::class)
 */
class RecipeHasIngredient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $recipe_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ingredient_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $unit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipeId(): ?int
    {
        return $this->recipe_id;
    }

    public function setRecipeId(int $recipe_id): self
    {
        $this->recipe_id = $recipe_id;

        return $this;
    }

    public function getIngredientId(): ?int
    {
        return $this->ingredient_id;
    }

    public function setIngredientId(int $ingredient_id): self
    {
        $this->ingredient_id = $ingredient_id;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }
}
