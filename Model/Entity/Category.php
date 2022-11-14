<?php

namespace App\Model\Entity;

class Category extends AbstractEntity
{
    private string $categoryName;
    private User $author;

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName(string $categoryName): self
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     * @return Category
     */
    public function setAuthor(User $author): self
    {
        $this->author = $author;
        return $this;
    }
}
