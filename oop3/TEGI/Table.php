<?php


class Table
{
    protected array $data;
    protected array $attributes;

    /**
     * @param array $data
     * @return Table
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param array $attributes
     * @return Table
     */
    public function setAttributes(array $attributes): static
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function html(): string
    {
        $attrib = '';
        foreach ($this->attributes as $atr => $value) {
            $attrib .= "\t$atr=\"$value\"";
        }
        $html = '';
        foreach ($this->data as $value) {
            $html .= "\t<td>$value</td>\n";
        }
        return "\t<table $attrib><tr>\n$html</tr><tr>\n$html</tr></table>";
    }


}