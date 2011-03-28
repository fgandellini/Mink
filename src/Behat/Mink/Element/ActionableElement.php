<?php

namespace Behat\Mink\Element;

use Behat\Mink\Exception\ElementNotFound;

abstract class ActionableElement extends Element
{
    public function clickLink($locator)
    {
        $link = $this->getSession()->getPage()->findLink($locator);

        if (null === $link) {
            throw new ElementNotFound('link', $locator);
        }

        $this->getSession()->getDriver()->click($link->getXpath());
    }

    public function clickButton($locator)
    {
        $button = $this->getSession()->getPage()->findButton($locator);

        if (null === $button) {
            throw new ElementNotFound('button', $locator);
        }

        $this->getSession()->getDriver()->click($button->getXpath());
    }

    public function fillField($locator, $value)
    {
        $field = $this->getSession()->getPage()->findField($locator);

        if (null === $field) {
            throw new ElementNotFound('field', $field);
        }

        $this->getSession()->getDriver()->fill($field->getXpath(), $value);
    }

    public function chooseField($locator)
    {
        $field = $this->getSession()->getPage()->findField($locator);

        if (null === $field) {
            throw new ElementNotFound('field', $field);
        }

        $this->getSession()->getDriver()->choose($field->getXpath());
    }

    public function checkField($locator)
    {
        $field = $this->getSession()->getPage()->findField($locator);

        if (null === $field) {
            throw new ElementNotFound('field', $field);
        }

        $this->getSession()->getDriver()->check($field->getXpath());
    }

    public function uncheckField($locator)
    {
        $field = $this->getSession()->getPage()->findField($locator);

        if (null === $field) {
            throw new ElementNotFound('field', $field);
        }

        $this->getSession()->getDriver()->uncheck($field->getXpath());
    }

    public function selectFieldOption($locator, $value)
    {
        $field = $this->getSession()->getPage()->findField($locator);

        if (null === $field) {
            throw new ElementNotFound('field', $field);
        }

        $this->getSession()->getDriver()->selectOption($field->getXpath(), $value);
    }

    public function attachFileToField($locator, $path)
    {
        $field = $this->getSession()->getPage()->findField($locator);

        if (null === $field) {
            throw new ElementNotFound('field', $field);
        }

        $this->getSession()->getDriver()->attachFile($field->getXpath(), $path);
    }
}