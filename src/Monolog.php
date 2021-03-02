<?php

declare(strict_types=1);
/**
 * This file is part of swoole-hook-addon.
 *
 * @link     https://github.com/huangdijia/swoole-hook-addon
 * @document https://github.com/huangdijia/swoole-hook-addon/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
namespace Monolog\Handler\SyslogUdp;

function is_resource($resource)
{
    if (defined('SWOOLE_HOOK_SOCKETS') && (\Swoole\Runtime::getHookFlags() & SWOOLE_HOOK_SOCKETS)) {
        return \is_resource($resource) || $resource instanceof \Swoole\Coroutine\Socket;
    }

    return \is_resource($resource);
}
