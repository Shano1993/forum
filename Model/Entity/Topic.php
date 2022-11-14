<?php

namespace App\Model\Entity;

use DateTime;

class Topic extends AbstractEntity
{
    private string $topicName;
    private DateTime $dateAdd;
    private User $author;
    private Category $category;

    /**
     * @return string
     */
    public function getTopicName(): string
    {
        return $this->topicName;
    }

    /**
     * @param string $topicName
     * @return Topic
     */
    public function setTopicName(string $topicName): self
    {
        $this->topicName = $topicName;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateAdd(): DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param DateTime $dateAdd
     * @return Topic
     */
    public function setDateAdd(DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
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
     * @return Topic
     */
    public function setAuthor(User $author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return Topic
     */
    public function setCategory(Category $category): self
    {
        $this->category = $category;
        return $this;
    }
}
