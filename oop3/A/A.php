<?php
/**
 *  <a href="https://www.tut.by">Ok</a>
 * Class A
 */

class A
{
    protected string $href;
    protected string $innerText;

    /**
     * @param string $href
     * @return A
     */
    public function setHref(string $href): static
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $innerText
     * @return A
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        return "<a href='$this->href'>$this->innerText</a>";
    }
}