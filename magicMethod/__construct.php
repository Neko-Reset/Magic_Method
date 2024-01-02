<?php
class Test
{
    // プロパティ
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
        echo "コンストラクターが起動しました。";
    }
}

$person = new Test("太郎", 23); // この時点でコンストラクターが自動的に呼び出し
echo $person->name;             // 太郎
echo $person->age;              // 23
