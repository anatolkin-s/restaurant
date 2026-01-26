<?php
declare(strict_types=1);
namespace Anatolkin\Anatolkinrestaurant\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Category extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Anatolkin\Anatolkinrestaurant\Domain\Model\Item>
     */
    protected ObjectStorage $items;

    public function __construct() {
        $this->items = new ObjectStorage();
    }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function getItems(): ObjectStorage { return $this->items; }
    public function setItems(ObjectStorage $items): void { $this->items = $items; }
    public function addItem(Item $item): void { $this->items->attach($item); }
    public function removeItem(Item $item): void { $this->items->detach($item); }
}
