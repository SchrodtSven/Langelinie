<?php

class IniParser
{
    private array $dta;

    private function __construct(private string $file = "../git_info.ini")
    {
        $this->dta = parse_ini_file($file);
    }

    public static function f(string $file = "../git_info.ini")
    {
        return new self($file);
    }

    public function get(string $key=""): mixed
    {
        if($key == "") {
            return $this->dta;
        } else {
            return $this->dta[$key] ?? null;
        }
    }
}

$parser = IniParser::f();

$b = $parser->get('remote.origin.url');

echo $b;