<?php

class TicTac
{
    protected array $map = [];

    public function __construct($size)
    {
        $this->init($size);
    }

    /**
     * @param array $map
     * @return TicTac
     */
    public function setMap(array $map): static
    {
        $this->map = $map;
        return $this;
    }

    /**
     * @return array
     */
    public function getMap(): array
    {
        return $this->map;
    }

    public function init(int $size): static
    {
        $this->map = [];

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $this->map[$i][$j] = "";
            }
        }

        return $this;
    }

    public function putCross(int $i, int $j): static
    {
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "x";
        }
        return $this;
    }

    public function putZero(int $i, int $j): static
    {
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "0";
        }
        return $this;
    }

    public function checkWinnerByRow($map)
    {
        foreach ($map as $row) {
            if ($row[0] !== "") {
                $winner = true;
                for ($j = 1; $j < count($row); $j++) {
                    if ($row[$j] !== $row[$j - 1]) {
                        $winner = false;
                    }
                }
                if ($winner) {
                    return true;
                }
            }
        }
        return false;
    }

    public function checkWinner()
    {
        return $this->checkWinnerByRow($this->map) or $this->checkWinnerByColl();
    }

    public function checkWinnerByColl()
    {
        $map = array_map(null, ...$this->map);
        return $this->checkWinnerByRow($map);
    }

}