<?php


class MaximumMembersReached extends Exception
{
    protected $message = 'max 3 members allowed';
}


class Video
{
    public $videoName;
    public function __construct($videoName)
    {
        $this->videoName = $videoName;
    }
    public function downloadVideo()
    {
        echo "downloading $this->videoName";
    }
}

class User
{
    public function download(Video $video)
    {
        if (!$this->subscribed()) {
            throw new Exception('blabla');
        } else {
            $video->downloadVideo();
        }
    }
    public function subscribed()
    {
        return false;
    }
}

// $lukasz = new User();
// $lukasz->download(new Video('scareface'));


class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}


class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw new MaximumMembersReached;
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}


class TeamMembersController
{
    public function store()
    {
        $team = new Team;
        try {
            $team->add(new Member('Jane doe'));
            $team->add(new Member('Jane doe2'));
            $team->add(new Member('Jane doe3'));
            $team->add(new Member('Jane doe4'));

            var_dump($team->members());
        } catch (MaximumMembersReached $e) {
            var_dump($e->getMessage());
        }
    }
}

$newTeam = new TeamMembersController();
$newTeam->store();
