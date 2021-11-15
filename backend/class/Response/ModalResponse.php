<?php declare(strict_types = 1);
namespace noxkiwi\modal\Response;

use noxkiwi\core\Response;

/**
 * I am the Modal Response object.
 *
 * @package      noxkiwi\modal\Response
 * @author       Jan Nox <jan@nox.kiwi>
 * @license      https://nox.kiwi/license
 * @copyright    2020 noxkiwi
 * @version      1.0.0
 * @link         https://nox.kiwi/
 */
final class ModalResponse extends Response
{
    /** @var string **/
    public string $size;
    /** @var string **/
    public string $head;
    /** @var string **/
    public string $body;
    /** @var string **/
    public string $foot;
    /** @var string[] **/
    public array $scripts;
}
