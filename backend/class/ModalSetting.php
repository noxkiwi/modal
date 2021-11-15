<?php declare(strict_types = 1);
namespace noxkiwi\modal;

/**
 * I am the list of areas on a Modal.
 *
 * @package      noxkiwi\modal
 * @author       Jan Nox <jan@nox.kiwi>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
abstract class ModalSetting
{
    public const HEAD   = 'head';
    public const BODY   = 'body';
    public const FOOT   = 'foot';
    public const SCRIPT = 'script';
    public const SIZE   = 'size';
    public const TYPE   = 'type';
    public const AREAS  = [
        self::HEAD,
        self::BODY,
        self::FOOT,
        self::SCRIPT
    ];
}
