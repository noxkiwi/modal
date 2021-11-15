<?php declare(strict_types = 1);
namespace noxkiwi\modal;

use noxkiwi\frontend\Constants\HtmlAttributes;
use noxkiwi\frontend\Tag\Html\Div;

/**
 * I am the list of areas on a Modal.
 *
 * @package      noxkiwi\modal
 * @author       Jan Nox <jan@nox.kiwi>
 * @license      https://nox.kiwi/license
 * @copyright    2021 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
class Modal extends Div
{
    /**
     * @inheritDoc
     */
    public function render($data = null): string
    {
        $modalMain = new Div();
        $modalMain->setAttribute(HtmlAttributes::DOM_ID, "crudModal{$this->getAttribute(HtmlAttributes::DOM_ID)}");
        $modalMain->setAttribute(HtmlAttributes::CSS_CLASS, 'modal fade');
        $modalMain->setAttribute(HtmlAttributes::TABINDEX, '-1');
        $modalMain->setAttribute(HtmlAttributes::ROLE, 'dialog');
        // dialog
        $modalDialogue = new Div();
        $modalDialogue->setClass('modal-dialog modal-dialog-centered');
        $modalDialogue->setAttribute(HtmlAttributes::ROLE, 'document');
        // content
        $modalContent = new Div();
        $modalContent->setClass('modal-content');
        // Header
        $modalHeader = new Div();
        $modalHeader->setClass('modal-header');
        // Body
        $modalBody = new Div();
        $modalBody->setClass('modal-body');
        $modalBody->add(parent::render());
        // footer
        $modalFooter = new Div();
        $modalFooter->setClass('modal-footer float-left');
        // MFC
        $modalFooterContainer = new Div();
        $modalFooterContainer->setClass('modal-foot-container');
        $modalFooter->add($modalFooterContainer);
        $modalContent->add($modalHeader);
        $modalContent->add($modalBody);
        $modalContent->add($modalFooter);
        $modalDialogue->add($modalContent);
        $modalMain->add($modalDialogue);

        return $modalMain->render($data);
    }
}
