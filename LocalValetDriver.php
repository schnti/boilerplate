<?php

/*
 * Local valet driver for Kirby installations with a custom folder setup ("public" directory) and an installed cache buster.
 *
 * Inspired by: https://github.com/laravel/valet/blob/master/cli/drivers/Typo3ValetDriver.php
 *
 */

class LocalValetDriver extends LaravelValetDriver
{

	/*
	 * Document Root Subdirectory
	 *
	 * This subdirectory contains the public server resources, such as the
	 * index.php, assets and media files
	*/
	protected $publicRoot = '/public';

	/**
	 * Determine if the driver serves the request.
	 *
	 * @param string $sitePath
	 * @param string $siteName
	 * @param string $uri
	 * @return bool
	 */
	public function serves($sitePath, $siteName, $uri)
	{
		return is_dir($sitePath . $this->publicRoot);
	}

	/**
	 * Determine if the incoming request is for a static file.
	 *
	 * @param string $sitePath
	 * @param string $siteName
	 * @param string $uri
	 * @return string|false
	 */
	public function isStaticFile($sitePath, $siteName, $uri)
	{

		// May the file contains a cache busting version string like filename.12345678.css
		// If that is the case, the file cannot be found on disk, so remove the version
		// identifier before retrying below.
		if (!$this->isActualFile($filePath = $sitePath . $this->publicRoot . $uri)) {
			$uri = preg_replace("@^(.+)\.(\d+)\.(js|css|png|jpg|gif|gzip)$@", "$1.$3", $uri);
		}

		// Now that any possible version string is cleared from the filename, the resulting
		// URI should be a valid file on disc. So assemble the absolut file name with the
		// same schema as above and if it exists return its path.
		if ($this->isActualFile($staticFilePath = $sitePath . $this->publicRoot . $uri)) {
			return $staticFilePath;
		}

		// This file cannot be found in the current project and thus cannot be served.
		return false;

	}

	/**
	 * Get the fully resolved path to the application's front controller.
	 *
	 * @param string $sitePath
	 * @param string $siteName
	 * @param string $uri
	 * @return string
	 */
	public function frontControllerPath($sitePath, $siteName, $uri)
	{

		// Needed to force Kirby to use *.dev to generate its URLs...
		$_SERVER['SERVER_NAME'] = $_SERVER['HTTP_HOST'];

		if (file_exists($indexPath = $sitePath . $this->publicRoot . '/index.php')) {
			$_SERVER['SCRIPT_NAME'] = '/index.php';
			return $indexPath;
		}

	}
}