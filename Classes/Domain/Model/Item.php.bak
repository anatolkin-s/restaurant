<?php
declare(strict_types=1);
namespace Anatolkin\Anatolkinrestaurant\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Item extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';
    protected float $price = 0.0;
    protected ?int $calories = 0;
    protected float $protein = 0.0;
    protected float $fat = 0.0;
    protected float $carbohydrate = 0.0;
    protected string $badge = '';
    protected ?Category $category = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected ObjectStorage $image;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Anatolkin\Anatolkinrestaurant\Domain\Model\Allergen>
     */
    protected ObjectStorage $allergens;

    public function __construct()
    {
        $this->image = new ObjectStorage();
        $this->allergens = new ObjectStorage();
    }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function getPrice(): float { return $this->price; }
    public function setPrice(float $price): void { $this->price = $price; }
    public function getCalories(): ?int { return $this->calories; }
    public function setCalories(?int $calories): void { $this->calories = $calories; }
    public function getProtein(): float { return $this->protein; }
    public function setProtein(float $protein): void { $this->protein = $protein; }
    public function getFat(): float { return $this->fat; }
    public function setFat(float $fat): void { $this->fat = $fat; }
    public function getCarbohydrate(): float { return $this->carbohydrate; }
    public function setCarbohydrate(float $carbohydrate): void { $this->carbohydrate = $carbohydrate; }
    public function getBadge(): string { return $this->badge; }
    public function setBadge(string $badge): void { $this->badge = $badge; }
    public function getCategory(): ?Category { return $this->category; }
    public function setCategory(?Category $category): void { $this->category = $category; }
    public function getImage(): ObjectStorage { return $this->image; }
    public function setImage(ObjectStorage $image): void { $this->image = $image; }
    public function getAllergens(): ObjectStorage { return $this->allergens; }
    public function setAllergens(ObjectStorage $allergens): void { $this->allergens = $allergens; }
}
