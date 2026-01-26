<?php
declare(strict_types=1);
namespace Anatolkin\Anatolkinrestaurant\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Allergen extends AbstractEntity
{
    protected string $title = '';
    protected string $code = '';
    protected ?FileReference $icon = null;

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function getCode(): string { return $this->code; }
    public function setCode(string $code): void { $this->code = $code; }
    public function getIcon(): ?FileReference { return $this->icon; }
    public function setIcon(FileReference $icon): void { $this->icon = $icon; }
}
