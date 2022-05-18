<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class Access Modifiers</title>
</head>
<body>
    <?php
        class Fruit {
            public $name;
            protected $weight;
            private $color;

            function __construct($name, $color) {
                $this->name = $name;
                $this->setColor($color);
            }

            protected function setWeight(float $weight) {
                if ($weight <= 0 || $weight > 200) {
                    echo $weight;
                    throw new Exception("Weight is not in permissible range", 1);
                }
                $this->weight = $weight;
            }

            public function getWeight() {
                return $this->weight;
            }

            private function setColor(string $color) {
                $this->color = $color;
            }

            protected function getColor() {
                return $this->color;
            }

        }

        class Strawberry extends Fruit {
            function __construct(float $weight, string $color) {
                // call parent class constructor
                parent::__construct("Strawberry", $color);
                $this->setWeight($weight);
            }

            public final function introduce() {
                echo "<h1>{$this->name}</h1>";
                echo "<h2>{$this->weight}</h2>";
                echo "<h3>{$this->getColor()}</h3>";
                echo "<h3>{$this->color}</h3>"; // Error because we can't access color outside of class
            }
        }

        $f1 = new Strawberry(0.12, "Red");
        $f1->introduce();

    ?>
</body>
</html>