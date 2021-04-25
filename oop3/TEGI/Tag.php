<?php


 class Tag
{
    protected string $name;
    protected array $attributes;
    protected string $innerText;

    public function __construct($name, $attributes, $innerText)
    {
        $this->setName($name);
        $this->setAttributes($attributes);
        $this->setInnerText($innerText);
    }

    /**
     * @param string $name
     * @return Tag
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $attributes
     * @return Tag
     */
    public function setAttributes(array $attributes): static
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @param string $innerText
     * @return Tag
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    /**
     * Выводим открывающую часть тега:
     * @return string
     */
    public function open(): string
    {
        $name = $this->name;
        $attrib = '';
        foreach ($this->attributes as $atr => $value) {
            $attrib .= "\t$atr=\"$value\"";
        }
        return "\n<$name$attrib>$this->innerText";
    }

    /**
     * Выводим закрывающую часть тега:
     * @return string
     */
    public function close(): string
    {
        $name = $this->name;
        return "</$name>";
    }
}
