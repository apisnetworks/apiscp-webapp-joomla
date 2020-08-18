<?php
	/**
 * Copyright (C) Apis Networks, Inc - All Rights Reserved.
 *
 * Unauthorized copying of this file, via any medium, is
 * strictly prohibited without consent. Any dissemination of
 * material herein is prohibited.
 *
 * For licensing inquiries email <licensing@apisnetworks.com>
 *
 * Written by Matt Saladna <matt@apisnetworks.com>, August 2020
 */

	namespace Module\Support\Webapps\App\Type\Joomla;

	use Module\Support\Webapps\App\Type\Unknown\Handler as Unknown;

	class Handler extends Unknown
	{
		const NAME = 'Joomla!';
		const ADMIN_PATH = '/administrator';
		const LINK = 'https://joomla.org';

		const FEAT_ALLOW_SSL = true;
		const FEAT_RECOVERY = false;

		public function changePassword($password): bool
		{
			return $this->joomla_change_admin(
				$this->hostname,
				$this->path,
				['password' => $password]
			);
		}

		public function getClassMapping(): string
		{
			// class ref is "joomla", not "joomla!"
			return 'joomla';
		}
	}