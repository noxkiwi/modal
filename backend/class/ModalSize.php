<?php declare(strict_types = 1);
namespace noxkiwi\modal;

/**
 * I am the list of modal sizes.
 *
 * @package      noxkiwi\modal
 * @author       Jan Nox <jan@nox.kiwi>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
abstract class ModalSize
{
    public const X_SMALL = 'modal-xs';
    public const SMALL   = 'modal-sm';
    public const MEDIUM  = 'modal-md';
    public const LARGE   = 'modal-lg';
    public const X_LARGE = 'modal-xl';
    public const SIZES   = [
        self::X_SMALL,
        self::SMALL,
        self::MEDIUM,
        self::LARGE,
        self::X_LARGE
    ];
}
