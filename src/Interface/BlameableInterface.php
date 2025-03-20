<?php

namespace EnderLab\BlameableBundle\Interface;

use EnderLab\Blameable\Domain\ValueObject\CreatedByUrn;
use EnderLab\Blameable\Domain\ValueObject\UpdatedByUrn;

interface BlameableInterface
{
    public function getId(): ?int;

    public function getCreatedBy(): ?string;

    public function setCreatedBy(?string $createdBy): self;

    public function getUpdatedBy(): ?string;

    public function setUpdatedBy(?string $updatedBy): self;
}
