<?php

namespace App\Entity;

use App\Repository\EscapeGameRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EscapeGameRepository::class)
 */
class EscapeGame
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="time")
     */
    private $duration;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_min;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_max;

    /**
     * @ORM\Column(type="boolean")
     */
    private $public;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $excerpt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category_font;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category_color;

    /**
     * @ORM\Column(type="text")
     */
    private $resume_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume_image;

    /**
     * @ORM\Column(type="text")
     */
    private $introduction_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $introduction_image;

    /**
     * @ORM\Column(type="text")
     */
    private $instructions_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $instructions_image;

    /**
     * @ORM\Column(type="text")
     */
    private $happyEnd_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $happyEnd_image;

    /**
     * @ORM\Column(type="text")
     */
    private $gameOver_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gameOver_image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $solution;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDuration(): ?\DateTimeInterface
    {
        return $this->duration;
    }

    public function setDuration(\DateTimeInterface $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->date_time;
    }

    public function setDateTime(\DateTimeInterface $date_time): self
    {
        $this->date_time = $date_time;

        return $this;
    }

    public function getNumberMin(): ?int
    {
        return $this->number_min;
    }

    public function setNumberMin(int $number_min): self
    {
        $this->number_min = $number_min;

        return $this;
    }

    public function getNumberMax(): ?int
    {
        return $this->number_max;
    }

    public function setNumberMax(int $number_max): self
    {
        $this->number_max = $number_max;

        return $this;
    }

    public function getPublic(): ?bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getExcerpt(): ?string
    {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt): self
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $category_name): self
    {
        $this->category_name = $category_name;

        return $this;
    }

    public function getCategoryFont(): ?string
    {
        return $this->category_font;
    }

    public function setCategoryFont(string $category_font): self
    {
        $this->category_font = $category_font;

        return $this;
    }

    public function getCategoryColor(): ?string
    {
        return $this->category_color;
    }

    public function setCategoryColor(string $category_color): self
    {
        $this->category_color = $category_color;

        return $this;
    }

    public function getResumeText(): ?string
    {
        return $this->resume_text;
    }

    public function setResumeText(string $resume_text): self
    {
        $this->resume_text = $resume_text;

        return $this;
    }

    public function getResumeImage(): ?string
    {
        return $this->resume_image;
    }

    public function setResumeImage(string $resume_image): self
    {
        $this->resume_image = $resume_image;

        return $this;
    }

    public function getIntroductionText(): ?string
    {
        return $this->introduction_text;
    }

    public function setIntroductionText(string $introduction_text): self
    {
        $this->introduction_text = $introduction_text;

        return $this;
    }

    public function getIntroductionImage(): ?string
    {
        return $this->introduction_image;
    }

    public function setIntroductionImage(string $introduction_image): self
    {
        $this->introduction_image = $introduction_image;

        return $this;
    }

    public function getInstructionsText(): ?string
    {
        return $this->instructions_text;
    }

    public function setInstructionsText(string $instructions_text): self
    {
        $this->instructions_text = $instructions_text;

        return $this;
    }

    public function getInstructionsImage(): ?string
    {
        return $this->instructions_image;
    }

    public function setInstructionsImage(string $instructions_image): self
    {
        $this->instructions_image = $instructions_image;

        return $this;
    }

    public function getHappyEndText(): ?string
    {
        return $this->happyEnd_text;
    }

    public function setHappyEndText(string $happyEnd_text): self
    {
        $this->happyEnd_text = $happyEnd_text;

        return $this;
    }

    public function getHappyEndImage(): ?string
    {
        return $this->happyEnd_image;
    }

    public function setHappyEndImage(string $happyEnd_image): self
    {
        $this->happyEnd_image = $happyEnd_image;

        return $this;
    }

    public function getGameOverText(): ?string
    {
        return $this->gameOver_text;
    }

    public function setGameOverText(string $gameOver_text): self
    {
        $this->gameOver_text = $gameOver_text;

        return $this;
    }

    public function getGameOverImage(): ?string
    {
        return $this->gameOver_image;
    }

    public function setGameOverImage(string $gameOver_image): self
    {
        $this->gameOver_image = $gameOver_image;

        return $this;
    }

    public function getSolution(): ?string
    {
        return $this->solution;
    }

    public function setSolution(string $solution): self
    {
        $this->solution = $solution;

        return $this;
    }
}
