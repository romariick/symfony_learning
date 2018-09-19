<?php
namespace OC\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraint as Assert;
use OC\PlatformBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class Task
{
    protected $task;    
    protected $published = true;
    protected $dueDate;
    protected $image;
    protected $file;
    
    public function __construct() {
        
    }

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
    public function getPublished() {
        return $this->published;
    }
    
    public function setPublished($published) {
        $this->published = $published;
    }
    public function getImage() {
        return $this->image;
        
    }
    public function setImage(Image $image) {
        $this->image = $image;
    }
    
       public function getFile() {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }
}