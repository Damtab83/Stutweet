<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Post
{
    private int $id;

    #[Assert\Length(min: 0, max:150, minMessage:'Le titre ne doit pas faire plus de 150 caractères !', maxMessage:'Le titre ne doit pas faire plus de 150 caractères !')]
    private ?string $title = null;

    #[Assert\Length(min: 5, max:320, minMessage:'Le contenu doit être entre 5 et 320 caractères !', maxMessage:'Le contenu doit être entre 5 et 320 caractères !')]
    private string $content;

    
    private ?string $image = null;

    private $user;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

}