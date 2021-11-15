<?php declare(strict_types = 1);
namespace noxkiwi\modal;

/**
 * I am the list of modal styles.
 *
 * @package      noxkiwi\modal
 * @author       Jan Nox <jan@nox.kiwi>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
abstract class ModalStyle
{
    public const PRIMARY   = 'alert-primary';
    public const SECONDARY = 'alert-secondary';
    public const SUCCESS   = 'alert-success';
    public const DANGER    = 'alert-danger';
    public const WARNING   = 'modal-warning';
    public const INFO      = 'modal-info';
    public const LIGHT     = 'modal-light';
    public const DARK      = 'modal-dark';
    public const SIZES     = [
        self::PRIMARY,
        self::SECONDARY,
        self::SUCCESS,
        self::DANGER,
        self::WARNING,
        self::INFO,
        self::LIGHT,
        self::DARK
    ];
}
