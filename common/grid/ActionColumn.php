<?php

namespace common\grid;

use Yii;
use yii\bootstrap5\Html;
use kartik\grid\ActionColumn as GridActionColumn;

class ActionColumn extends GridActionColumn
{
    protected function setDefaultButton($name, $title, $icon)
    {
        $notBs3 = !$this->grid->isBs(3);
        if (isset($this->buttons[$name])) {
            return;
        }
        $this->buttons[$name] = function ($url) use ($name, $title, $icon, $notBs3) {
            $opts = "{$name}Options";
            $options = ['title' => $title, 'aria-label' => $title, 'data-pjax' => '0'];
            if ($this->grid->enableEditedRow && $name != 'delete') {
                Html::addCssClass($options, 'enable-edited-row');
            }
            if ($name === 'delete') {
                $item = !empty($this->grid->itemLabelSingle) ? $this->grid->itemLabelSingle : Yii::t('kvgrid', 'item');
                $options['data-method'] = 'post';
                $options['data-confirm'] = Yii::t('kvgrid', 'Are you sure to delete this {item}?', ['item' => $item]);
            }
            $options = array_replace_recursive($options, $this->buttonOptions, $this->$opts);
            $label = $this->renderLabel(
                $options,
                $title,
                ['class' => $icon, 'aria-hidden' => 'true']
            );
            if (!$this->_isDropdown) {
                return Html::a($label, $url, $options);
            }
            if ($notBs3) {
                Html::addCssClass($options, ['dropdown-item']);
            }
            $options['tabindex'] = '-1';
            $link = Html::a($label, $url, $options);
            return $notBs3 ? $link : "<li>{$link}</li>\n";
        };
    }

    protected function initDefaultButtons()
    {
        $notBs3 = !$this->grid->isBs(3);

        $this->setDefaultButton('view', Yii::t('kvgrid', 'View'), $notBs3 ? 'fas fa-eye' : 'fas fa-eye');
        $this->setDefaultButton('update', Yii::t('kvgrid', 'Update'), $notBs3 ? 'fas fa-pencil-alt' : 'fas fa-pencil-alt');
        $this->setDefaultButton('delete', Yii::t('kvgrid', 'Delete'), $notBs3 ? 'fas fa-trash-alt' : 'fas fa-trash-alt');
    }
}
