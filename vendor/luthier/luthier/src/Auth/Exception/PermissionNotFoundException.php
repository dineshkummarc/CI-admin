<?php

/*
 * Luthier CI
 *
 * (c) 2018 Ingenia Software C.A
 *
 * This file is part of Luthier CI, a plugin for CodeIgniter 3. See the LICENSE
 * file for copyright information and license details
 */

namespace Luthier\Auth\Exception;

/**
 * Exception thrown when a non existing ACL permission is requested
 *
 * @author Anderson Salas <anderson@ingenia.me>
 */
class PermissionNotFoundException extends \Exception
{
};