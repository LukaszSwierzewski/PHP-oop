<?php



abstract class AchivmentType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return str_replace(' ', '-', $this->name()) . '.png';
    }

    abstract public function qual($user);
}


class First100 extends AchivmentType
{


    public function qual($user)
    {
    }
}



class Top50 extends AchivmentType
{


    public function qual($user)
    {
        return $user;
    }
}


$achive = new First100();


$achive2 = new Top50();

echo $achive2->icon();
echo $achive2->name();
