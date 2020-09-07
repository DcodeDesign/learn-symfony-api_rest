<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use DateTime;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"article:read"}},
 *     denormalizationContext={"groups"={"article:write"}}
 * )
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     * @Groups("article:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups("article:read")
     */
    private $slug;

    /**
     * @ORM\Column(type="text", nullable=true)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $picture;

    /**
     * @ORM\Column(type="boolean")
     * 
     * @Groups("article:read")
     */
    private $isPublished;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * 
     * @Groups("article:read")
     */
    private $published_At;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * 
     * @Groups("article:read")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="datetime")
     *
     * @Groups("comment:read")
     */
    private $createdAt;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="article")
     * 
     * @Groups("article:read")
     */
    private $comments;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="articles")
     *
     * @Groups({"article:read", "article:write"})
     */
    private $tags;

    public function __construct()
    {
        $this->isPublished = false;
        $this->createdAt = new \DateTime();
        $this->comments = new ArrayCollection();
    }

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->published_At;
    }

    public function setPublishedAt(?\DateTimeInterface $published_At): self
    {
        $this->published_At = $published_At;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setArticle($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getArticle() === $this) {
                $comment->setArticle(null);
            }
        }

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}
