<?php
namespace App;

class MagicClass{
    private $properties = [];

    public function __construct(){
        echo "__construct\n";
    }

    public function __destruct(){
        echo "__destruct\n";
    }

    public function __call(string $name, array $arguments): mixed{
        echo "__call\n";
        return null;
    }

    public static function __callStatic(string $name, array $arguments): mixed{
        echo "__callStatic\n";
        return null;
    }

    public function __get(string $name): mixed{
        echo "__get\n";
        return $this->properties[$name] ?? null;
    }

    public function __set(string $name, mixed $value): void{
        echo "__set\n";
        $this->properties[$name] = $value;
    }

    public function __isset(string $name): bool{
        echo "__isset\n";
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void{
        echo "__unset\n";
        unset($this->properties[$name]);
    }

    public function __sleep(): array{
        echo "__sleep\n";
        return ['properties'];
    }

    public function __wakeup(): void{
        echo "__wakeup\n";
    }

    public function __toString(): string{
        return "__toString";
    }

    public function __invoke(...$arguments): mixed{
        echo "__invoke\n";
        return null;
    }

    public static function __set_state(array $properties): object{
        echo "__set_state\n";
        return new self();
    }

    public function __clone(): void{
        echo "__clone\n";
    }

    public function __debugInfo(): array{
        echo "__debugInfo\n";
        return ['message' => 'MagicClass'];
    }

    public function __serialize(): array{
        echo "__serialize\n";
        return ['properties' => $this->properties];
    }

    public function __unserialize(array $data): void{
        echo "__unserialize\n";
        $this->properties = $data['properties'];
    }
}
