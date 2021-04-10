<?php


class Collection
{
    protected $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }
    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));
    }
}


class VideosCollection extends Collection
{
    public function length()
    {

        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


$collection = new VideosCollection([
    new Video('some video', 120),
    new Video('other video', 140),
    new Video('another video', 140),
]);


echo $collection->sum('length');
echo $collection->length('length');
