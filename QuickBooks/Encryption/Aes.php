<?php

/** 
 * AES Encryption (depends on mcrypt for now)
 * 
 * Copyright (c) 2010 Keith Palmer / ConsoliBYTE, LLC.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.opensource.org/licenses/eclipse-1.0.php
 * 
 * @author Keith Palmer <keith@ConsoliBYTE.com>
 * 
 * @package QuickBooks
 */

// 
QuickBooks_Loader::load('/QuickBooks/Encryption.php');

/**
 * 
 */
class QuickBooks_Encryption_Aes extends QuickBooks_Encryption
{
	static function encrypt($key, $plain, $salt = null)
	{
		return false;
	}
	
	static function decrypt($key, $encrypted)
	{
		return false;
	}
}